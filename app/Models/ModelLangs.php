<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelLangs extends Model
{
    protected $table = 'model_langs';

    protected $fillable = ['id', 'model_id', 'model', 'lang_id', 'lang_code', 'message'];

    public static function rules()
    {
        return [
            'model_id' => 'integer|required',
            'model' => 'string|required',
            'lang_id' => 'integer',
            'lang_code' => 'string',
            'message' => 'string'
        ];
    }
}
