<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $name = config('system.ADMIN_NAME');
        $password = bcrypt(config('system.ADMIN_PASSWORD'));
        if (empty($name) || empty($password)) {
            dd('Name or password is empty in .env');
        }
        $user = \App\User::create([
            'name' => $name,
            'password' => $password,
        ]);

        $user->role()->create([
            'user_id' => $user->id,
            'role' => 'admin'
        ]);

        $langs = [
            ['name' => 'Uzbek', 'code' => 'oz'],
            ['name' => 'Узбек', 'code' => 'uz'],
            ['name' => 'Русский', 'code' => 'ru'],
            ['name' => 'English', 'code' => 'en'],
//            ['name' => 'Arabic', 'code' => 'ar'],
//            ['name' => 'French', 'code' => 'fr'],
//            ['name' => 'Spanish', 'code' => 'es'],
//            ['name' => 'Chinese', 'code' => 'zh'],
//            ['name' => 'Japanese', 'code' => 'ja'],
//            ['name' => 'German', 'code' => 'de'],
//            ['name' => 'Kazakh', 'code' => 'kz'],
//            ['name' => 'Kazakh', 'code' => 'kz'],
//            ['name' => 'Kyrgyz', 'code' => 'ky'],
//            ['name' => 'Turkmen', 'code' => 'tk'],
//            ['name' => 'Turkish', 'code' => 'tr'],
//            ['name' => 'Tajik', 'code' => 'tg'],
        ];
        foreach ($langs as $lang) {
            \Modules\Translations\Entities\Langs::create([
                'name' => $lang['name'],
                'code' => $lang['code'],
                'status' => 1
            ]);
        }

    }
}
