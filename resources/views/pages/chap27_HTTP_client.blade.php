@extends('layouts.app')
@section('title','Laravelpower | HTTP client')
@section('content')
<div class="p-2">
      <h1>Laravel8 HTTP client</h1>

      <h3>Introduction</h3>
<p>
HTTP client est une <strong>API minimale</strong> qui permet de faire appel aux 
applications externes.
Dans ce chapitre, nous allons utiliser une fausse API à savoir 
<strong>JSON Placeholder</strong> qui va permettre d'envoyer de fausses réponses. 
Elle possede différentes ressources telles que des articles, des albums, des photos, 
des composants.
</p>

<h3>Démonstration</h3>
<p>
On crée un nouveau contrôleur pour tester les appels API :<br>
<strong>php artisan make:controller PlaceholderAPIController</strong><br>
Dans routes\web.php<br>
<img src="{{ asset('images/laravel_chap27_image1.jpg') }}"><br>
Dans PlaceholderAPIController.php<br>
<img src="{{ asset('images/laravel_chap27_image2.jpg') }}"><br>
Sur laravelpower.test/PlaceholderAPI<br>
<img src="{{ asset('images/laravel_chap27_image3.jpg') }}"><br>
Dans resources/views, on crée le dossier <strong>PlaceholderAPI</strong> 
à l'intérieur duquel on crée le fichier index.blade.php :<br>
<img src="{{ asset('images/laravel_chap27_image4.jpg') }}"><br>
Dans PlaceholderAPIController.php<br>
<img src="{{ asset('images/laravel_chap27_image5.jpg') }}"><br>
Sur laravelpower.test/PlaceholderAPI<br>
<img src="{{ asset('images/laravel_chap27_image6.jpg') }}"><br>
Pour retourner un array de type collections, on utilise <strong>collect()</strong>
Dans PlaceholderAPIController.php<br>
<img src="{{ asset('images/laravel_chap27_image7.jpg') }}"><br>
Sur laravelpower.test/PlaceholderAPI<br>
<img src="{{ asset('images/laravel_chap27_image8.jpg') }}"><br>
Pour récupérer uniquement le titre du premier post:<br>
Dans PlaceholderAPIController.php<br>
<img src="{{ asset('images/laravel_chap27_image9.jpg') }}"><br>
Sur laravelpower.test/PlaceholderAPI<br>
<img src="{{ asset('images/laravel_chap27_image10.jpg') }}"><br>
</p>

<h3>Poster une ressource</h3>
<p>
Pour poster une ressource:<br>
Dans PlaceholderAPIController.php<br>
<img src="{{ asset('images/laravel_chap27_image11.jpg') }}"><br>
Sur laravelpower.test/PlaceholderAPI<br>
<img src="{{ asset('images/laravel_chap27_image12.jpg') }}"><br>
On peut rajouter un fichier en tant que pièce jointe lorsqu'on 
poste une ressource.
</p>


<div>
    <a href="{{ route('chap26') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre26: Les routes(notions avancées)</a>
    <a href="{{ route('chap28') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre28: Les observers</a>
</div>

</div>
@endsection
