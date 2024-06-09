<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTags extends Model
{
    protected $table = 'post_tags';

    protected $fillable = ['id', 'tag_id', 'post_id', 'created_at', 'updated_at'];

    public function rules()
    {
        return [
            'id' => 'bigint',
            'post_id' => 'integer',
            'tag_id' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
