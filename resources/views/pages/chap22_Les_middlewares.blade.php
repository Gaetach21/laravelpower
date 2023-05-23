@extends('layouts.app')
@section('title','Laravelpower | Les middlewares')
@section('content')
<div class="p-2">
      <h1>Laravel8 Les middlewares</h1>

      <h3>Définition</h3>
<p>
Le middleware est là pour couper la requête entre le client et le service 
et automatiser des mécanismes.<br>
Dans App\Http, on a le fichier <strong>kernel.php</strong> qui contient 
tous les middlewares.<br>
Dans routes/web.php, on a défini le middleware <strong>auth</strong><br>
<img src="{{ asset('images/laravel_chap22_image1.jpg') }}"><br>
Cela signifie qu'on accède pas à la route dashboard si on n'est pas connecté.
</p>

<h3>Création d'un middleware personnalisé</h3>
<p>
Pour créer un middleware, on tape sur la console:<br>
<strong>php artisan make:middleware IsAdmin</strong><br>
Cette commande crée le middleware <strong>IsAdmin</strong> 
dans app\Http\Middleware.<br>
Il va nous permettre de vérifier si l'utilisateur est un 
administrateur, auquel cas on continue la requête et on lui 
fait acceder à la page demandée sinon on courtcircuite la requête 
et on le redirige quelque part.<br>
On enregistre notre middleware <strong>IsAdmin</strong> dans kernel.php.<br>
<img src="{{ asset('images/laravel_chap22_image2.jpg') }}" style="width: 500px;"><br>
J'affecte les routes /créér un article et /supprimer un article à l'aide du 
middleware <strong>IsAdmin</strong><br>
<!-- Dans routes/web.php<br>
<img src="{{ asset('images/laravel_chap22_image3.jpg') }}"><br> 
Dans IsAdmin.php<br>
<img src="{{ asset('images/laravel_chap22_image4.jpg') }}"><br> 
Lorsque l'utilisateur n'est pas administrateur, on obtient la page suivante : <br>
<img src="{{ asset('images/laravel_chap22_image5.jpg') }}"> -->
</p>


<div>
    <a href="{{ route('chap21') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre21: Les notifications</a>
    <a href="{{ route('chap23') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre23: Soft Deletes</a>
</div>

</div>
@endsection
