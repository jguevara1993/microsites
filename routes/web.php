<?php

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


Route::group(['middleware' => 'auth'], function(){

  //Dashboard Route
  Route::get('/dashboard', 'HomeController@index');

  //Blog Engine Routes
  Route::get('posts', ['as' => 'blog.index', 'uses' => 'PostController@index']);
  Route::get('dashboard/blog/create', ['as' => 'blog.create', 'uses' =>  'PostController@create']);
  Route::post('dashboard/blog/create', ['as' => 'blog.store', 'uses' =>  'PostController@store']);
  Route::get('dashboard/blog/{id}/edit', ['as' => 'blog.edit', 'uses' =>  'PostController@edit']);
  Route::resource('dashboard/blog','PostController', ['only' => 'update']);
  Route::get('dashboard/blog/destroy/{id}', ['as' => 'blog.destroy', 'uses' =>  'PostController@destroy']);

  //Blog Category Routes
  Route::get('category', ['as' => 'category.index', 'uses' => 'CategoriesController@index']);
  Route::post('category', ['as' => 'category.store', 'uses' => 'CategoriesController@store']);
  Route::get('category/{id}/edit', ['as' => 'category.edit', 'uses' => 'CategoriesController@index']);
  Route::resource('category','CategoriesController', ['only' => 'update']);
  Route::get('category/destroy/{id}', ['as' => 'category.destroy', 'uses' => 'CategoriesController@destroy']);

  //Template Engine Routes
  Route::get('theme', ['as' => 'themes.index', 'uses' => 'ThemeController@index']);
  Route::get('theme/blocks', ['as' => 'themes.blocks', 'uses' => 'ThemeController@showBlocks']);
  Route::get('theme/blocks/create', ['as' => 'themes.create', 'uses' => 'ThemeController@createBlock']);
  Route::post('theme/set', ['as' => 'themes.set', 'uses' => 'ThemeController@setTheme']);
  Route::post('theme/blocks/create', ['as' => 'themes.store', 'uses' => 'ThemeController@storeBlock']);
  Route::get('theme/blocks/{id}/edit', ['as' => 'themes.edit', 'uses' => 'ThemeController@editBlock']);
  Route::post('theme/blocks/{blocks}', ['as' => 'themes.update', 'uses' => 'ThemeController@updateBlock']);
  Route::get('themes/blocks/destroy/{id}', ['as' => 'themes.destroy', 'uses' => 'ThemeController@destroyBlock']);

  //Users Engine Routes
  Route::get('profile/{id}/edit', ['as' => 'profile.edit', 'uses' => 'UserController@edit']);
  Route::resource('profile', 'UserController', ['only' => 'update']);

  Route::group(['middleware' => 'admin'], function(){
    //Configuration Routes
    Route::get('config', ['as' => 'config.index', 'uses' => 'ConfigController@index']);
    Route::post('config', ['as' => 'config.update', 'uses' => 'ConfigController@setConfig']);
  });
  //Logout Route
  Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login');
  });
});
//Auth Routes
Auth::routes();

//Frontpage Routes
Route::get('/', 'PageController@showIndexTemplate');
Route::get('/about', 'PageController@showAboutTemplate');
Route::get('/promo', 'PageController@showPromoTemplate');
Route::get('/blog', 'PageController@showBlogTemplate');
Route::get('blog/{id}', ['as' => 'blog.show', 'uses' => 'PostController@show']);
Route::get('/contact', 'PageController@showContactTemplate');
