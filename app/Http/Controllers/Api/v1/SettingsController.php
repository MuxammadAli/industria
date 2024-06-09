<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Menu;
use App\Models\Settings;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Lang;
use Modules\Translations\Entities\Langs;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Settings
 *
 */
class SettingsController extends ApiController
{
    public $modelClass = Settings::class;

    /**
     * Settings Get all
     *
     * @response {
     *  "id": "bigint",
     *  "name": "string",
     *  "value": "string",
     *  "photo": "string",
     *  "slug": "string",
     *  "link": "string",
     *  "alias": "string",
     *  "lang_hash": "string",
     *  "sort": "integer",
     *  "lang": "integer",
     *  "status": "integer",
     *  "is_deleted": "integer",
     *  "deleted_at": "datetime",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     * "roles": ["admin"]
     * }
     * @var Request $request
     */
    public function index(Request $request)
    {
        // $data = Cache::tags(['settings'])->get($request->getRequestUri());
        
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
            return $query->paginate($request->per_page);
    }
    /**
     * Settings view
     *
     * @queryParam id required ID
     * @var $id
     * @response {
     *  "id": "bigint",
     *  "name": "string",
     *  "value": "string",
     *  "photo": "string",
     *  "slug": "string",
     *  "link": "string",
     *  "alias": "string",
     *  "lang_hash": "string",
     *  "sort": "integer",
     *  "lang": "integer",
     *  "status": "integer",
     *  "is_deleted": "integer",
     *  "deleted_at": "datetime",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     * "roles": ["all"]
     * }
     * @var Request $request
     */
    /**
     * Settings create
     *
     * @bodyParam id bigint no-required id
     * @bodyParam name string no-required name
     * @bodyParam value string no-required value
     * @bodyParam photo string no-required photo
     * @bodyParam slug string no-required slug
     * @bodyParam link string no-required link
     * @bodyParam alias string no-required alias
     * @bodyParam lang_hash string no-required lang_hash
     * @bodyParam sort integer no-required sort
     * @bodyParam lang integer no-required lang
     * @bodyParam status integer no-required status
     * @bodyParam is_deleted integer no-required is_deleted
     * @bodyParam deleted_at datetime no-required deleted_at
     * @bodyParam created_at datetime no-required created_at
     * @bodyParam updated_at datetime no-required updated_at
     *
     * @var Request $request
     */
    public function create(Request $request)
    {
        $request->validate($this->modelClass::rules());

        $model = $this->modelClass::create($request->all());
        // Cache::tags(['settings'])->flush();
        return $model;
    }

    /**
     * Settings update
     *
     * @queryParam id required ID
     * @bodyParam id bigint no-required id
     * @bodyParam name string no-required name
     * @bodyParam value string no-required value
     * @bodyParam photo string no-required photo
     * @bodyParam slug string no-required slug
     * @bodyParam link string no-required link
     * @bodyParam alias string no-required alias
     * @bodyParam lang_hash string no-required lang_hash
     * @bodyParam sort integer no-required sort
     * @bodyParam lang integer no-required lang
     * @bodyParam status integer no-required status
     * @bodyParam is_deleted integer no-required is_deleted
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
        // Cache::tags(['settings'])->flush();
        return $model;
    }

    /**
     * Settings delete
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
        // Cache::tags(['settings'])->flush();
        return response()->json('deleted', 204);
    }
}
