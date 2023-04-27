@extends('layouts.app')
@section('title','Laravelpower | Relation one to many')
@section('content')
<div class="p-2">
      <h1>Laravel8 Relation one to many</h1>
  
<p>
On a une table posts liée à notre modèle <strong>Post</strong>. La
table posts contient les champs id, title, content, created_at et 
updated_at.
</p>
<p>
On veut ajouter des commentaires à chaque post. On va créer une table 
<strong>comments</strong> propre aux commentaires avec les champs suivants : 
<em><strong>id content post_id created_at updated_at </strong></em>, post_id 
est la clé étrangère qui fait référence au post auquel on ajoute un commentaire.<br>
A chaque fois qu'on a un commentaire, on crée un enregistrement dans la table 
<strong>comments</strong>.<br>
Dans <strong>PostController.php</strong> :<br>
<img src="{{ asset('images/laravel_chap9_image1.jpg') }}"><br>
</p>
  
<p>On crée le modele <strong>Comment</strong>. On tape 
<em><strong>php artisan make:model comment -m</strong></em><br>
Dans database\migrations\ 2022_09_27_224450_create_comments_table<br>
<img src="{{ asset('images/laravel_chap9_image2.jpg') }}"><br>
On tape la commande :
<em><strong>php artisan migrate</strong></em><br>
On vérifie en base de données la table <strong>comments</strong>.
</p>

<!-- <p>
Dans Post.php<br>
<img src="{{ asset('images/laravel_chap9_image3.jpg') }}"><br>
Cela signifie qu'un post détient plusieurs commentaires.
</p>

<p>
Dans comment.php<br>
<img src="{{ asset('images/laravel_chap9_image4.jpg') }}"><br>
un commentaire appartient à un post.
</p>

<p>
Dans la base de données, on va créer manuellement des commentaires dans la 
table comments.<br>
Données - clic droit - insérer une ligne<br>
<img src="{{ asset('images/laravel_chap9_image5.jpg') }}"><br>
</p>

<p>
Dans <strong>article.blade.php</strong><br>
<img src="{{ asset('images/laravel_chap9_image6.jpg') }}"><br>
</p>

<p>
Sur la page d'accueil : <br>
<img src="{{ asset('images/laravel_chap9_image7.jpg') }}"><br>
<img src="{{ asset('images/laravel_chap9_image8.jpg') }}"><br>
</p> -->

<div>
    <a href="{{ route('chap8') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre8: L'ORM Eloquent</a>
    <a href="" class="bg-primary p-2 text-white mx-5" style="text-decoration: none;">Chapitre10: Relation One to One</a>
</div>

</div>
@endsection
