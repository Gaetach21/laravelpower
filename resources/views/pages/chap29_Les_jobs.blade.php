@extends('layouts.app')
@section('title','Laravelpower | Les jobs')
@section('content')
<div class="p-2">
      <h1>Laravel8 Les jobs</h1>

<h3>Introduction</h3>
<p>
Les <strong>jobs</strong> sont intrinsèquement liés aux files d’attente. Pour des tâches qui prennent du temps, on utilise les <strong>jobs</strong> pour les exécuter dès que l’utilisateur ne fera plus grand-chose. On va envoyer un mail de bienvenue à l’utilisateur qui se connecte sur l’application et pour ce faire, on va utiliser les <strong>jobs</strong>.
</p>

<h3>Création d'un mail de bienvenue</h3>
<p>
On crée un mail : <br>
<strong>php artisan make:mail welcomeuserMail --markdown=emails.users.welcome</strong><br>
Dans resources\views\emails\users, on a welcome.blade.php<br>
<img src="{{ asset('images/laravel_chap29_image1.jpg') }}"><br>
Dans RegisteredUserController.php<br>
<img src="{{ asset('images/laravel_chap29_image2.jpg') }}"><br>
Pour envoyer le mail, j’utilise mailtrap.io.<br>
Dès qu’un utilisateur va s’enregistrer, automatiquement le mail va lui être envoyé.
On s’enregistre en cliquant sur le lien inscription.<br>
<img src="{{ asset('images/laravel_chap29_image3.jpg') }}"><br>
Sur mailtrap.io<br>
<img src="{{ asset('images/laravel_chap29_image4.jpg') }}"><br>
</p>

<h3>Création d'un job</h3>
<p>
Sur un serveur, l’envoi d’un mail prend du temps, raison pour laquelle on va créer un job. Ce job va s’occuper simplement d’envoyer ce mail.<br>
Pour créér un job :<br>
<strong>php artisan make:job SendwelcomeMailJob</strong><br>
Automatiquement dans App\jobs, on a SendwelcomeMailJob.php<br>
<img src="{{ asset('images/laravel_chap29_image5.jpg') }}"><br>
Pour dispatcher le job, dans RegisteredUserController.php<br>
<img src="{{ asset('images/laravel_chap29_image6.jpg') }}"><br>
Sur le terminal<br>
<strong>php artisan queue:table</strong><br>
dans Database/migrations, on a une table job dans laquelle on stocke nos tâches.<br>
On saisit la commande <strong>php artisan migrate</strong> pour migrer notre table jobs et on vérifie en base de données.<br>
dans le fichier d'environnement <strong>.env</strong> :
<strong>QUEUE_CONNECTION=database</strong><br>
On se déconnecte et on enregistre un nouvel utilisateur en cliquant sur le lien inscription<br>
<img src="{{ asset('images/laravel_chap29_image7.jpg') }}"><br>
Dans la base de données, le job a été crée.<br>
<img src="{{ asset('images/laravel_chap29_image8.jpg') }}"><br>
Dans mailtrap.io, on n’a pas reçu de mail, à aucun moment Laravel n’a tenté d’exécuter le job.<br>
Pour pouvoir l’exécuter : <strong>php artisan queue:work</strong><br>
On enregistre un nouvel utilisateur et tout fonctionne aussitôt.<br>
<img src="{{ asset('images/laravel_chap29_image9.jpg') }}"><br>
</p>



<div>
    <a href="{{ route('chap28') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre28: Les observers</a>
    <a href="{{ route('chap30') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre30: Les services providers</a>
</div>

</div>
@endsection
