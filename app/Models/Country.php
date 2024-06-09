<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    protected $fillable = ['id', 'name', 'name_uz', 'name_ru', 'name_en', 'code', 'status', 'is_deleted', 'deleted_at', 'created_at', 'updated_at'];

    public static function rules()
    {
        return [
            'id' => 'bigint',
            'name' => 'string',
            'name_uz' => 'string',
            'name_ru' => 'string',
            'name_en' => 'string',
            'code' => 'string',
            'status' => 'integer',
            'is_deleted' => 'integer',
            'deleted_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',

        ];
    }
}
