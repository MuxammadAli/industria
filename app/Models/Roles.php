<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $timestamps = false;
    protected $table = 'roles';

    protected $fillable = ['user_id', 'role'];

    public static function rules()
    {
        return [
            'user_id' => 'integer',
            'role' => 'string',
        ];
    }
}
