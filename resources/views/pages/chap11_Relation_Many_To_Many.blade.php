@extends('layouts.app')
@section('title','Laravelpower | Relation many to many')
@section('content')
<div class="p-2">
      <h1>Laravel8 Relation many to many</h1>
  
<p>
On a une table posts liée à notre modèle <strong>Post</strong>. La
table posts contient les champs id, title, content, created_at et 
updated_at.
</p>
<p>
Pour définir une relation many to many, on va créer une table 
<strong>tags</strong> avec les champs suivants : 
<em><strong>id name created_at updated_at </strong></em>.<br>
Un post peut avoir plusieurs tags et un tag peut appartenir à plusieurs 
autres posts.<br>
</p>
<p>On a besoin d'une table intermédiaire <strong>table pivot</strong> 
pour stocker et matérialiser la relation entre posts et tags. 
On doit la nommer dans l'ordre alphabétique. On va créer la table 
<strong>post_tag</strong> avec les champs suivants : 
<em><strong>post_id tag_id created_at updated_at </strong></em>.</p>
  
<p>On crée le modele <strong>Tag</strong>. On tape 
<em><strong>php artisan make:model Tag -m</strong></em><br>
Dans database\migrations\ xxxx_create_tags_table<br>
<img src="{{ asset('images/laravel_chap11_image1.jpg') }}"><br>
On crée la table pivot. On tape 
<em><strong>php artisan make:migration create_pivot_table_post_tag</strong></em><br>
Dans database\migrations\ xxxx_create_pivot_table_post_tag_table<br>
<img src="{{ asset('images/laravel_chap11_image2.jpg') }}"><br>
On tape la commande :
<em><strong>php artisan migrate</strong></em><br>
On vérifie en base de données les tables <strong>tags</strong> et 
<strong>post_tag</strong>.<br>
<!-- On va remplir les deux tables : <br>
<img src="{{ asset('images/laravel_chap11_image3.jpg') }}"><br>
<img src="{{ asset('images/laravel_chap11_image4.jpg') }}"><br>
</p>

<p>
Dans Post.php<br>
<img src="{{ asset('images/laravel_chap11_image5.jpg') }}">
</p>

<p>
Dans Tag.php<br>
<img src="{{ asset('images/laravel_chap11_image6.jpg') }}">
</p>


<p>
Dans <strong>article.blade.php</strong><br>
<img src="{{ asset('images/laravel_chap11_image7.jpg') }}"><br>
</p>

<p>
Sur la page d'accueil : <br>
<img src="{{ asset('images/laravel_chap11_image8.jpg') }}"><br>
<img src="{{ asset('images/laravel_chap11_image9.jpg') }}"><br>
<img src="{{ asset('images/laravel_chap11_image10.jpg') }}"><br>
</p> -->

<div>
    <a href="{{ route('chap10') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre10: Relation One to One</a>
    <a href="{{ route('chap12') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre12: Relation One to Many(P.)</a>
</div>

</div>
@endsection
