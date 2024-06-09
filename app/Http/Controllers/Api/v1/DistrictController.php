<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\District;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group District
 *
 */
class DistrictController extends ApiController
{
    public $modelClass = District::class;

    /**
     * District Get all
     *
     * @response {
     *  "id": "bigint",
     *  "name": "string",
     *  "name_uz": "string",
     *  "name_ru": "string",
     *  "name_en": "string",
     *  "code": "string",
     *  "region_id": "integer",
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
        if ($request->name !== null) {
            $query->where('name', 'LIKE', '%'.$request->name.'%');
            $query->orWhere('name_ru', 'LIKE', '%'.$request->name.'%');
            $query->orWhere('name_en', 'LIKE', '%'.$request->name.'%');
            $query->orWhere('name_uz', 'LIKE', '%'.$request->name.'%');
        }
         $query->allowedFilters($filter);
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }

    /**
     * District view
     *
     * @queryParam id required ID
     * @var $id
     * @response {
     *  "id": "bigint",
     *  "name": "string",
     *  "name_uz": "string",
     *  "name_ru": "string",
     *  "name_en": "string",
     *  "code": "string",
     *  "region_id": "integer",
     *  "status": "integer",
     *  "is_deleted": "integer",
     *  "deleted_at": "datetime",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     * "roles": ["all"]
     * }
     */
    /**
     * District create
     *
     * @bodyParam id bigint no-required id
     * @bodyParam name string no-required name
     * @bodyParam name_uz string no-required name_uz
     * @bodyParam name_ru string no-required name_ru
     * @bodyParam name_en string no-required name_en
     * @bodyParam code string no-required code
     * @bodyParam region_id integer no-required region_id
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

        return $this->modelClass::create($request->all());
    }

    /**
     * District update
     *
     * @queryParam id required ID
     * @bodyParam id bigint no-required id
     * @bodyParam name string no-required name
     * @bodyParam name_uz string no-required name_uz
     * @bodyParam name_ru string no-required name_ru
     * @bodyParam name_en string no-required name_en
     * @bodyParam code string no-required code
     * @bodyParam region_id integer no-required region_id
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
        return $model;
    }

    /**
     * District delete
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
