<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Seo')->group(function () {
    Route::group([
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
        Route::get('/', 'IndexController@defaultPage');
        Route::get('/category/{category_id}', 'IndexController@defaultPage')->where('category_id', '[0-9]+');
        Route::get('/tags/{tag_id}', 'IndexController@defaultPage')->where('tag_id', '[0-9]+');
        Route::get('/posts/{slug}', 'IndexController@post')->name('post');
        Route::get('/pages/{slug}', 'IndexController@page')->where('slug', '[A-aZ-z0-9]+')->name('page');
    });

    Route::any('{catchall}', 'IndexController@defaultPage')->where('catchall', '.*');
});
