<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Modules\Translations\Entities\Langs;

/**
 * @group Page
 *
 */
class PageController extends ApiController
{
    public $modelClass = Page::class;

    /**
     * Page view
     *
     * @queryParam id required ID
     * @var $id
     * @response {
     *  "id": "bigint",
     *  "title": "string",
     *  "slug": "string",
     *  "description": "text",
     *  "type": "integer",
     *  "files": "string",
     *  "anons": "string",
     *  "status": "integer",
     *  "is_deleted": "integer",
     *  "lang_hash": "string",
     *  "lang": "integer",
     *  "deleted_at": "datetime",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     * "roles": ["all"]
     * }
     */

    /**
     * Page create
     *
     * @bodyParam id bigint no-required id
     * @bodyParam title string no-required title
     * @bodyParam slug string no-required slug
     * @bodyParam description text no-required description
     * @bodyParam type integer no-required type
     * @bodyParam files string no-required files
     * @bodyParam anons string no-required anons
     * @bodyParam status integer no-required status
     * @bodyParam is_deleted integer no-required is_deleted
     * @bodyParam lang_hash string no-required lang_hash
     * @bodyParam lang integer no-required lang
     * @bodyParam deleted_at datetime no-required deleted_at
     * @bodyParam created_at datetime no-required created_at
     * @bodyParam updated_at datetime no-required updated_at
     *
     * @var Request $request
     */
    public function create(Request $request)
    {
        $request->validate($this->modelClass::rules());

        return $this->modelClass::create($request->all());
    }


    /**
     * @param Request $request
     * @param $slug
     * @return mixed
     */
    public function slug(Request $request, $slug)
    {
        $model = $this->modelClass::whereSlug($slug)
            ->when(isset($this->modelClass::rules()['lang']), function ($query) {
                $query->where(['lang' => Langs::getLangId(Lang::getLocale())]);
            })
            ->firstOrFail();

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }
        return $model;
    }

    /**
     * Page update
     *
     * @queryParam id required ID
     * @bodyParam id bigint no-required id
     * @bodyParam title string no-required title
     * @bodyParam slug string no-required slug
     * @bodyParam description text no-required description
     * @bodyParam type integer no-required type
     * @bodyParam files string no-required files
     * @bodyParam anons string no-required anons
     * @bodyParam status integer no-required status
     * @bodyParam is_deleted integer no-required is_deleted
     * @bodyParam lang_hash string no-required lang_hash
     * @bodyParam lang integer no-required lang
     * @bodyParam deleted_at datetime no-required deleted_at
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
     * Page delete
     *
     * @queryParam id required ID
     *
     * @var $id
     */
    public function destroy(int $id)
    {
        $model = $this->modelClass::findOrFail($id);
        $model->update(['is_deleted' => 1]);
        $model->delete();
        return response()->json('deleted', 204);
    }
}
