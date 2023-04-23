<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Les vues avec Blade</title>
    </head>
    <body>
      <h1>Laravel8 Les vues avec Blade</h1>
  
<p>
  On va créer trois pages distinctes : 
  <ul>
    <li>une page d'accueil</li>
    <li>une page d'article</li>
    <li>une page de contact</li>
  </ul>
</p>
  
  <p>
Dans <strong>routes/web.php</strong>, on crée trois routes : <br>
<pre class="bg-secondary">
  <strong><i>
use App\Http\Controllers\PostController;
Route::get('/posts', [PostController::class, 'index'])->name('welcome');
Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');
  </i></strong>
</pre>
  </p>
  
  
  <p>
Dans App\Http\Controllers\PostController.php<br>
<p>
<img src="{{ asset('images/laravel_PostController9.jpg') }}" alt="PostController code" />
</p>
On crée la vue article.blade.php<br>
<p>
<img src="{{ asset('images/laravel_article.jpg') }}" alt="article code" />
</p>
URL : <strong>http://validcv.test/posts/1</strong><br>
Résultat : <br>
<p>
<img src="{{ asset('images/laravel_PostController10.jpg') }}" alt="PostController result" />
</p>

URL : <strong>http://validcv.test/posts/2</strong><br>
Résultat : <br>
<p>
<img src="{{ asset('images/laravel_PostController11.jpg') }}" alt="PostController result" />
</p>

URL : <strong>http://validcv.test/posts/3</strong><br>
Résultat : <br>
<p>
<img src="{{ asset('images/laravel_PostController12.jpg') }}" alt="PostController result" />
</p>

URL : <strong>http://validcv.test/posts/th</strong><br>
Résultat : <br>
<p>
<img src="{{ asset('images/laravel_PostController13.jpg') }}" alt="PostController result" />
</p>
On crée la vue contact.blade.php<br>
<p>
<img src="{{ asset('images/laravel_contact.jpg') }}" alt="contact code" />
</p>
URL : <strong>http://validcv.test/contact</strong><br>
Résultat : <br>
<p>
<img src="{{ asset('images/laravel_PostController14.jpg') }}" alt="PostController result" />
</p>

  </p>

  <p>
Dans resources\views, on crée le dossier <strong>layout</strong>. A l'intérieur, on crée le fichier <strong>app.blade.php</strong>.<br>
<p>
<img src="{{ asset('images/laravel_app.jpg') }}" alt="app code" />
</p>

Dans articles.blade.php<br>
<p>
<img src="{{ asset('images/laravel_articles4.jpg') }}" alt="articles code" />
</p>

Dans article.blade.php<br>
<p>
<img src="{{ asset('images/laravel_article2.jpg') }}" alt="article code" />
</p>

Dans contact.blade.php<br>
<p>
<img src="{{ asset('images/laravel_contact2.jpg') }}" alt="contact code" />
</p>

Dans resources\views, on crée le dossier <strong>partial</strong>. A l'intérieur, on crée le fichier <strong>navbar.blade.php</strong>.<br>
<p>
<img src="{{ asset('images/laravel_navbar.jpg') }}" alt="navbar code" />
</p>
  </p>

<p>
  URL : <strong>http://validcv.test/posts</strong><br>
Résultat : <br>
<p>
<img src="{{ asset('images/laravel_PostController15.jpg') }}" alt="PostController result" />
</p>

  URL : <strong>http://validcv.test/posts/1</strong><br>
Résultat : <br>
<p>
<img src="{{ asset('images/laravel_PostController16.jpg') }}" alt="PostController result" />
</p>

  URL : <strong>http://validcv.test/posts/2</strong><br>
Résultat : <br>
<p>
<img src="{{ asset('images/laravel_PostController17.jpg') }}" alt="PostController result" />
</p>
</p>

<p>
  la commande <strong>php artisan route list</strong> liste les différentes routes avec leur nom,
  la méthode utilisée, l'URI, l'action et le middleware utilisé.
</p>
    </body>
</html>
