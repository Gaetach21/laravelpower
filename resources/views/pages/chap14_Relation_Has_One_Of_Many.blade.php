@extends('layouts.app')
@section('title','Laravelpower | Relation Has One Of Many')
@section('content')
<div class="p-2">
      <h1>Laravel8 Relation Has One Of Many</h1>
  
<p>
On tape sur la console la commande <strong>composer update</strong> 
pour mettre à jour la version de notre framework Laravel.
</p>

<p>
Dans le cas des posts, on peut grace à cette relation récupérer le 
premier et le dernier commentaire.
</p>


<p>
Dans la base de données, dans la table commentaire, on crée 2 nouveaux 
commentaires<br>
<img src="{{ asset('images/laravel_chap14_image1.jpg') }}">
</p>


<p>
Dans Post.php<br>
<img src="{{ asset('images/laravel_chap14_image2.jpg') }}">
</p>


<p>
Dans <strong>article.blade.php</strong><br>
<img src="{{ asset('images/laravel_chap14_image3.jpg') }}">
</p>

<p> 
Sur la page d'accueil, on clique sur "Mon super titre" : 
<br><img src="{{ asset('images/laravel_chap14_image4.jpg') }}"><br> 
</p>


 <p>
On peut trier l’id à la place de content.
Dans <strong>article.blade.php</strong><br>
<img src="{{ asset('images/laravel_chap14_image5.jpg') }}">
</p>

<p> 
Sur la page d'accueil, on clique sur "Mon super titre" : 
<br><img src="{{ asset('images/laravel_chap14_image6.jpg') }}"><br> 
</p> 

<div>
    <a href="{{ route('chap13') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre13: Relation has one Through</a>
    <a href="{{ route('chap15') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre15: Les requêtes HTTP</a>
</div>

</div>
@endsection
