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
<img src="{{ asset('images/laravel_chap21_image3.jpg') }}" style="height: 300px;"><br>
<!-- On crée un compte sous mailtrap.io pour recevoir nos mails de test.<br>
<img src="{{ asset('images/laravel_chap20_image4.jpg') }}"> -->
</p>

<!-- <h3>Envoi d'un mail dynamique</h3>
<p>
Pour envoyer un mail dynamique, on crée un faux utilisateur qui a pour email : 
<strong>'user@test.com'</strong> et pour nom : <strong>monsieur Gaetan</strong>.<br>
Dans TestController.php<br>
<img src="{{ asset('images/laravel_chap20_image5.jpg') }}"><br>
Dans App/Mail/TestMail.php<br>
<img src="{{ asset('images/laravel_chap20_image6.jpg') }}"><br>
Dans resources/views/emails/test.blade.php<br>
<img src="{{ asset('images/laravel_chap20_image7.jpg') }}"><br>
Sous mailtrap.io<br>
<img src="{{ asset('images/laravel_chap20_image8.jpg') }}">
</p>

<h3>Envoi d'un mail avec pièce jointe</h3>
<p>
Dans App/Mail/TestMail.php<br>
<img src="{{ asset('images/laravel_chap20_image9.jpg') }}"><br>
Sous mailtrap.io<br>
<img src="{{ asset('images/laravel_chap20_image10.jpg') }}"><br>
On peut utiliser la méthode attachFromStorage qui appelle le dossier storage/app<br>
<img src="{{ asset('images/laravel_chap20_image11.jpg') }}">
</p>

<h3>Envoi d'un mail avec markdown</h3>
<p>
Sur la console : <strong>php artisan make:mail TestMarkdownMail -m emails.markdown-test</strong><br>
Dans resources/views/emails, on crée un fichier markdown-test.blade.php<br>
<img src="{{ asset('images/laravel_chap20_image12.jpg') }}"><br>
Dans App\Mail, on a le fichier TestMarkdownMail.php<br>
<img src="{{ asset('images/laravel_chap20_image13.jpg') }}"><br>
dans le fichier .env : <br>
<strong>APP_NAME=GaetanCuisine</strong><br>
<strong>MAIL_FROM_ADDRESS=tachgaetan@gmail.com</strong><br>
Dans TestController.php<br>
<img src="{{ asset('images/laravel_chap20_image14.jpg') }}"><br>
Sous mailtrap.io<br>
<img src="{{ asset('images/laravel_chap20_image15.jpg') }}">
</p> -->





<div>
    <a href="{{ route('chap20') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre20: Envoi des mails</a>
    <a href="" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre22: Les middlewares</a>
</div>

</div>
@endsection
