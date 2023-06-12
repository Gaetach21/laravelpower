@extends('layouts.app')
@section('title','Laravelpower | Un système de commentaires')
@section('content')
<div class="p-2">
      <h1>Laravel8 Un système de commentaires</h1>


<h3>Créer un modèle et une migration</h3>
<p>
On crée un modèle Post : <br>
<strong>php artisan make:model Post -m</strong><br>
Dans create_posts_table.php<br>
<img src="{{ asset('images/laravel_chap31_image1.jpg') }}"><br>
On crée un modèle Comment et une migration associée à ce modèle<br>
<strong>php artisan make:model Comment -m</strong><br>
Dans create_comments_table.php<br>
<img src="{{ asset('images/laravel_chap31_image2.jpg') }}"><br>
On migre nos tables : <strong>php artisan migrate</strong><br>
</p>

<h3>Les relations entre les modèles</h3>
<p>
Dans Post.php<br>
<img src="{{ asset('images/laravel_chap31_image3.jpg') }}"><br>
Dans Comment.php<br>
<img src="{{ asset('images/laravel_chap31_image4.jpg') }}"><br>
</p>

<h3>Les routes, les vues et les contrôleurs</h3>
<p>
On crée le fichier PostController.php : <br>
<strong>php artisan make:controller PostController -r</strong><br>
On définit les routes dans routes/post/web.php<br>
<img src="{{ asset('images/laravel_chap31_image5.jpg') }}" class="img-fluid" width="800"><br>
Dans PostController.php<br>
<img src="{{ asset('images/laravel_chap31_image6.jpg') }}"><br>
<img src="{{ asset('images/laravel_chap31_image7.jpg') }}"><br>
Dans resources\views\posts, on crée la vue createposts.blade.php<br>
<img src="{{ asset('images/laravel_chap31_image8.jpg') }}"><br>
</p>

<h3>Affichage des articles</h3>
<p>
Dans resources\views\partials\navbar.blade.php<br>
<img src="{{ asset('images/laravel_chap31_image9.jpg') }}"><br>
Dans resources\views\posts\articles.blade.php<br>
<img src="{{ asset('images/laravel_chap31_image10.jpg') }}"><br>
Dans resources\views\posts\article.blade.php<br>
<img src="{{ asset('images/laravel_chap31_image11.jpg') }}" class="img-fluid" width="800"><br>
</p>

<h3>Formulaire pour les commentaires</h3>
<p>
On crée le contrôleur pour les commentaires :<br>
<strong>php artisan make:controller CommentController</strong><br>
On crée le formulaire dans article.blade.php<br>
<img src="{{ asset('images/laravel_chap31_image12.jpg') }}" class="img-fluid" width="800"><br>
Dans routes/post/web.php<br>
<strong>Route::post('/comment/store', 'CommentController@store')->name('comment.add');</strong><br>
Dans CommentController.php<br>
<img src="{{ asset('images/laravel_chap31_image13.jpg') }}"><br>
</p>

<h3>Affichage des commentaires</h3>
<p>
Dans resources\views\posts\article.blade.php<br>
<img src="{{ asset('images/laravel_chap31_image14.jpg') }}" class="img-fluid" width="800"><br>
</p>

<h3>Création du formulaire des réponses et sauvegarde en base de données</h3>
<p>
On crée la fonction replies dans Comment.php<br>
<img src="{{ asset('images/laravel_chap31_image4.jpg') }}"><br>
Dans resources\views\partials\ _comment_replies.blade.php<br>
<img src="{{ asset('images/laravel_chap31_image15.jpg') }}"><br>
Dans routes/post/web.php<br>
<strong>Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');</strong><br>
Dans CommentController.php<br>
<img src="{{ asset('images/laravel_chap31_image16.jpg') }}"><br>
Dans la base de données dans la table comments<br>
<img src="{{ asset('images/laravel_chap31_image17.jpg') }}"><br>
Sur http://laravelpower.test/gestion/articles/1
<img src="{{ asset('images/laravel_chap31_image18.jpg') }}"><br>
</p>

<div>
    <a href="{{ route('chap30') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre30: Les services providers</a>
    <a href="" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre32: Uploader plusieurs images</a>
</div>

</div>
@endsection
