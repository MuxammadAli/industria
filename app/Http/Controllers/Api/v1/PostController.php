<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Post;
use App\Models\PostTags;
use App\Models\Subscribe;
use App\Models\Tags;
use App\Models\Views;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Modules\Translations\Entities\Langs;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Post
 *
 */
class PostController extends ApiController
{
    public $modelClass = Post::class;

    /**
     * Post Get all
     *
     * @response {
     *  "id": "bigint",
     *  "title": "string",
     *  "content": "string",
     *  "top": "integer",
     *  "popular": "integer",
     *  "description": "string",
     *  "type": "integer",
     *  "image": "string",
     *  "video": "string",
     *  "category_id": "integer",
     *  "status": "integer",
     *  "published_at": "datetime",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     * "roles": ["admin"]
     * }
     * @var Request $request
     */
    public function index(Request $request)
    {
        $filters = $request->get('filter');
        $filter = [];
        if (!empty($filters)) {
            foreach ($filters as $k => $item) {
                $filter[] = AllowedFilter::exact($k);
            }
        }

        $query = QueryBuilder::for($this->modelClass);

        if (isset($this->modelClass::rules()['lang'])) {
            $query->where(['lang' => Langs::getLangId(Lang::getLocale())]);
        }

        if (!empty($request->get('title'))) {
            $query->where('title', 'ilike', '%' . $request->get('title') . '%');
        }
        $query->allowedFilters($filter);
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }

    /**
     * @param Request $request
     * @param $slug
     * @return mixed
     */
    public function slug(Request $request, $slug)
    {
        $model = $this->modelClass::whereSlug($slug)
            ->whereStatus(Post::STATUS_ACTIVE)
            ->when(isset($this->modelClass::rules()['lang']), function ($query) {
                $query->where(['lang' => Langs::getLangId(Lang::getLocale())]);
            })
            ->firstOrFail();

        $view = Views::where('post_id', $model->id)->first();
        if ($view instanceof Views) {
            $view->update(['viewed' => $view->viewed + 1]);
        } else {
            Views::create([
                'post_id' => $model->id,
                'viewed' => 1
            ]);
        }

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }
        return $model;
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|QueryBuilder[]
     */
    public function similarNews(Request $request, $id)
    {
        $data = [];
        $post_tags = PostTags::where(['post_id' => $id])->get();
        foreach ($post_tags as $post_tag) {
            $data[] = $post_tag->tag_id;
        }


        $filters = $request->get('filter');
        $filter = [];
        if (!empty($filters)) {
            foreach ($filters as $k => $item) {
                $filter[] = AllowedFilter::exact($k);
            }
        }

        $query = QueryBuilder::for($this->modelClass);

        $query->allowedFilters($filter);
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);

        if (isset($this->modelClass::rules()['lang'])) {
            $query->where(['lang' => Langs::getLangId(Lang::getLocale())]);
        }
        $query->where(['status' => Post::STATUS_ACTIVE]);
        $query->join('post_tags', 'post.id', '=', 'post_tags.post_id')
            ->select("post.*")
            ->whereIn('post_tags.tag_id', $data)
            ->where('post.id', '<>', $id)
            ->groupBy('post.id');

        return $query->limit(3)->get();
    }


    /**
     * @param Request $request
     * @param $tagId
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function byTag(Request $request, $tagId)
    {
        Tags::findOrFail($tagId);

        $filters = $request->get('filter');
        $filter = [];
        if (!empty($filters)) {
            foreach ($filters as $k => $item) {
                $filter[] = AllowedFilter::exact($k);
            }
        }

        $query = QueryBuilder::for($this->modelClass);

        $query->allowedFilters($filter);
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);

        if (isset($this->modelClass::rules()['lang'])) {
            $query->where(['lang' => Langs::getLangId(Lang::getLocale())]);
        }
        $query->where(['status' => Post::STATUS_ACTIVE]);
        $query->leftJoin('post_tags', 'post.id', '=', 'post_tags.post_id')
            ->select("post.*")
            ->where('post_tags.tag_id', $tagId)
            ->groupBy('post.id');

        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }

    /**
     * Post create
     *
     * @bodyParam id bigint no-required id
     * @bodyParam title string no-required title
     * @bodyParam content string no-required content
     * @bodyParam top integer no-required top
     * @bodyParam popular integer no-required popular
     * @bodyParam description string no-required description
     * @bodyParam type integer no-required type
     * @bodyParam image string no-required image
     * @bodyParam video string no-required video
     * @bodyParam category_id integer no-required category_id
     * @bodyParam status integer no-required status
     * @bodyParam published_at datetime no-required published_at
     * @bodyParam created_at datetime no-required created_at
     * @bodyParam updated_at datetime no-required updated_at

     *
     * @var Request $request
     */
    public function create(Request $request)
    {
        $request->validate($this->modelClass::rules());

        DB::beginTransaction();
        try {
            $model = $this->modelClass::create($request->all());

            $tags = $request->get('tags') ? $request->get('tags') : [];

            PostTags::where([
                'post_id' => $model->id
            ])->delete();

            if (!empty($tags) && is_array($tags)) {
                foreach ($tags as $tag) {
                    PostTags::create([
                        'post_id' => $model->id,
                        'tag_id' => $tag
                    ]);
                }
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return response($exception->getMessage(), 500);
        }

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }

        return $model;
    }

    /**
     * Post update
     *
     * @queryParam id required ID
     * @bodyParam id bigint no-required id
     * @bodyParam title string no-required title
     * @bodyParam content string no-required content
     * @bodyParam top integer no-required top
     * @bodyParam popular integer no-required popular
     * @bodyParam description string no-required description
     * @bodyParam type integer no-required type
     * @bodyParam image string no-required image
     * @bodyParam video string no-required video
     * @bodyParam category_id integer no-required category_id
     * @bodyParam status integer no-required status
     * @bodyParam published_at datetime no-required published_at
     * @bodyParam created_at datetime no-required created_at
     * @bodyParam updated_at datetime no-required updated_at

     *
     * @var $id
     * @var Request $request
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->modelClass::rules());

        $model = $this->modelClass::findOrFail($id);

        DB::beginTransaction();
        try {
            $model->update($request->all());

            $tags = $request->get('tags') ? $request->get('tags') : [];

            PostTags::where([
                'post_id' => $model->id
            ])->delete();

            if (!empty($tags) && is_array($tags)) {
                foreach ($tags as $tag) {
                    PostTags::create([
                        'post_id' => $model->id,
                        'tag_id' => $tag
                    ]);
                }
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return response($exception->getMessage(), 500);
        }

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }

        return $model;
    }


    /**
     * @param Request $request
     * @return Subscribe
     */
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $email = $request->get('email');
        $model = Subscribe::where(['email' => $email])->get();

        if (!($model instanceof Subscribe)) {
            $model = Subscribe::create($request->all());
        }

        return $model;
    }
}
