<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Modules\Translations\Entities\Langs;
use PharIo\Manifest\RequiresElementTest;

class Menu extends Model
{
    protected $table = 'menu';

    protected $fillable = ['id', 'title', 'alias', 'type', 'lang', 'lang_hash', 'status', 'is_deleted', 'deleted_at', 'created_at', 'updated_at'];

    public static function rules()
    {
        return [
            'id' => 'bigint',
            'title' => 'string|required',
            'alias' => 'string|required',
            'type' => 'integer',
            'lang' => 'integer',
            'lang_hash' => 'string',
            'status' => 'integer',
            'is_deleted' => 'integer',
            'deleted_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        if (!array_key_exists('id', $this->attributes)) {
            $this->attributes['lang_hash'] = \Illuminate\Support\Str::random(32);
            $this->attributes['lang'] = Langs::getLangId(Lang::getLocale());
            $this->attributes['status'] = 1;
        }
    }

    protected $appends = [
        'translations',
        'menuItems'
    ];

    public function getMenuItemsAttribute()
    {
        return MenuItems::where(['menu_id' => $this->id, 'menu_item_parent_id' => null])->orderBy('sort', 'ASC')->get();
    }

    public function getTranslationsAttribute()
    {
        $data = [];
        $models = DB::table('menu')->where('id','<>', $this->id)
            ->where('lang_hash', $this->lang_hash)->get();
        if (count($models) > 0) {
            foreach ($models as $model) {
                $lang = Langs::getLangCode($model->lang);
                $data[] = [
                    'id' => $model->id,
                    'lang' => $lang
                ];
            }
        }
        return $data;
    }
}
