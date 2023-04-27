@extends('layouts.app')
@section('title','Laravelpower | L\'ORM Eloquent')
@section('content')
<div class="p-2">
      <h1>Laravel8 L'ORM Eloquent</h1>
  
<p>
<strong>Eloquent</strong> est un ORM qui va nous permettre d'interagir avec la base de
 données au travers de nos modèles.<br>
 On va récupérer nos posts en base de données.
</p>
  
<p>
Dans <strong>PostController.php</strong> :<br>
<img src="{{ asset('images/laravel_chap8_image1.jpg') }}"><br><br>
<img src="{{ asset('images/laravel_chap8_image2.jpg') }}"><br>
<!-- sur la page d'accueil, on a : <br>
<img src="{{ asset('images/laravel_chap8_image3.jpg') }}"><br>
Pour afficher uniquement le titre des posts dans <strong>articles.blade.php</strong><br> 
<img src="{{ asset('images/laravel_chap8_image4.jpg') }}"><br>
sur la page d'accueil, on a : <br>
<img src="{{ asset('images/laravel_chap8_image5.jpg') }}"><br>
</p>

<p>
    Si le nombre de posts est supérieur à 0, on affiche le titre du post
    sinon on ecrit : "aucun post en base de données". Dans <strong>articles.blade.php</strong>
    <p><img src="{{ asset('images/laravel_chap8_image6.jpg') }}"></p>
    <p>Si le nombre de posts est supérieur à 100 dans <strong>articles.blade.php</strong>, alors
    sur la page d'accueil, on a :</p>
    <p><img src="{{ asset('images/laravel_chap8_image7.jpg') }}"></p>
</p>

<p>Pour récupérer un post en particulier, on va créer une route et renvoyer l'id.<br>
Dans <strong>routes/web.php</strong>
<pre>Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');</pre>
Dans <strong>articles.blade.php</strong>
<p><img src="{{ asset('images/laravel_chap8_image8.jpg') }}"></p>
sur la page d'accueil, on a : 
<p><img src="{{ asset('images/laravel_chap8_image9.jpg') }}"></p>
</p>

<p>Pour récupérer un post au travers de l'id, dans PostController.php
    <p><img src="{{ asset('images/laravel_chap8_image10.jpg') }}"></p>
</p>

<p>Pour afficher le contenu de chaque post, dans <strong>article.blade.php</strong>
<p><img src="{{ asset('images/laravel_chap8_image11.jpg') }}"></p> et je retire 
dd($post) dans PostController.php dans la fonction show()</p>

<p>Pour un id qui n'existe pas, dans PostController.php
<p><img src="{{ asset('images/laravel_chap8_image12.jpg') }}"></p>
On teste avec l'id=76, la page d'accueil affiche page introuvable:
<p><strong>404 not found</strong></p>
</p>

<p>On veut récupérer le premier title de notre table posts. Pour cela dans PostController.php
<p><img src="{{ asset('images/laravel_chap8_image13.jpg') }}"></p>
Sur la page d'accueil, on a une collection pour chaque post.</p>

<p>On veut récupérer la première valeur de notre table posts. Pour cela dans PostController.php
<p><img src="{{ asset('images/laravel_chap8_image14.jpg') }}"></p>
Sur la page d'accueil, on a le contenu du premier post pour chaque post.</p>

<p>Pour récupérer un titre qui n'est pas dans notre table posts, dans PostController.php
<p><img src="{{ asset('images/laravel_chap8_image15.jpg') }}"></p>
Sur la page d'accueil, on a <strong>404 not found</strong></p>

<p>On veut creer un post pour effectuer un enregistrement dans la base de données.
Dans routes/web.php<br>
<pre>
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
</pre>
Dans partials/navbar.blade.php<br>
<p><img src="{{ asset('images/laravel_chap8_image16.jpg') }}"></p>
Dans PostController.php<br>
<p><img src="{{ asset('images/laravel_chap8_image17.jpg') }}"></p>
Dans form.blade.php<br>
<p><img src="{{ asset('images/laravel_chap8_image18.jpg') }}"></p>
sur la page d'accueil<br>
<p><img src="{{ asset('images/laravel_chap8_image19.jpg') }}"></p>
Pour récupérer les données dans la BD, la table posts
<p>Dans PostController.php<br><img src="{{ asset('images/laravel_chap8_image20.jpg') }}"></p>
<p>Sur la page d'accueil<br><img src="{{ asset('images/laravel_chap8_image21.jpg') }}"></p>
<p>Dans la table posts<br><img src="{{ asset('images/laravel_chap8_image22.jpg') }}"></p>
<p>On peut proceder autrement.</p>
<p>Dans PostController.php<br><img src="{{ asset('images/laravel_chap8_image23.jpg') }}"></p>
<p>Sur la page d'accueil<br><img src="{{ asset('images/laravel_chap8_image24.jpg') }}"></p>
<p>Dans la table posts<br><img src="{{ asset('images/laravel_chap8_image25.jpg') }}"></p>
</p>

<p>
Pour récupérer les titres dans l'ordre alphabétique:<br>
<p>Dans PostController.php<br><img src="{{ asset('images/laravel_chap8_image26.jpg') }}"></p>
<p>Sur la page d'accueil<br><img src="{{ asset('images/laravel_chap8_image27.jpg') }}"></p>
Pour récupérer 3posts dans l'ordre alphabétique:<br>
<p>Dans PostController.php<br><img src="{{ asset('images/laravel_chap8_image28.jpg') }}"></p>
<p>Sur la page d'accueil<br><img src="{{ asset('images/laravel_chap8_image29.jpg') }}"></p>
</p>

<p>
Pour mettre à jour un post
<p>Dans PostController.php<br><img src="{{ asset('images/laravel_chap8_image30.jpg') }}"></p>
<p>Sur la page d'accueil<br><img src="{{ asset('images/laravel_chap8_image31.jpg') }}"></p>
<p>Dans la table posts<br><img src="{{ asset('images/laravel_chap8_image32.jpg') }}"></p>
</p>
  
  <p>
Pour supprimer un post
<p>Dans PostController.php<br><img src="{{ asset('images/laravel_chap8_image31.jpg') }}"></p>
<p>Sur la page d'accueil<br><img src="{{ asset('images/laravel_chap8_image32.jpg') }}"></p>
<p>Dans la table posts<br><img src="{{ asset('images/laravel_chap8_image33.jpg') }}"></p>
</p>
 -->
<div>
    <a href="{{ route('chap7') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre7: Les factories</a>
    <a href="" class="bg-primary p-2 text-white mx-5" style="text-decoration: none;">Chapitre9: Relation One to Many</a>
</div>

</div>
@endsection

