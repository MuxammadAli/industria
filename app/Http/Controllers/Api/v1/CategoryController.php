<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Category;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Category
 *
 */
class CategoryController extends ApiController
{
    public $modelClass = Category::class;

    /**
     * Category Get all
     *
     * @response {
     *  "id": "bigint",
     *  "title_uz": "string",
     *  "title_ru": "string",
     *  "title_en": "string",
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
        $query->allowedFilters($filter);
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);

        if ($request->get('title')) {
            $query->where('title_uz', 'ilike', '%' . $request->get('title') . '%');
            $query->where('title_ru', 'ilike', '%' . $request->get('title') . '%');
            $query->where('title_en', 'ilike', '%' . $request->get('title') . '%');
        }

        return $query->paginate($request->per_page);
    }

    /**
     * Category view
     *
     * @queryParam id required ID
     * @var $id
     * @response {
     *  "id": "bigint",
     *  "title_uz": "string",
     *  "title_ru": "string",
     *  "title_en": "string",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     * "roles": ["all"]
     * }
     */
    public function show(Request $request, $id)
    {
        $model = $this->modelClass::findOrFail($id);

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }

        return $model;
    }

    /**
     * Category create
     *
     * @bodyParam id bigint no-required id
     * @bodyParam title_uz string no-required title_uz
     * @bodyParam title_ru string no-required title_ru
     * @bodyParam title_en string no-required title_en
     * @bodyParam created_at datetime no-required created_at
     * @bodyParam updated_at datetime no-required updated_at
     *
     * @var Request $request
     */
    public function create(Request $request)
    {
        $request->validate($this->modelClass::rules());
        $model = $this->modelClass::create($request->all());

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }

        return $model;
    }

    /**
     * Category update
     *
     * @queryParam id required ID
     * @bodyParam id bigint no-required id
     * @bodyParam title_uz string no-required title_uz
     * @bodyParam title_ru string no-required title_ru
     * @bodyParam title_en string no-required title_en
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
        $model->update($request->all());

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }

        return $model;
    }

    /**
     * Category delete
     *
     * @queryParam id required ID
     *
     * @var $id
     */
    public function destroy(int $id)
    {
        $model = $this->modelClass::findOrFail($id);
        $model->delete();
        return response()->json('deleted', 204);
    }
}
