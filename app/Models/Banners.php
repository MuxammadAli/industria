<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Filemanager\Entities\Files;

class Banners extends Model
{
    protected $table = 'banners';

    protected $fillable = ['id', 'sort', 'file_id', 'link', 'status', 'target', 'created_at', 'updated_at'];

    public static function rules()
    {
        return [
            'id' => 'bigint',
            'sort' => 'integer',
            'file_id' => 'integer',
            'link' => 'string',
            'status' => 'integer',
            'target' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',

        ];
    }

    protected $with = [
      'files'
    ];

    public function files()
    {
        return $this->belongsTo(Files::class, 'file_id');
    }
}
