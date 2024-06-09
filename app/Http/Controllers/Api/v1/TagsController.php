<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Tags;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Tags
 *
 */
class TagsController extends ApiController
{
    public $modelClass = Tags::class;

    /**
    * Tags Get all
    *
    * @response {
    *  "id": "bigint",
*  "name": "string",
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
        if (!empty($request->get('name'))) {
            $query->where('name', 'ilike', '%'.$request->get('name').'%');
        }
        $query->allowedFilters($filter);
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }

    /**
    * Tags view
    *
    * @queryParam id required ID
    * @var $id
    * @response {
    *  "id": "bigint",
*  "name": "string",
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
     * Tags create
     *
     * @bodyParam id bigint no-required id
* @bodyParam name string no-required name
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
     * Tags update
     *
     * @queryParam id required ID
     * @bodyParam id bigint no-required id
* @bodyParam name string no-required name
* @bodyParam created_at datetime no-required created_at
* @bodyParam updated_at datetime no-required updated_at

     *
     * @var $id
     * @var Request $request
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->modelClass::rules($id));

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
     * Tags delete
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
