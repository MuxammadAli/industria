<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Modules\Filemanager\Entities\Files;
use Modules\Translations\Entities\Langs;
use Psy\Util\Str;

class Settings extends Model
{
    protected $table = 'settings';

    protected $fillable = ['id', 'name', 'value', 'photo', 'slug', 'link', 'alias', 'lang_hash', 'sort', 'lang', 'status', 'is_deleted', 'deleted_at', 'created_at', 'updated_at'];

    public static function rules()
    {
        return [
            'id' => 'bigint',
            'name' => 'string',
            'value' => 'string|nullable',
            'photo' => 'string|nullable',
            'slug' => 'string',
            'link' => 'string|nullable',
            'alias' => 'string|nullable',
            'lang_hash' => 'string',
            'sort' => 'integer|nullable',
            'lang' => 'integer',
            'status' => 'integer',
            'is_deleted' => 'integer',
            'deleted_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    protected $appends = [
        'files',
    ];

    public function getFilesAttribute()
    {
        if ($this->photo == null) {
            return null;
        }
        $data = Files::where(['id' => intval($this->attributes['photo'])])->first();
      
        return $data;
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = \Illuminate\Support\Str::slug($value);
        if (!array_key_exists('id', $this->attributes)) {
            $this->attributes['status'] = 1;
        }
    }
}
