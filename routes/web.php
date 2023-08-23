<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\NewsletterController;

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

Route::post('/Newsletter/store', [NewsletterController::class, 'store'])->name('newsletter.store');

Route::get('', [MainController::class, 'index'])->name('welcome');
Route::get('/A propos de Laravelpower', [MainController::class, 'about'])->name('about_us');
Route::get('/Hébergement web', [MainController::class, 'pageContent1'])->name('hebergement');
Route::get('/Nom de domaine', [MainController::class, 'pageContent2'])->name('domain');
Route::get('/Liste de cours', [MainController::class, 'pageContent3'])->name('courses');
Route::get('/Politique de confidentialité', [MainController::class, 'pageContent4'])->name('privacy');
Route::get('/Conditions d\'utilisation', [MainController::class, 'pageContent5'])->name('terms');
Route::get('/Contact', [MainController::class, 'createContact'])->name('contact.create');
Route::post('/Contact', [MainController::class, 'storeContact'])->name('contact.store');
Route::get('/Histoire du web', [MainController::class, 'getHistory'])->name('historique');

Route::get('/Uploader_plusieurs_images', [ProductController::class, 'index'])->name('upload.index');
Route::post('/Uploader_plusieurs_images', [ProductController::class, 'store'])->name('upload.store');
Route::get('/Uploader_plusieurs_images/{id}', [ProductController::class, 'images'])->name('upload.images');


Route::get("sitemap/posts",  [SitemapController::class, 'posts'])->name("sitemap.posts");
Route::get("sitemap/pages",  [SitemapController::class, 'pages'])->name("sitemap.pages");
Route::get("sitemap/index",  [SitemapController::class, 'index'])->name("sitemap.index");

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/Tutoriel 1', [MainController::class, 'chap1'])->name('chap1');
Route::get('/Tutoriel 2', [MainController::class, 'chap2'])->name('chap2');
Route::get('/Tutoriel 3', [MainController::class, 'chap3'])->name('chap3');
Route::get('/Tutoriel 4', [MainController::class, 'chap4'])->name('chap4');
Route::get('/Tutoriel 5', [MainController::class, 'chap5'])->name('chap5');
Route::get('/Tutoriel 6', [MainController::class, 'chap6'])->name('chap6');
Route::get('/Tutoriel 7', [MainController::class, 'chap7'])->name('chap7');
Route::get('/Tutoriel 8', [MainController::class, 'chap8'])->name('chap8');
Route::get('/Tutoriel 9', [MainController::class, 'chap9'])->name('chap9');
Route::get('/Tutoriel 10', [MainController::class, 'chap10'])->name('chap10');
Route::get('/Tutoriel 11', [MainController::class, 'chap11'])->name('chap11');
Route::get('/Tutoriel 12', [MainController::class, 'chap12'])->name('chap12');
Route::get('/Tutoriel 13', [MainController::class, 'chap13'])->name('chap13');
Route::get('/Tutoriel 14', [MainController::class, 'chap14'])->name('chap14');
Route::get('/Tutoriel 15', [MainController::class, 'chap15'])->name('chap15');
Route::get('/Tutoriel 16', [MainController::class, 'chap16'])->name('chap16');
Route::get('/Tutoriel 17', [MainController::class, 'chap17'])->name('chap17');
Route::get('/Tutoriel 18', [MainController::class, 'chap18'])->name('chap18');
Route::get('/Tutoriel 19', [MainController::class, 'chap19'])->name('chap19');
Route::get('/Tutoriel 20', [MainController::class, 'chap20'])->name('chap20');
Route::get('/Tutoriel 21', [MainController::class, 'chap21'])->name('chap21');
Route::get('/Tutoriel 22', [MainController::class, 'chap22'])->name('chap22');
Route::get('/Tutoriel 23', [MainController::class, 'chap23'])->name('chap23');
Route::get('/Tutoriel 24', [MainController::class, 'chap24'])->name('chap24');
Route::get('/Tutoriel 25', [MainController::class, 'chap25'])->name('chap25');
Route::get('/Tutoriel 26', [MainController::class, 'chap26'])->name('chap26');
Route::get('/Tutoriel 27', [MainController::class, 'chap27'])->name('chap27');
Route::get('/Tutoriel 28', [MainController::class, 'chap28'])->name('chap28');
Route::get('/Tutoriel 29', [MainController::class, 'chap29'])->name('chap29');
Route::get('/Tutoriel 30', [MainController::class, 'chap30'])->name('chap30');
Route::get('/Tutoriel 31', [MainController::class, 'chap31'])->name('chap31');
Route::get('/Tutoriel 32', [MainController::class, 'chap32'])->name('chap32');
Route::get('/Tutoriel 33', [MainController::class, 'chap33'])->name('chap33');

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
