<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Lang;
use Modules\Translations\Entities\Langs;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Menu
 *
 */
class MenuController extends ApiController
{
    public $modelClass = Menu::class;

    /**
     * Menu Get all
     *
     * @response {
     *  "id": "bigint",
     *  "title": "string",
     *  "alias": "string",
     *  "type": "integer",
     *  "lang": "integer",
     *  "lang_hash": "string",
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
        $filters = $request->get('filter');
        $filter = [];
        if (!empty($filters)) {
            foreach ($filters as $k => $item) {
                $filter[] = AllowedFilter::exact($k);
            }
        }

        $query = QueryBuilder::for($this->modelClass);
        $query->where(['lang' => Langs::getLangId(Lang::getLocale())]);
        $query->allowedFilters($filter);
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }



    public function slug(Request $request, $slug)
    {
        // $data = Cache::tags(['menu'])->get('menu_by_'.$slug.Lang::getLocale());
        $data = Menu::where([
            'lang' => Langs::getLangId(Lang::getLocale()),
            'alias' => $slug,
        ])->first();
        return $data;
    }

    /**
     * Menu view
     *
     * @queryParam id required ID
     * @var $id
     * @response {
     *  "menu_id": "bigint",
     *  "title": "string",
     *  "alias": "string",
     *  "type": "integer",
     *  "lang": "integer",
     *  "lang_hash": "string",
     *  "status": "integer",
     *  "is_deleted": "integer",
     *  "deleted_at": "datetime",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     * "roles": ["all"]
     * }
     */

    /**
     * Menu create
     *
     * @bodyParam menu_id bigint no-required menu_id
     * @bodyParam title string no-required title
     * @bodyParam alias string no-required alias
     * @bodyParam type integer no-required type
     * @bodyParam lang integer no-required lang
     * @bodyParam lang_hash string no-required lang_hash
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
        $menu = $this->modelClass::create($request->all());
        // Cache::tags(['menu'])->flush();
        return $menu;
    }

    /**
     * Menu update
     *
     * @queryParam id required ID
     * @bodyParam menu_id bigint no-required menu_id
     * @bodyParam title string no-required title
     * @bodyParam alias string no-required alias
     * @bodyParam type integer no-required type
     * @bodyParam lang integer no-required lang
     * @bodyParam lang_hash string no-required lang_hash
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
        // Cache::tags(['menu'])->flush();
        return $model;
    }

    /**
     * Menu delete
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
