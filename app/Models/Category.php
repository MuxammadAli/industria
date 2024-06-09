<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = ['id', 'title_uz', 'title_ru', 'title_en', 'created_at', 'updated_at'];

    public static function rules()
    {
        return [
            'id' => 'bigint',
            'title_uz' => 'string',
            'title_ru' => 'string',
            'title_en' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',

        ];
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'category_id');
    }
}
