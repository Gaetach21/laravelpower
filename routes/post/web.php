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



Route::group(
['middleware'=>['auth'],
'prefix'=>'gestion',
'namespace'=>'Post',
'as'=>'gestion.'
],
function (){
	Route::resource('articles','\App\Http\Controllers\Post\PostController')->only(['index']);
}
);

Route::group(
['middleware'=>['admin']
],
function (){
	Route::get('gestion/articles/create', '\App\Http\Controllers\Post\PostController@create')->name('gestion.articles.create');
	Route::post('gestion/articles', '\App\Http\Controllers\Post\PostController@store')->name('gestion.articles.store');
	Route::get('gestion/articles/{id}', '\App\Http\Controllers\Post\PostController@show')->name('gestion.articles.show');
	Route::get('gestion/articles/{id}/edit', '\App\Http\Controllers\Post\PostController@edit')->name('gestion.articles.edit');
	Route::post('gestion/articles/{id}', '\App\Http\Controllers\Post\PostController@update')->name('gestion.articles.update');
	Route::delete('gestion/articles/{id}', '\App\Http\Controllers\Post\PostController@destroy')->name('gestion.articles.destroy');
}
);
Route::group(
['middleware'=>['auth']
],
function (){
	Route::get('gestion/articles/{id}', '\App\Http\Controllers\Post\PostController@show')->name('gestion.articles.show');
}
);

Route::post('/comment/store', '\App\Http\Controllers\CommentController@store')->name('comment.add');
Route::post('/reply/store', '\App\Http\Controllers\CommentController@replyStore')->name('reply.add');


