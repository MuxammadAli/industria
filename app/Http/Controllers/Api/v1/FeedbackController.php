<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Feedback
 *
 */
class FeedbackController extends ApiController
{
    public $modelClass = Feedback::class;

    /**
     * Feedback Get all
     *
     * @response {
     *  "id": "bigint",
     *  "name": "string",
     *  "email": "string",
     *  "phone": "string",
     *  "files": "string",
     *  "type": "integer",
     *  "object_id": "integer",
     *  "region_id": "integer",
     *  "district_id": "integer",
     *  "address": "string",
     *  "text": "text",
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
        $query->allowedFilters($filter);

        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }

    /**
     * Feedback view
     *
     * @queryParam id required ID
     * @var $id
     * @response {
     *  "id": "bigint",
     *  "name": "string",
     *  "email": "string",
     *  "phone": "string",
     *  "files": "string",
     *  "type": "integer",
     *  "object_id": "integer",
     *  "region_id": "integer",
     *  "district_id": "integer",
     *  "address": "string",
     *  "text": "text",
     *  "status": "integer",
     *  "is_deleted": "integer",
     *  "deleted_at": "datetime",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     * "roles": ["all"]
     * }
     */

    /**
     * Feedback create
     *
     * @bodyParam id bigint no-required id
     * @bodyParam name string no-required name
     * @bodyParam email string no-required email
     * @bodyParam phone string no-required phone
     * @bodyParam files string no-required files
     * @bodyParam type integer no-required type
     * @bodyParam object_id integer no-required object_id
     * @bodyParam region_id integer no-required region_id
     * @bodyParam district_id integer no-required district_id
     * @bodyParam address string no-required address
     * @bodyParam text text no-required text
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
     * Feedback update
     *
     * @queryParam id required ID
     * @bodyParam id bigint no-required id
     * @bodyParam name string no-required name
     * @bodyParam email string no-required email
     * @bodyParam phone string no-required phone
     * @bodyParam files string no-required files
     * @bodyParam type integer no-required type
     * @bodyParam object_id integer no-required object_id
     * @bodyParam region_id integer no-required region_id
     * @bodyParam district_id integer no-required district_id
     * @bodyParam address string no-required address
     * @bodyParam text text no-required text
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
     * Feedback delete
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
