<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';

    protected $fillable = ['id', 'name', 'name_uz', 'name_ru', 'name_en', 'code', 'country_id', 'status', 'is_deleted', 'deleted_at', 'created_at', 'updated_at'];

    public static function rules()
    {
        return [
            'id' => 'bigint',
            'name' => 'string',
            'name_uz' => 'string',
            'name_ru' => 'string',
            'name_en' => 'string',
            'code' => 'string',
            'country_id' => 'integer',
            'status' => 'integer',
            'is_deleted' => 'integer',
            'deleted_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',

        ];
    }
}
