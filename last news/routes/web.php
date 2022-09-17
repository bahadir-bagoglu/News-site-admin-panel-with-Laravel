<?php

use Illuminate\Support\Facades\Route;
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

    Route::get('/', function () {
    return view('welcome');
    });

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
    });



    //ANASAYFA ROUTE
    Route::get('/anasayfa', 'App\Http\Controllers\HomeGetController@index')->name("index");
    Route::get('/files', 'App\Http\Controllers\Files\FileManagementController@getFiles')->name("files");
    Route::get('/logout', 'App\Http\Controllers\HomeGetController@getLogout')->name("backend-logout");

   //BLOG GET ROUTE
   
    Route::get('/blogs', 'App\Http\Controllers\Blogs\BlogController@getBlogs')->name("blogs");
    Route::get('/blog-add', 'App\Http\Controllers\Blogs\BlogController@getBlogsAdd')->name("blog-add");
    Route::get('/blog-edit/{blogId}', 'App\Http\Controllers\Blogs\BlogController@getBlogsEdit')->name("blog-edit");
    Route::get('/blog-category', 'App\Http\Controllers\Blogs\BlogController@getBlogsCategory')->name("blog-category");
    Route::get('/blog-category-edit/{categoryId}', 'App\Http\Controllers\Blogs\BlogController@getBlogsCategoryEdit')->name("blog-category-edit");
    Route::get('/blog-category-add', 'App\Http\Controllers\Blogs\BlogController@getBlogsCategoryAdd')->name("blog-category-add");

  //BLOG POST ROUTE
    Route::post('/blogs', 'App\Http\Controllers\Blogs\BlogController@postBlogs')->name("blogs");
    Route::post('/blog-add', 'App\Http\Controllers\Blogs\BlogController@postBlogsAdd')->name("blog-add");
    Route::post('/blog-edit/{blogId}', 'App\Http\Controllers\Blogs\BlogController@postBlogsEdit')->name("blog-edit");
    Route::post('/blog-category', 'App\Http\Controllers\Blogs\BlogController@postBlogsCategory')->name("blog-category");
    Route::post('/blog-category-edit/{categoryId}', 'App\Http\Controllers\Blogs\BlogController@postBlogsCategoryEdit')->name("blog-category-edit");
    Route::post('/blog-category-add', 'App\Http\Controllers\Blogs\BlogController@postBlogsCategoryAdd')->name("blog-category-add");

  //MENU GET ROUTE
    Route::get('/menus', 'App\Http\Controllers\Menus\MenusController@getMenus')->name("menus");
    Route::get('/menu-add', 'App\Http\Controllers\Menus\MenusController@getMenusAdd')->name("menu-add");
    Route::get('/menu-edit/{menuId}', 'App\Http\Controllers\Menus\MenusController@getMenusEdit')->name("menu-edit");

  //MENU POST ROUTE   
    Route::post('/menuss', 'App\Http\Controllers\Menus\MenusController@postMenus')->name("menuss");
    Route::post('/menu-add', 'App\Http\Controllers\Menus\MenusController@postMenusAdd')->name("menu-add");
    Route::post('/menu-edit/{menuId}', 'App\Http\Controllers\Menus\MenusController@postMenusEdit')->name("menu-edit");

  //PAGES GET ROUTE
    Route::get('/pages', 'App\Http\Controllers\Pages\PagesController@getPages')->name("pages");
    Route::get('/page-add', 'App\Http\Controllers\Pages\PagesController@getPageAdd')->name("page-add");
    Route::get('/page-edit/{pageId}', 'App\Http\Controllers\Pages\PagesController@getPageedit')->name("page-edit");

 //PAGES POST ROUTE    
    Route::post('/pages', 'App\Http\Controllers\Pages\PagesController@postPages')->name("pages");
    Route::post('/page-add', 'App\Http\Controllers\Pages\PagesController@postPagesAdd')->name("page-add");
    Route::post('/page-edit/{pageId}', 'App\Http\Controllers\Pages\PagesController@postPagesedit')->name("page-edit");

  //SLİDERS GET ROUTE
    Route::get('/sliders', 'App\Http\Controllers\Sliders\SlidersController@getSliders')->name("sliders");
    Route::get('slider-add', 'App\Http\Controllers\Sliders\SlidersController@getSlidersAdd')->name("slider-add");
    Route::get('slider-edit/{sliderId}', 'App\Http\Controllers\Sliders\SlidersController@getSlidersEdit')->name("slider-edit");

  //SLİDERS POST ROUTE
    Route::post('/sliders', 'App\Http\Controllers\Sliders\SlidersController@postSliders')->name("sliders");
    Route::post('slider-add', 'App\Http\Controllers\Sliders\SlidersController@postSlidersAdd')->name("slider-add");
    Route::post('slider-edit/{sliderId}', 'App\Http\Controllers\Sliders\SlidersController@postSlidersEdit')->name("slider-edit");

  //USERS GET ROUTE  
    Route::get('/users', 'App\Http\Controllers\Users\UsersController@getUsers')->name("users");
    Route::get('user-add', 'App\Http\Controllers\Users\UsersController@getUsersAdd')->name("user-add");
    Route::get('user-edit/{userId}', 'App\Http\Controllers\Users\UsersController@getUsersEdit')->name("user-edit");

  //USERS Post ROUTE  
  Route::post('/users', 'App\Http\Controllers\Users\UsersController@postUsers')->name("users");
  Route::post('user-add', 'App\Http\Controllers\Users\UsersController@postUsersAdd')->name("user-add");
  Route::post('user-edit/{userId}', 'App\Http\Controllers\Users\UsersController@postUsersEdit')->name("user-edit");

  //SETTİNGS GET ROUTE
    Route::get('/setting', 'App\Http\Controllers\Settings\SettingsController@getSettings')->name("settings");
    Route::get('/setting-edit/{settingId}', 'App\Http\Controllers\Settings\SettingsController@getSettingsEdit')->name("setting-edit");

  //SETTİNGS Post ROUTE
    Route::post('/setting', 'App\Http\Controllers\Settings\SettingsController@postSettings')->name("settings");
    Route::post('/setting-edit/{settingId}', 'App\Http\Controllers\Settings\SettingsController@postSettingsEdit')->name("setting-edit");

    
  //Commend GET ROUTE
    Route::post('/commend','App\Http\Controllers\HomeGetController@create_commend')->name("create_commend");
    Route::post('/delete-commend','App\Http\Controllers\HomeGetController@delete_commend')->name("delete_commend");


    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


