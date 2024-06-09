<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;
use Modules\Filemanager\Entities\Files;
use Modules\Translations\Entities\Langs;

class Page extends Model
{
    protected $table = 'page';

    protected $fillable = ['id', 'title', 'slug', 'description', 'content', 'type', 'files', 'documents', 'anons', 'status', 'is_deleted', 'lang_hash', 'lang', 'deleted_at', 'created_at', 'updated_at'];

    public static function rules()
    {
        return [
            'id' => 'bigint',
            'title' => 'string|required',
            'slug' => 'string|nullable',
            'description' => 'string|nullable',
            'type' => 'integer|nullable',
            'files' => 'string|nullable',
            'documents' => 'string|nullable',
            'anons' => 'string|nullable',
            'content' => 'string|nullable',
            'status' => 'integer|nullable',
            'is_deleted' => 'integer|nullable',
            'lang_hash' => 'string|nullable',
            'lang' => 'integer|nullable',
            'deleted_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function getTranslationsAttribute()
    {
        $data = [];
        $models = DB::table('page')->where('id','<>', $this->id)
            ->where('lang_hash', $this->lang_hash)->get();
        if (count($models) > 0) {
            foreach ($models as $model) {
                $lang = Langs::getLangCode($model->lang);
                $data[] = [
                    'id' => $model->id,
                    'slug' => $model->slug,
                    'lang' => $lang
                ];
            }
        }
        return $data;
    }

    protected $appends = [
        'file',
        'translations'
    ];

    public function getFileAttribute()
    {
        if ($this->files == null) {
            return null;
        }

        $data = Files::find(intval($this->files));
        return $data;
    }

    public function getDocuments0Attribute()
    {
        if (!empty($this->documents)) {
            return Files::whereIn('id', explode(',', $this->documents))->get();
        }
        return null;
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        if (!array_key_exists('id', $this->attributes)) {
            $this->attributes['lang_hash'] = \Illuminate\Support\Str::random(32);
            $this->attributes['lang'] = Langs::getLangId(Lang::getLocale());
        }
    }

    public function setSlugAttribute($value)
    {
        if (empty($value)) {
            $this->attributes['slug'] = Str::slug($this->attributes['name']);
        } else {
            $this->attributes['slug'] = $value;
        }
    }

    // for seo
    public function mainImage()
    {
        return $this->belongsTo(Files::class, 'files');
    }
}
