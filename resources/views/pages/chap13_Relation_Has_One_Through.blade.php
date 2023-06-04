@extends('layouts.app')
@section('title','Laravelpower | Relation Has One Through')
@section('content')
<div class="p-2">
      <h1>Laravel8 Relation Has One Through</h1>
  
<p>
On a déjà mis en place une relation one to one entre posts et images.
La table posts contient les champs <em><strong> id, title, content, created_at et 
updated_at</strong></em>.<br>
La table <strong>images</strong> contient les champs
<em><strong>id, path, post_id, created_at et updated_at </strong></em>.<br>
A présent, on passe à une relation has one through avec la table <strong>artists</strong>
 qui contient les champs <em><strong> id, name, image_id, created_at et 
updated_at</strong></em>.<br>
Une image a un et un seul artiste qui l'a créé. On veut récupérer sur le post 
l'artiste qui a créé l'image, on va utiliser la relation <strong>Has One Through</strong>.
</p>


<p>On crée le modele <strong>Artist</strong>. On tape 
<em><strong>php artisan make:model Artist -m</strong></em><br>
Dans database\migrations\ 2023_03_15_183425_create_artists_table.php<br>
<img src="{{ asset('images/laravel_chap13_image1.jpg') }}"><br>
On tape la commande :
<em><strong>php artisan migrate</strong></em><br>
</p>


<p>
Dans Image.php<br>
<img src="{{ asset('images/laravel_chap13_image2.jpg') }}">
</p>

 <p>
Dans Post.php<br>
<img src="{{ asset('images/laravel_chap13_image3.jpg') }}">
</p>


<p>
Dans la base de données, dans la table artists, on crée un nouvel artiste<br>
<img src="{{ asset('images/laravel_chap13_image4.jpg') }}">
</p>


<p>
Dans <strong>article.blade.php</strong><br>
<img src="{{ asset('images/laravel_chap13_image5.jpg') }}">
</p>

<p> 
Sur la page d'accueil : <br><img src="{{ asset('images/laravel_chap13_image6.jpg') }}"><br> 
</p>

<p>
Dans la table images : <br><img src="{{ asset('images/laravel_chap13_image7.jpg') }}"><br> 
Dans la table artists : <br><img src="{{ asset('images/laravel_chap13_image8.jpg') }}"><br> 
Sur la page d'accueil sur le post 11: <br><img src="{{ asset('images/laravel_chap13_image9.jpg') }}"><br> 
</p>

<p>
On peut appliquer le même principe pour la relation HasManyThrough.<br>
On met en place la relation Has One Through lorsqu'il y a une relation 
one to one entre 3 tables.<br>
On met en place la relation Has Many Through lorsqu'il y a une relation 
one to many entre 3 tables.<br>
</p> 


<div>
    <a href="{{ route('chap12') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre12: Relation One to Many(P.)</a>
    <a href="{{ route('chap14') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre14: Relation has one of Many</a>
</div>

</div>
@endsection
