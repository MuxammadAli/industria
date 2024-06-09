<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Modules\Filemanager\Entities\Files;
use Modules\Translations\Entities\Langs;

class Post extends Model
{
    const TYPE_POST = 1;
    const TYPE_INTERVIEW = 2;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    protected $table = 'post';

    protected $fillable = ['id', 'title', 'content', 'slug', 'top', 'popular', 'lang', 'lang_hash', 'description', 'type', 'image', 'video', 'category_id', 'status', 'photo_author', 'published_at', 'created_at', 'updated_at'];

    protected $dates = ['published_at'];

    public static function rules()
    {
        return [
            'id' => 'bigint',
            'title' => 'string',
            'content' => 'string',
            'slug' => 'string|nullable',
            'top' => 'integer|nullable',
            'popular' => 'integer|nullable',
            'lang' => 'integer|nullable',
            'lang_hash' => 'string|nullable',
            'viewed' => 'integer|nullable',
            'description' => 'string|nullable',
            'type' => 'integer|nullable',
            'image' => 'string|nullable',
            'video' => 'string|nullable',
            'category_id' => 'integer|nullable',
            'status' => 'integer|nullable',
            'photo_author' => 'string|nullable',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',

        ];
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function image()
    {
        return $this->belongsTo(Files::class, 'image');
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function viewed()
    {
        return $this->hasOne(Views::class);
    }


    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = \Illuminate\Support\Str::slug($value);
        if (!array_key_exists('id', $this->attributes)) {
            $this->attributes['lang_hash'] = \Illuminate\Support\Str::random(32);
            $this->attributes['lang'] = Langs::getLangId(Lang::getLocale());
        }
    }

    protected $appends = [
        'translations',
    ];

    protected $with = [
        'image'
    ];

    public function getTranslationsAttribute()
    {
        $data = [];
        $models = DB::table('post')->where('id', '<>', $this->id)
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

    // for seo
    public function mainImage()
    {
        return $this->belongsTo(Files::class, 'image');
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($model) {
            PostTags::where(['post_id' => $model->id])->delete();
        });
    }
}
