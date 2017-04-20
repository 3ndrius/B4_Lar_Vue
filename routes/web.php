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

Route::resource('categories', 'CategoryController', ['except' =>['create']]);
Route::resource('tags', 'TagController', ['except' => ['create']]);

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@show'])->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['uses' => 'BlogController@index', 'as' => 'blog.index']);

Route::get('/', 'PagesController@getIndex');
Route::get('/it', 'PagesController@getIT');


//post crud

Route::resource('/posts', 'PostController');