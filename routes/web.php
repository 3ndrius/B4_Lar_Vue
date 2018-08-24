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
//comments
Route::get('comment', ['uses' => 'CommentController@index', 'as' => 'comments.index']);
Route::post('comments/{post_id}', ['uses' => 'CommentController@store', 'as' => 'comments.store']);
Route::get('comments/{id}/edit', ['uses' => 'CommentController@edit', 'as' => 'comments.edit']);
Route::put('comments/{id}', ['uses' => 'CommentController@update', 'as' => 'comments.update']);
Route::delete('comments/{id}', ['uses' => 'CommentController@destroy', 'as' => 'comments.destroy']);
Route::get('comments/{id}/delete', ['uses' => 'CommentController@delete', 'as' => 'comments.delete']); //confirm helper


//slug
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@show'])->where('slug', '[\w\d\-\_]+');
//blog
Route::get('blog', ['uses' => 'BlogController@index', 'as' => 'blog.index']);

//pages
Route::get('/', 'PagesController@getIndex');
Route::get('/it', 'PagesController@getIT');
Route::get('/news', 'PagesController@getNews');
// Route::get('pages/{id}','PagesController@getshowTag');
// Route::get('pages/{id}', 'PagesController@getshowPost');
Route::get('pages/{id}',['uses' => 'PagesController@getshowTag', 'as' => 'pages.showtag']);
//post crud
Route::resource('/posts', 'PostController');
//category crud
Route::resource('categories', 'CategoryController', ['except' =>['create']]);
// Route::get('categories/{id}/delete', ['uses' => 'CategoryController@delete', 'as' => 'categories.delete']);
//tag crud
Route::resource('tags', 'TagController', ['except' => ['create']]);
