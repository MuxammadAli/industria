<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Modules\Filemanager\Entities\Files;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = ['id', 'name', 'user_id', 'email', 'lat', 'long', 'phone', 'files', 'type', 'object_id', 'region_id', 'district_id', 'address', 'text', 'status', 'is_deleted', 'deleted_at', 'created_at', 'updated_at'];

    public static function rules()
    {
        return [
            'id' => 'bigint',
            'name' => 'string|required',
            'email' => 'string|nullable',
            'phone' => 'required',
            'files' => 'string|nullable',
            'type' => 'integer|nullable',
            'object_id' => 'integer|nullable',
            'region_id' => 'integer|nullable',
            'district_id' => 'integer|nullable',
            'user_id' => 'integer|nullable',
            'address' => 'string|nullable',
            'text' => 'string|nullable',
            'lat' => 'string|nullable',
            'long' => 'string|nullable',
            'status' => 'integer|nullable',
            'is_deleted' => 'integer',
            'deleted_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',

        ];
    }

     protected static function boot()
     {
         parent::boot();

         static::created(function ($model) {
             $template = "Industria.uz: Contact us\nName: {$model->name}\nPhone: {$model->phone}\nEmail: {$model->email}\nMessage: {$model->text}\n\n➡️ http://oks.industria.uz/feedback";

             $params = [
                 'chat_id' => -500556854,
                 'text' => $template,
                 "parse_mode" => "HTML",
             ];
             $response = Http::get("https://api.telegram.org/bot1879404868:AAFSPCiyCUOcO2k3ErKJ9b3DYq2lDAbCqV0/sendMessage", $params);
         });
     }
}
