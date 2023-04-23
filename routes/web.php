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
Route::get('/Nom de domaine', [PostController::class, 'pageContent2'])->name('domain');
Route::get('/Liste de cours', [PostController::class, 'pageContent3'])->name('courses');
Route::get('/Contact', [PostController::class, 'createContact'])->name('contact.create');
Route::post('/Contact', [PostController::class, 'storeContact'])->name('contact.store');
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/chapitre 1', [PostController::class, 'chap1'])->name('chap1');
Route::get('/chapitre 2', [PostController::class, 'chap2'])->name('chap2');
Route::get('/chapitre 3', [PostController::class, 'chap3'])->name('chap3');
Route::get('/chapitre 4', [PostController::class, 'chap4'])->name('chap4');
Route::get('/chapitre 5', [PostController::class, 'chap5'])->name('chap5');


Route::get('angularTables', function () {
    return view('angularTables');
});
Route::get('customers', function () {
    return view('customers');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
