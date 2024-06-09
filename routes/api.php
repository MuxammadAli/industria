<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "Api" middleware group. Enjoy building your Api!
|
*/

Route::get('/', function () {
    return response()->json('You are welcome to api Madaniy meros');
});

Route::prefix('v1')->group(function () {

    Route::get('/', function () {
        return response()->json('You are welcome to api UzbekLife');
    });

    Route::middleware('auth:Api')->group(function () {
        Route::prefix('admin/translations')->group(function () {
            Route::get('/list', '\Modules\Translations\Http\Controllers\TranslationsController@list');
            Route::post('/list', '\Modules\Translations\Http\Controllers\TranslationsController@change');
        });
    });

    Route::prefix('translations')->group(function () {
        Route::get('/translation/{language}', '\Modules\Translations\Http\Controllers\TranslationsController@index');
        Route::post('/translation/{language}', '\Modules\Translations\Http\Controllers\TranslationsController@store');
        Route::delete('/{id:d+}', '\Modules\Translations\Http\Controllers\TranslationsController@destroy');
        Route::post('/translation', '\Modules\Translations\Http\Controllers\TranslationsController@createTranslation');
    });

});

/*--------------------------------------------------------------------------------
            ADMIN ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::prefix('admin/user')->group(function () {
        Route::post('sign-in', 'Api\v1\UserController@signIn');
        Route::middleware('auth:Api')->group(function () {
            Route::get('/', 'Api\v1\UserController@index')->middleware('scope:admin');
            Route::get('get-me', 'Api\v1\UserController@details');
            Route::post('logout', 'Api\v1\UserController@logout');
            Route::post('/', 'Api\v1\UserController@create');
            Route::put('{id}', 'Api\v1\UserController@update')->where('id', '[0-9]+');
            Route::put('update-admin', 'Api\v1\UserController@updateAdmin')->middleware('scope:admin');
        });
    });
});
/*--------------------------------------------------------------------------------
            ADMIN ROUTES  => END
--------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------
            PROFILE ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::prefix('user')->group(function () {
        Route::post('sign', 'Api\v1\frontend\UserController@sign'); // first register
        Route::post('confirm/{phone}', 'Api\v1\frontend\UserController@confirm'); // confirm phone
        Route::post('sign-in', 'Api\v1\frontend\UserController@signIn'); // login
        Route::post('resend', 'Api\v1\frontend\UserController@resend'); // resend sms

        Route::middleware('auth:Api')->group(function () {
            Route::get('get-me', 'Api\v1\frontend\UserController@details');
            Route::put('register', 'Api\v1\frontend\UserController@register');
            Route::put('update', 'Api\v1\frontend\UserController@update');
            Route::post('logout', 'Api\v1\frontend\UserController@logout');
        });
    });
});
/*--------------------------------------------------------------------------------
            PROFILE ROUTES  => END
--------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------
            File manager Controller  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin,moderator,publisher,editor'])->group(function () {
        Route::prefix('admin/filemanager/folder')->group(function () {
            Route::get('/', '\Modules\Filemanager\Http\Controllers\FilemanagerFolderController@index');
            Route::get('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerFolderController@show');
            Route::post('/', '\Modules\Filemanager\Http\Controllers\FilemanagerFolderController@create');
            Route::put('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerFolderController@update');
            Route::delete('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerFolderController@delete');
        });
        Route::prefix('admin/filemanager')->group(function () {
            Route::get('/', '\Modules\Filemanager\Http\Controllers\FilemanagerController@index');
            Route::get('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerController@show');
            Route::put('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerController@update');
            Route::delete('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerController@delete');
            Route::post('/uploads', '\Modules\Filemanager\Http\Controllers\FilemanagerController@uploads');
        });
    });

    Route::prefix('filemanager')->group(function () {
        Route::delete('/{id}', '\Modules\Filemanager\Http\Controllers\FilemanagerController@delete');
        Route::post('/uploads', '\Modules\Filemanager\Http\Controllers\FilemanagerController@uploads');
    });
});
/*--------------------------------------------------------------------------------
            File manager Controller => END
--------------------------------------------------------------------------------*/


Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
        Route::prefix('/admin/menu')->group(function () {
            Route::get('/', 'Api\v1\MenuController@index');
            Route::post('/', 'Api\v1\MenuController@create');
            Route::put('/{id}', 'Api\v1\MenuController@update');
            Route::get('/{id}', 'Api\v1\MenuController@show')->where('id', '[0-9]+');
            Route::get('/{slug}', 'Api\v1\MenuController@slug');
            Route::delete('/{id}', 'Api\v1\MenuController@destroy');
        });
    });
    Route::prefix('/menu')->group(function () {
        Route::get('/', 'Api\v1\MenuController@index');
        Route::get('/{id}', 'Api\v1\MenuController@show')->where('id', '[0-9]+');
        Route::get('/{slug}', 'Api\v1\MenuController@slug');
    });
});
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
        Route::prefix('/admin/menu-items')->group(function () {
            Route::get('/', 'Api\v1\MenuItemsController@index');
            Route::post('/', 'Api\v1\MenuItemsController@create');
            Route::put('/{id}', 'Api\v1\MenuItemsController@update')->where('id', '[0-9]+');
            Route::put('/sort', 'Api\v1\MenuItemsController@sort');
            Route::get('/{id}', 'Api\v1\MenuItemsController@show');
            Route::delete('/{id}', 'Api\v1\MenuItemsController@destroy');
        });
    });
    Route::prefix('/menu-items')->group(function () {
        Route::get('/', 'Api\v1\MenuItemsController@index');
        Route::get('/{id}', 'Api\v1\MenuItemsController@show');
    });
});
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
        Route::prefix('/admin/settings')->group(function () {
            Route::get('/', 'Api\v1\SettingsController@index');
            Route::post('/', 'Api\v1\SettingsController@create');
            Route::put('/{id}', 'Api\v1\SettingsController@update');
            Route::get('/{id}', 'Api\v1\SettingsController@show');
            Route::get('/{slug}', 'Api\v1\SettingsController@slug')->where('slug', '[A-aZ-z0-9]+');
            Route::delete('/{id}', 'Api\v1\SettingsController@destroy');
        });
    });
    Route::prefix('/settings')->group(function () {
        Route::get('/', 'Api\v1\SettingsController@index');
    });
});
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin,journalist'])->group(function () {
        Route::prefix('/admin/pages')->group(function () {
            Route::get('/', 'Api\v1\PageController@index');
            Route::post('/', 'Api\v1\PageController@create');
            Route::put('/{id}', 'Api\v1\PageController@update');
            Route::get('/{id}', 'Api\v1\PageController@show');
            Route::delete('/{id}', 'Api\v1\PageController@destroy');
        });
    });
    Route::prefix('/pages')->group(function () {
        Route::get('/', 'Api\v1\PageController@index');
        Route::get('/{id}', 'Api\v1\PageController@show')->where('id', '[0-9]+');;
        Route::get('/{slug}', 'Api\v1\PageController@slug');
    });
});
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
        Route::prefix('/admin/countries')->group(function () {
            Route::get('/', 'Api\v1\CountryController@index');
            Route::post('/', 'Api\v1\CountryController@create');
            Route::put('/{id}', 'Api\v1\CountryController@update');
            Route::get('/{id}', 'Api\v1\CountryController@show');
            Route::delete('/{id}', 'Api\v1\CountryController@destroy');
        });
    });
    Route::prefix('/countries')->group(function () {
        Route::get('/', 'Api\v1\CountryController@index');
        Route::get('/{id}', 'Api\v1\CountryController@show');
    });
});
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
        Route::prefix('/admin/regions')->group(function () {
            Route::get('/', 'Api\v1\RegionController@index');
            Route::post('/', 'Api\v1\RegionController@create');
            Route::put('/{id}', 'Api\v1\RegionController@update');
            Route::get('/{id}', 'Api\v1\RegionController@show');
            Route::delete('/{id}', 'Api\v1\RegionController@destroy');
        });
    });
    Route::prefix('/regions')->group(function () {
        Route::get('/', 'Api\v1\RegionController@index');
        Route::get('/{id}', 'Api\v1\RegionController@show');
    });
});
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin,operator'])->group(function () {
        Route::prefix('/admin/district')->group(function () {
            Route::get('/', 'Api\v1\DistrictController@index');
            Route::post('/', 'Api\v1\DistrictController@create');
            Route::put('/{id}', 'Api\v1\DistrictController@update');
            Route::get('/{id}', 'Api\v1\DistrictController@show');
            Route::delete('/{id}', 'Api\v1\DistrictController@destroy');
        });
    });
    Route::prefix('/district')->group(function () {
        Route::get('/', 'Api\v1\DistrictController@index');
        Route::get('/{id}', 'Api\v1\DistrictController@show');
    });
});
Route::prefix('v1')->group(function () {
    Route::middleware('auth:Api')->group(function () {
        Route::prefix('/admin/langs')->group(function () {
            Route::get('/', 'Api\v1\LangsController@index');
            Route::post('/', 'Api\v1\LangsController@create');
            Route::put('/{id}', 'Api\v1\LangsController@update');
            Route::get('/{id}', 'Api\v1\LangsController@show');
        });
    });
});
Route::prefix('v1')->group(function () {
    Route::middleware(['auth:Api', 'scope:admin'])->group(function () {
        Route::prefix('/admin/feedback')->group(function () {
            Route::get('/', 'Api\v1\FeedbackController@index');
            Route::post('/', 'Api\v1\FeedbackController@create');
            Route::get('/get', 'Api\v1\FeedbackController@get');
            Route::put('/{id}', 'Api\v1\FeedbackController@update');
            Route::get('/{id}', 'Api\v1\FeedbackController@show');
            Route::delete('/{id}', 'Api\v1\FeedbackController@destroy');
        });
    });
    Route::prefix('/feedback')->group(function () {
        Route::get('/', 'Api\v1\FeedbackController@index');
        Route::post('/', 'Api\v1\FeedbackController@create');
    });
});

