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
Route::get('/Histoire du web', [PostController::class, 'getHistory'])->name('historique');

Route::get('/Mes articles', [PostController::class, 'articles'])->name('posts');
Route::get('/Mes articles/{id}', [PostController::class, 'show'])->name('posts.show');

Route::middleware(['admin'])->group(function(){
Route::get('/Créér un article', [PostController::class, 'createpost'])->name('posts.create');
Route::get('/Supprimer un article', [PostController::class, 'deletepost'])->name('posts.delete');
});

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
Route::get('/chapitre 10', [PostController::class, 'chap10'])->name('chap10');
Route::get('/chapitre 11', [PostController::class, 'chap11'])->name('chap11');
Route::get('/chapitre 12', [PostController::class, 'chap12'])->name('chap12');
Route::get('/chapitre 13', [PostController::class, 'chap13'])->name('chap13');
Route::get('/chapitre 14', [PostController::class, 'chap14'])->name('chap14');
Route::get('/chapitre 15', [PostController::class, 'chap15'])->name('chap15');
Route::get('/chapitre 16', [PostController::class, 'chap16'])->name('chap16');
Route::get('/chapitre 17', [PostController::class, 'chap17'])->name('chap17');
Route::get('/chapitre 18', [PostController::class, 'chap18'])->name('chap18');
Route::get('/chapitre 19', [PostController::class, 'chap19'])->name('chap19');
Route::get('/chapitre 20', [PostController::class, 'chap20'])->name('chap20');
Route::get('/chapitre 21', [PostController::class, 'chap21'])->name('chap21');
Route::get('/chapitre 22', [PostController::class, 'chap22'])->name('chap22');
Route::get('/chapitre 23', [PostController::class, 'chap23'])->name('chap23');
Route::get('/chapitre 24', [PostController::class, 'chap24'])->name('chap24');
Route::get('/chapitre 25', [PostController::class, 'chap25'])->name('chap25');
Route::get('/chapitre 26', [PostController::class, 'chap26'])->name('chap26');

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
