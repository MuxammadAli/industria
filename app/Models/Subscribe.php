<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model{

    protected $table = 'subscribe';
    protected $fillable = ['id', 'email', 'status', 'created_at', 'updated_at'];

    public function rules()
    {
        return [
            'id' => 'bigint',
            'email' => 'string',
            'status' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}