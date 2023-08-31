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

Route::get('/', function () { return view('pages/home'); })->name('welcome');
Route::get('/A propos de Laravelpower', function () { return view('pages/about'); })->name('about_us');
Route::get('/Hébergement web', function () { return view('pages/hebergement'); })->name('hebergement');
Route::get('/Nom de domaine', function () { return view('pages/domain_name'); })->name('domain');
Route::get('/Liste de tutos', function () { return view('pages/cours'); })->name('courses');
Route::get('/Liste de tutos_page=2', function () { return view('pages/cours2'); })->name('courses2');
Route::get('/Liste de tutos_page=3', function () { return view('pages/cours3'); })->name('courses3');
Route::get('/Liste de tutos_page=4', function () { return view('pages/cours4'); })->name('courses4');
Route::get('/Politique de confidentialité', function () { return view('pages/privacy_policy'); })->name('privacy');
Route::get('/Conditions d\'utilisation', function () { return view('pages/terms_of_use'); })->name('terms');
Route::get('/Histoire du web', function () { return view('pages/historique'); })->name('historique');


Route::get('/Contact', [MainController::class, 'createContact'])->name('contact.create');
Route::post('/Contact', [MainController::class, 'storeContact'])->name('contact.store');


Route::get('/Uploader_plusieurs_images', [ProductController::class, 'index'])->name('upload.index');
Route::post('/Uploader_plusieurs_images', [ProductController::class, 'store'])->name('upload.store');
Route::get('/Uploader_plusieurs_images/{id}', [ProductController::class, 'images'])->name('upload.images');


Route::get("sitemap/posts",  [SitemapController::class, 'posts'])->name("sitemap.posts");
Route::get("sitemap/pages",  [SitemapController::class, 'pages'])->name("sitemap.pages");
Route::get("sitemap/index",  [SitemapController::class, 'index'])->name("sitemap.index");

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/Tutoriel 1', function () { return view('pages/chap1_introduction'); })->name('chap1');
Route::get('/Tutoriel 2', function () { return view('pages/chap2_basic_routing'); })->name('chap2');
Route::get('/Tutoriel 3', function () { return view('pages/chap3_controllers'); })->name('chap3');
Route::get('/Tutoriel 4', function () { return view('pages/chap4_les_vues_avec_blade'); })->name('chap4');
Route::get('/Tutoriel 5', function () { return view('pages/chap5_compiler_les_assets'); })->name('chap5');
Route::get('/Tutoriel 6', function () { return view('pages/chap6_Les_migrations'); })->name('chap6');
Route::get('/Tutoriel 7', function () { return view('pages/chap7_Les_factories'); })->name('chap7');
Route::get('/Tutoriel 8', function () { return view('pages/chap8_L\'ORM_Eloquent'); })->name('chap8');
Route::get('/Tutoriel 9', function () { return view('pages/chap9_Relation_One_To_Many'); })->name('chap9');
Route::get('/Tutoriel 10', function () { return view('pages/chap10_Relation_One_To_One'); })->name('chap10');
Route::get('/Tutoriel 11', function () { return view('pages/chap11_Relation_Many_To_Many'); })->name('chap11');
Route::get('/Tutoriel 12', function () { return view('pages/chap12_Relation_One_To_Many(Polymorphic)'); })->name('chap12');
Route::get('/Tutoriel 13', function () { return view('pages/chap13_Relation_Has_One_Through'); })->name('chap13');
Route::get('/Tutoriel 14', function () { return view('pages/chap14_Relation_Has_One_Of_Many'); })->name('chap14');
Route::get('/Tutoriel 15', function () { return view('pages/chap15_Les_requetes_HTTP'); })->name('chap15');
Route::get('/Tutoriel 16', function () { return view('pages/chap16_Validation_de_formulaire'); })->name('chap16');
Route::get('/Tutoriel 17', function () { return view('pages/chap17_Upload_de_fichiers'); })->name('chap17');
Route::get('/Tutoriel 18', function () { return view('pages/chap18_Authentification'); })->name('chap18');
Route::get('/Tutoriel 19', function () { return view('pages/chap19_Autorisation_avec_les_gates'); })->name('chap19');
Route::get('/Tutoriel 20', function () { return view('pages/chap20_Envoi_des_mails'); })->name('chap20');
Route::get('/Tutoriel 21', function () { return view('pages/chap21_Les_notifications'); })->name('chap21');
Route::get('/Tutoriel 22', function () { return view('pages/chap22_Les_middlewares'); })->name('chap22');
Route::get('/Tutoriel 23', function () { return view('pages/chap23_Soft_Deletes'); })->name('chap23');
Route::get('/Tutoriel 24', function () { return view('pages/chap24_Les_evenements'); })->name('chap24');
Route::get('/Tutoriel 25', function () { return view('pages/chap25_Les_composants_Blade'); })->name('chap25');
Route::get('/Tutoriel 26', function () { return view('pages/chap26_Les_routes_notions_avancees'); })->name('chap26');
Route::get('/Tutoriel 27', function () { return view('pages/chap27_HTTP_client'); })->name('chap27');
Route::get('/Tutoriel 28', function () { return view('pages/chap28_Les_observers'); })->name('chap28');
Route::get('/Tutoriel 29', function () { return view('pages/chap29_Les_jobs'); })->name('chap29');
Route::get('/Tutoriel 30', function () { return view('pages/chap30_Les_services_providers'); })->name('chap30');
Route::get('/Tutoriel 31', function () { return view('pages/chap31_un_systeme_de_commentaires'); })->name('chap31');
Route::get('/Tutoriel 32', function () { return view('pages/chap32_Upload_de_plusieurs_images'); })->name('chap32');
Route::get('/Tutoriel 33', function () { return view('pages/chap33_creer_un_sitemap'); })->name('chap33');

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
