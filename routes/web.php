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

Route::get('/Mes articles', [PostController::class, 'articles'])->name('posts');
Route::get('/Mes articles/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/Créér un article', [PostController::class, 'createpost'])->name('posts.create');
Route::post('/Créér un article', [PostController::class, 'storepost'])->name('posts.store');
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/chapitre 1', [PostController::class, 'chap1'])->name('chap1');
Route::get('/chapitre 2', [PostController::class, 'chap2'])->name('chap2');
Route::get('/chapitre 3', [PostController::class, 'chap3'])->name('chap3');
Route::get('/chapitre 4', [PostController::class, 'chap4'])->name('chap4');
Route::get('/chapitre 5', [PostController::class, 'chap5'])->name('chap5');
Route::get('/chapitre 6', [PostController::class, 'chap6'])->name('chap6');
Route::get('/chapitre 7', [PostController::class, 'chap7'])->name('chap7');
Route::get('/chapitre 8', [PostController::class, 'chap8'])->name('chap8');
Route::get('/chapitre 9', [PostController::class, 'chap9'])->name('chap9');


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
