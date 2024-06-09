<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';

    protected $fillable = ['id', 'name', 'created_at', 'updated_at'];

    public static function rules($id = 0)
    {
        return [
            'id' => 'bigint',
            'name' => 'string|unique:tags,name,'.$id,
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($model) {
            PostTags::where(['tag_id' => $model->id])->delete();
        });
    }

}
