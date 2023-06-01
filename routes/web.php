<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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




Route::get('', [MainController::class, 'index'])->name('welcome');
Route::get('/Hébergement web', [MainController::class, 'pageContent1'])->name('hebergement');
Route::get('/Nom de domaine', [MainController::class, 'pageContent2'])->name('domain');
Route::get('/Liste de cours', [MainController::class, 'pageContent3'])->name('courses');
Route::get('/Contact', [MainController::class, 'createContact'])->name('contact.create');
Route::post('/Contact', [MainController::class, 'storeContact'])->name('contact.store');
Route::get('/Histoire du web', [MainController::class, 'getHistory'])->name('historique');


/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/chapitre 1', [MainController::class, 'chap1'])->name('chap1');
Route::get('/chapitre 2', [MainController::class, 'chap2'])->name('chap2');
Route::get('/chapitre 3', [MainController::class, 'chap3'])->name('chap3');
Route::get('/chapitre 4', [MainController::class, 'chap4'])->name('chap4');
Route::get('/chapitre 5', [MainController::class, 'chap5'])->name('chap5');
Route::get('/chapitre 6', [MainController::class, 'chap6'])->name('chap6');
Route::get('/chapitre 7', [MainController::class, 'chap7'])->name('chap7');
Route::get('/chapitre 8', [MainController::class, 'chap8'])->name('chap8');
Route::get('/chapitre 9', [MainController::class, 'chap9'])->name('chap9');
Route::get('/chapitre 10', [MainController::class, 'chap10'])->name('chap10');
Route::get('/chapitre 11', [MainController::class, 'chap11'])->name('chap11');
Route::get('/chapitre 12', [MainController::class, 'chap12'])->name('chap12');
Route::get('/chapitre 13', [MainController::class, 'chap13'])->name('chap13');
Route::get('/chapitre 14', [MainController::class, 'chap14'])->name('chap14');
Route::get('/chapitre 15', [MainController::class, 'chap15'])->name('chap15');
Route::get('/chapitre 16', [MainController::class, 'chap16'])->name('chap16');
Route::get('/chapitre 17', [MainController::class, 'chap17'])->name('chap17');
Route::get('/chapitre 18', [MainController::class, 'chap18'])->name('chap18');
Route::get('/chapitre 19', [MainController::class, 'chap19'])->name('chap19');
Route::get('/chapitre 20', [MainController::class, 'chap20'])->name('chap20');
Route::get('/chapitre 21', [MainController::class, 'chap21'])->name('chap21');
Route::get('/chapitre 22', [MainController::class, 'chap22'])->name('chap22');
Route::get('/chapitre 23', [MainController::class, 'chap23'])->name('chap23');
Route::get('/chapitre 24', [MainController::class, 'chap24'])->name('chap24');
Route::get('/chapitre 25', [MainController::class, 'chap25'])->name('chap25');
Route::get('/chapitre 26', [MainController::class, 'chap26'])->name('chap26');

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
