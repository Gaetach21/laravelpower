@extends('layouts.app')
@section('title','Laravelpower | Les observers')
@section('content')
<div class="p-2">
      <h1>Laravel8 Les observers</h1>

<h3>Création d'un observer</h3>
<p>
Les observers sont là pour écouter et déclencher du code à un moment donné 
de la vie d'un modèle.<br>
On va créer un nouvel observer<br>
<strong>php artisan make:observer UserObserver --model=User</strong><br>
Dans App\observers, on a le fichier UserObserver.<br>
Dans App\Providers\EventServiceProvider.php<br>
<img src="{{ asset('images/laravel_chap28_image1.jpg') }}"><br>
Dans App\observers\UserObserver.<br>
<img src="{{ asset('images/laravel_chap28_image2.jpg') }}"><br>
On crée un nouvel utilisateur en cliquant sur le lien <strong>inscription</strong>.
<img src="{{ asset('images/laravel_chap28_image3.jpg') }}"><br>
La page suivante s'affiche : <br>
<img src="{{ asset('images/laravel_chap28_image4.jpg') }}"><br>
</p>

<h3>Déclenchement d'un évènement à la création d'un utilisateur</h3>
<p>
On crée un évènement :<br>
<strong>php artisan make:event userCreatingEvent</strong><br>
On crée ensuite un écouteur d'évènement :<br>
<strong>php artisan make:listener userCreatingListener --event=userCreatingEvent</strong><br>
Dans User.php<br>
<img src="{{ asset('images/laravel_chap28_image5.jpg') }}"><br>
Dans userCreatingListener.php : <br>
<img src="{{ asset('images/laravel_chap28_image6.jpg') }}"><br>
Dans App\Providers\EventServiceProvider.php<br>
<img src="{{ asset('images/laravel_chap28_image7.jpg') }}"><br>
Dans userCreatingEvent.php : <br>
<img src="{{ asset('images/laravel_chap28_image8.jpg') }}"><br>
On crée un nouvel utilisateur en cliquant sur le lien <strong>inscription</strong>.
<img src="{{ asset('images/laravel_chap28_image9.jpg') }}"><br>
La page suivante s'affiche : <br>
<img src="{{ asset('images/laravel_chap28_image10.jpg') }}"><br>
On vérifie en base de données, ce nouvel utilisateur n'est pas persistant 
en base de données.
</p>

<div>
    <a href="{{ route('chap27') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre27: HTTP client</a>
    <a href="" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre29: Les jobs</a>
</div>

</div>
@endsection
