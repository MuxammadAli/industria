<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Views extends Model{

    protected $table = 'views';
    protected $fillable = ['id', 'post_id', 'viewed', 'created_at', 'updated_at'];

    public function rules()
    {
        return [
            'id' => 'bigint',
            'post_id' => 'integer',
            'viewed' => 'integer',
        ];
    }


    public function Post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

}