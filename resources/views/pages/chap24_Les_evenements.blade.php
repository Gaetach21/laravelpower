@extends('layouts.app')
@section('title','Laravelpower | Les évènements')
@section('content')
<div class="p-2">
      <h1>Laravel8 Les évènements</h1>

      <h3>Introduction</h3>
<p>
On va apprendre à écouter les évènements dans notre application.<br>
On va déclencher un évènement dès qu'un article sera crée.<br>
</p>

<h3>Création des events et des listeners</h3>
<p>
On peut générer l'event et le listener en utilisant la commande <strong>php artisan event:generate</strong> 
ou on peut le faire manuellement.<br>
Pour créer un event : <br>
<strong>php artisan make:event PostCreatedEvent</strong><br>
Pour créer un listener : <br>
<strong>php artisan make:listener PostCreatedListener --event=PostCreatedEvent</strong><br>
Automatiquement, on a deux nouveaux dossiers dans App <strong>Events</strong> et <strong>Listeners</strong> 
à l'intérieur desquels on retrouve nos events et nos listeners.
</p>

<h3>Déclenchement de l'event et du listener créés</h3>
<p>
Dans PostController.php<br>
<img src="{{ asset('images/laravel_chap24_image1.jpg') }}" style="height: 320px;"><br>
 Dans PostCreatedEvent.php<br>
<img src="{{ asset('images/laravel_chap24_image2.jpg') }}"><br>
Dans PostCreatedListener.php<br>
<img src="{{ asset('images/laravel_chap24_image3.jpg') }}"><br>
Dans App\Providers\EventServiceProviders.php, on va mapper notre event 
avec notre listener.<br>
<img src="{{ asset('images/laravel_chap24_image4.jpg') }}"><br>
Sur la page de création des articles <br>
<img src="{{ asset('images/laravel_chap24_image5.jpg') }}"><br> 
</p>


<div>
    <a href="{{ route('chap23') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre23: Soft Deletes</a>
    <a href="{{ route('chap25') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre25: Les composants Blade</a>
</div>

</div>
@endsection
