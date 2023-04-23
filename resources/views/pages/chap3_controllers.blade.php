@extends('layouts.app')
@section('title','Laravelpower | Les contrôleurs')
@section('content')
<div class="p-2">
   <h1>Laravel8 Les contrôleurs</h1>
  

  
  <p>
  Les contrôleurs étendent de la classe <strong>controller</strong>.<br>
Dans <strong>routes/web.php</strong>, on a : <br>
<pre>
  <strong><i>
    Route::get('/', function () {
    return view('articles');
});
  </i></strong>
</pre>
On va créer un contrôleur pour renvoyer la vue <strong>articles</strong>.<br>
On peut créer le contrôleur manuellement ou de façon dynamique.<br>
Pour créer le contrôleur de façon dynamique, on utilise la ligne de commande.<br>
On ouvre le terminal dans le projet laravel sur lequel nous travaillons.<br>
la commande pour créer un nouveau contrôleur est : <br>
<strong><i>php artisan make:controller PostController</i></strong><br>
La ligne de commande renvoie le message suivant:<br>
<i>Controller created successfully</i><br>
Dans App\Http\Controllers, on a le fichier <strong>PostController.php</strong><br>
<p>
<img src="{{ asset('images/laravel_PostController.jpg') }}" alt="PostController code" />
</p>

  <div>
    <a href="{{ route('chap2') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre2: Routing de base</a>
    <a href="" class="bg-primary p-2 text-white mx-5" style="text-decoration: none;">Chapitre4: Les vues avec Blade</a>
  </div>
<!-- Dans <strong>routes/web.php</strong>, on a : <br>
<pre class="bg-secondary">
  <strong><i>
use App\Http\Controllers\PostController;
Route::get('/posts', [PostController::class, 'index']);
  </i></strong>
</pre>
Résultat à l'adresse <strong>validcv.test/posts</strong>
<p>
<img src="{{ asset('images/laravel_routing1.jpg') }}" alt="Routing Example" />
</p>
  </p>
  
  
  <p>
    <h3>Autre exemple</h3>
Dans App\Http\Controllers\PostController.php<br>
<p>
<img src="{{ asset('images/laravel_PostController2.jpg') }}" alt="PostController code2" />
</p>
Pour récupérer le title dans la vue, dans articles.blade.php<br>
<p>
<img src="{{ asset('images/laravel_articles.jpg') }}" alt="articles code" />
</p>
Résultat à l'adresse <strong>validcv.test/posts</strong>
<p>
<img src="{{ asset('images/laravel_PostController3.jpg') }}" alt="PostController result" />
</p>
Une autre façon de passer la variable title à notre vue est d'utiliser la fonction <strong>with</strong><br>
Dans App\Http\Controllers\PostController.php<br>
<pre><strong>return view('articles')->with('title', $title);</strong></pre>
On met title parce que dans la vue, la variable s'appelle <strong>$title</strong>.
  </p>

  <p>
    <h3>Autre exemple</h3>
Dans App\Http\Controllers\PostController.php<br>
<p>
<img src="{{ asset('images/laravel_PostController4.jpg') }}" alt="PostController code3" />
</p>
Dans articles.blade.php<br>
<p>
<img src="{{ asset('images/laravel_articles2.jpg') }}" alt="articles code2" />
</p>
Résultat à l'adresse <strong>validcv.test/posts</strong>
<p>
<img src="{{ asset('images/laravel_PostController5.jpg') }}" alt="PostController result2" />
</p>
On obtient également le même résultat en passant en second argument un array avec clé et valeur dans le contrôleur.<br>
Dans App\Http\Controllers\PostController.php<br>
<p>
<img src="{{ asset('images/laravel_PostController6.jpg') }}" alt="PostController code4" />
</p>
  </p>

  <p>
    <h3>Autre exemple</h3>
On peut présenter les données dans un array.<br>
Dans App\Http\Controllers\PostController.php<br>
<p>
<img src="{{ asset('images/laravel_PostController7.jpg') }}" alt="PostController code4" />
</p>
Dans articles.blade.php<br>
<p>
<img src="{{ asset('images/laravel_articles3.jpg') }}" alt="articles code3" />
</p>
Résultat à l'adresse <strong>validcv.test/posts</strong>
<p>
<img src="{{ asset('images/laravel_PostController8.jpg') }}" alt="PostController result3" />
</p>
  </p> -->
</div>
@endsection