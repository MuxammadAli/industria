<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\MenuItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group MenuItems
 *
 */
class MenuItemsController extends ApiController
{
    public $modelClass = MenuItems::class;

    /**
     * MenuItems Get all
     *
     * @response {
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
        $query->whereNull('menu_item_parent_id');
        $query->allowedFilters($filter);
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }

    /**
     * MenuItems view
     *
     * @queryParam id required ID
     * @var $id
     * @response {
     * "roles": ["all"]
     * }
     */

    /**
     * MenuItems create
     *
     *
     * @var Request $request
     */
    public function create(Request $request)
    {
        $request->validate($this->modelClass::rules());

        $menu = $this->modelClass::create($request->all());
        #Cache::tags(['menu'])->flush();
        return $menu;
    }

    public function sort(Request $request)
    {
        try {
            $data = $request->get('nestable');
            if ($data) {
                $array = $data;
                $this->recursion($array);
            }
        } catch(\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()]);
        }

        #Cache::tags(['menu'])->flush();

        return true;
    }

    private function recursion($array, $parent_id = null)
    {
        if (count($array)) {
            $i = 1;
            foreach ($array as $arr) {
                $this->modelClass::where('id', $arr['id'])->update(['sort' => $i, 'menu_item_parent_id' => $parent_id]);
                if (isset($arr['menuItems'])) {
                    $this->recursion($arr['menuItems'], $arr['id']);
                }
                $i++;
            }
        }
    }

    /*public function sort(Request $request, $id)
    {
        $model = $this->modelClass::findOrFail($id);

        foreach ($request->childs as $index => $item) {
            $child = $this->modelClass::findOrFail($item);
            $child->update(['menu_item_parent_id' => $id, 'sort' => $index]);
        }
        Cache::tags(['menu'])->flush();
        return $model;
    }*/

    /**
     * MenuItems update
     *
     * @queryParam id required ID
     *
     * @var $id
     * @var Request $request
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->modelClass::rules());

        $model = $this->modelClass::findOrFail($id);
        $model->update($request->all());
        # \Illuminate\Support\Facades\Cache::tags(['menu'])->flush();
        return $model;
    }

    /**
     * MenuItems delete
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
        # \Illuminate\Support\Facades\Cache::tags(['menu'])->flush();
        return response()->json('deleted', 204);
    }
}
