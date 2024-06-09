<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Modules\Translations\Entities\Langs;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Settings
 *
 */
class LangsController extends ApiController
{
    public $modelClass = Langs::class;

    public function index(Request $request)
    {
        $query = QueryBuilder::for($this->modelClass);
        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->modelClass::rules());

        $model = $this->modelClass::findOrFail($id);
        $model->update($request->all());
        return $model;
    }

}
