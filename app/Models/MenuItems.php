<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Modules\Filemanager\Entities\Files;

class MenuItems extends Model
{
    protected $table = 'menu_items';

    protected $fillable = ['id', 'menu_id', 'title', 'url', 'menu_item_parent_id', 'icon', 'sort', 'status', 'is_deleted', 'created_at', 'updated_at'];

    public static function rules()
    {
        return [
            'id' => 'bigint',
            'title' => 'string|required',
            'icon' => 'integer|nullable',
            'url' => 'string|required',
            'menu_id' => 'integer|nullable',
            'menu_item_parent_id' => 'integer|nullable',
            'sort' => 'integer|nullable',
            'status' => 'integer',
            'is_deleted' => 'datetime',
            'deleted_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    protected $appends = [
        'menuItems',
        'files'
    ];

    public function getFilesAttribute()
    {
        if ($this->icon == null) {
            return null;
        }
        
        $data = Files::findOrFail($this->icon);
        return $data;
    }

    public function getMenuItemsAttribute()
    {
        $data = MenuItems::where(['menu_item_parent_id' => $this->id])->orderBy('sort', 'ASC')->get();
        return $data;
    }

}
