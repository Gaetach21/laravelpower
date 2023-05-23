@extends('layouts.app')
@section('title','Laravelpower | Soft Deletes')
@section('content')
<div class="p-2">
      <h1>Laravel8 Soft Deletes</h1>

      <h3>Introduction</h3>
<p>
Le système de Soft Deletes permet de ne pas supprimer définitivement l'information en base 
de données.<br>
On crée un modele <strong>Post</strong>.<br>
Dans Post.php<br>
<img src="{{ asset('images/laravel_chap23_image1.jpg') }}"><br>
Dans Database/Migrations/create_posts_table.php<br>
<img src="{{ asset('images/laravel_chap23_image2.jpg') }}"><br>
On crée des posts en base de données<br>
<img src="{{ asset('images/laravel_chap23_image3.jpg') }}" style="width: 500px;">
</p>

<h3>Utilisation du Soft Delete</h3>
<p>
Dans Post.php<br>
<img src="{{ asset('images/laravel_chap23_image4.jpg') }}"><br>	
On fait une migration pour ajouter une colonne <strong>deleted_at</strong> à la table posts<br>
<strong>php artisan make:migration add_deleted_at_to_posts_table --table=posts</strong><br>
<!-- Dans Database/Migrations/add_deleted_at_to_posts_table.php<br>
<img src="{{ asset('images/laravel_chap23_image5.jpg') }}"><br>
<strong>php artisan migrate</strong><br>
Je réactualise ma table posts en base de données, j'ai un nouveau champ 
<strong>deleted_at</strong> qui par défaut est nul!
<img src="{{ asset('images/laravel_chap23_image6.jpg') }}"><br>
Pour supprimer un post, on retourne au niveau des routes et dans la route racine 
on va récupérer le premier poste pour le supprimer
Dans PostController.php <br>
<img src="{{ asset('images/laravel_chap23_image7.jpg') }}"><br>
Le post numéro 1 sera supprimé et je n'ai plus que 4 posts sur la page des posts
<img src="{{ asset('images/laravel_chap23_image8.jpg') }}"><br>
Dans la base de données, le post 1 a la colonne <strong>deleted_at</strong> avec une valeur.<br>
<img src="{{ asset('images/laravel_chap23_image9.jpg') }}"><br>
En réalité, le post est supprimé au niveau de notre application mais on conserve la donnée au niveau de notre 
table.<br>
Malgré tout, on sait à quel moment le post a été supprimé<br>
Pour récupérer le post, dans PostController.php<br>
<img src="{{ asset('images/laravel_chap23_image10.jpg') }}"><br>
Sur la page des articles, on retrouve le premier post<br>
<img src="{{ asset('images/laravel_chap23_image11.jpg') }}"><br>
Pour définitivement supprimer la donnée de la table, on 
utilise la méthode forceDelete() dans PostController.php<br>
<img src="{{ asset('images/laravel_chap23_image12.jpg') }}"><br> -->
</p>




<div>
    <a href="{{ route('chap22') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre22: Les middlewares</a>
    <a href="" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre24: Les évènements</a>
</div>

</div>
@endsection