/*--------------------------------------------------------------------------------
            CATEGORIES ROUTES  => START
        --------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware('auth:Api')->group(function () {
        Route::prefix('/admin/categories')->group(function () {
            Route::get('/', 'Api\v1\CategoryController@index');
            Route::post('/', 'Api\v1\CategoryController@create');
            Route::put('/{id}', 'Api\v1\CategoryController@update');
            Route::get('/{id}', 'Api\v1\CategoryController@show');
            Route::delete('/{id}', 'Api\v1\CategoryController@destroy');
        });
    });
    Route::prefix('/categories')->group(function () {
        Route::get('/', 'Api\v1\CategoryController@index');
        Route::get('/{id}', 'Api\v1\CategoryController@show');
    });
});
/*--------------------------------------------------------------------------------
    CATEGORIES ROUTES  => END
--------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------
            POSTS ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware('auth:Api')->group(function () {
        Route::prefix('/admin/posts')->group(function () {
            Route::get('/', 'Api\v1\PostController@index');
            Route::post('/', 'Api\v1\PostController@create');
            Route::put('/{id}', 'Api\v1\PostController@update');
            Route::get('/{id}', 'Api\v1\PostController@show')->where('id', '[0-9]+');
            Route::delete('/{id}', 'Api\v1\PostController@destroy');
        });
    });
    Route::prefix('/posts')->group(function () {
        Route::get('/', 'Api\v1\PostController@index');
        Route::get('/{slug}', 'Api\v1\PostController@slug');
        Route::get('/similar/{id}', 'Api\v1\PostController@similarNews')->where('id', '[0-9]+');
        Route::get('/by_tag/{tag_id}', 'Api\v1\PostController@byTag')->where('tag_id', '[0-9]+');

        Route::post('/subscribe', 'Api\v1\PostController@subscribe');
    });
});
/*--------------------------------------------------------------------------------
    POSTS ROUTES  => END
--------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------
    TAGS ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware('auth:Api')->group(function () {
        Route::prefix('/admin/tags')->group(function () {
            Route::get('/', 'Api\v1\TagsController@index');
            Route::post('/', 'Api\v1\TagsController@create');
            Route::put('/{id}', 'Api\v1\TagsController@update');
            Route::get('/{id}', 'Api\v1\TagsController@show');
            Route::delete('/{id}', 'Api\v1\TagsController@destroy');
        });
    });
    Route::prefix('/tags')->group(function () {
        Route::get('/', 'Api\v1\TagsController@index');
        Route::get('/{id}', 'Api\v1\TagsController@show');
    });
});
/*--------------------------------------------------------------------------------
    TAGS ROUTES  => END
--------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------
    BANNERS ROUTES  => START
--------------------------------------------------------------------------------*/
Route::prefix('v1')->group(function () {
    Route::middleware('auth:Api')->group(function () {
        Route::prefix('/admin/banners')->group(function () {
            Route::get('/', 'Api\v1\BannersController@index');
            Route::post('/', 'Api\v1\BannersController@create');
            Route::put('/{id}', 'Api\v1\BannersController@update');
            Route::get('/{id}', 'Api\v1\BannersController@show');
            Route::delete('/{id}', 'Api\v1\BannersController@destroy');
        });
    });
    Route::prefix('/banners')->group(function () {
        Route::get('/', 'Api\v1\BannersController@index');
        Route::get('/{id}', 'Api\v1\BannersController@show');
    });
});
/*--------------------------------------------------------------------------------
    BANNERS ROUTES  => END
--------------------------------------------------------------------------------*/