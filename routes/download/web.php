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
'namespace'=>'Download',
'as'=>'gestion.'
],
function (){
	Route::resource('logiciels','\App\Http\Controllers\Download\DownloadController')->only(['index']);
}
);

Route::group(
['middleware'=>['admin']
],
function (){
	Route::get('gestion/logiciels/create', '\App\Http\Controllers\Download\DownloadController@create')->name('gestion.logiciels.create');
	Route::post('gestion/logiciels', '\App\Http\Controllers\Download\DownloadController@store')->name('gestion.logiciels.store');
	Route::get('gestion/logiciels/{id}', '\App\Http\Controllers\Download\DownloadController@show')->name('gestion.logiciels.show');
	Route::get('gestion/logiciels/{id}/edit', '\App\Http\Controllers\Download\DownloadController@edit')->name('gestion.logiciels.edit');
	Route::post('gestion/logiciels/{id}', '\App\Http\Controllers\Download\DownloadController@update')->name('gestion.logiciels.update');
	Route::delete('gestion/logiciels/{id}', '\App\Http\Controllers\Download\DownloadController@destroy')->name('gestion.logiciels.destroy');
}
);
Route::group(
['middleware'=>['auth']
],
function (){
	Route::get('gestion/logiciels/{id}', '\App\Http\Controllers\Download\DownloadController@show')->name('gestion.logiciels.show');
}
);




