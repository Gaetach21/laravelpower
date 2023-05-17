@extends('layouts.app')
@section('title','Laravelpower | Les notifications')
@section('content')
<div class="p-2">
      <h1>Laravel8 Les notifications</h1>
 
 <h3>Envoi d'une notification</h3> 
<p>
Pour générer une notification<br>
<strong>php artisan make:notification UserRegisteredNotification</strong><br>
On va envoyer une notification à l'utilisateur lorsqu'il s'est enregistré<br>
Dans RegisteredUserController.php<br>
<img src="{{ asset('images/laravel_chap21_image1.jpg') }}"><br>
L'utilisateur va recevoir le message suivant dans UserRegisteredNotification.php<br>
<img src="{{ asset('images/laravel_chap21_image2.jpg') }}"><br>
On enregistre un nouvel utilisateur en cliquant sur le lien inscription.<br>
Il nous retourne le tableau de bord et on se rend ensuite sur mailtrap.io.<br>
<img src="{{ asset('images/laravel_chap21_image3.jpg') }}" style="height: 250px;"><br>
</p>

<!-- <h3>Envoi d'une notifications avec informations</h3>
<p>
Maintenant on veut passer des petites informations à la construction de notre notification.<br>
Dans RegisteredUserController.php<br>
<img src="{{ asset('images/laravel_chap21_image4.jpg') }}"><br>
Dans UserRegisteredNotification.php<br>
<img src="{{ asset('images/laravel_chap21_image5.jpg') }}"><br>
Sous mailtrap.io<br>
<img src="{{ asset('images/laravel_chap21_image6.jpg') }}">
</p>

<h3>Envoi d'une notification avec mail</h3>
on est libre de créer le mail que l'on veut.<br>
<strong>php artisan make:mail TestNotificationMail</strong><br>
<p>
Dans TestNotificationMail.php<br>
<img src="{{ asset('images/laravel_chap21_image7.jpg') }}"><br>
dans test-notification-mail.php<br>
<img src="{{ asset('images/laravel_chap21_image8.jpg') }}"><br>
Il est question d'envoyer un mailable depuis la notification.
Dans UserRegisteredNotification.php
<img src="{{ asset('images/laravel_chap21_image9.jpg') }}"><br>
Sous mailtrap.io<br>
<img src="{{ asset('images/laravel_chap21_image10.jpg') }}"><br>
</p> -->

<div>
    <a href="{{ route('chap20') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre20: Envoi des mails</a>
    <a href="" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre22: Les middlewares</a>
</div>

</div>
@endsection
