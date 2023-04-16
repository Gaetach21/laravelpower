<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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



Route::get('', [PostController::class, 'index'])->name('welcome');
Route::get('/Hébergement web', [PostController::class, 'pageContent1'])->name('hebergement');
Route::get('/Contact', [PostController::class, 'createContact'])->name('contact.create');
Route::post('/Contact', [PostController::class, 'storeContact'])->name('contact.store');
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
