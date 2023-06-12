@extends('layouts.app')
@section('title','Laravelpower | Les services providers')
@section('content')
<div class="p-2">
      <h1>Laravel8 Les services providers</h1>


<h3>Création de StripeAPI</h3>
<p>
On crée un contrôleur pour le paiement : <br>
<strong>php artisan make:controller PaymentController -r</strong><br>
Dans routes\web.php<br>
<img src="{{ asset('images/laravel_chap30_image1.jpg') }}"><br>
On exécute la commande <strong>php artisan route:list</strong> pour 
voir les routes avec PaymentController.<br>
On va avoir besoin d'une API(paypal, stripe, ...) pour charger les utilisateurs, 
pour faire des paiements.<br>
Dans PaymentController.php<br>
<img src="{{ asset('images/laravel_chap30_image2.jpg') }}"><br>
Dans App, on crée le dossier <strong>Stripe</strong>. A l'intérieur, on crée la 
classe <strong>StripeAPI.php</strong>.<br>
<img src="{{ asset('images/laravel_chap30_image3.jpg') }}"><br>
Dans PaymentController.php<br>
<img src="{{ asset('images/laravel_chap30_image4.jpg') }}"><br>
Sur http://laravelpower.test/paiements<br>
<img src="{{ asset('images/laravel_chap30_image5.jpg') }}"><br>
Dans une API, on a besoin d'une clé. Dans notre fichier d'environnement <strong>.env</strong>, 
on ajoute : <strong>STRIPE_KEY=123456789</strong>.<br>
Dans <strong>StripeAPI.php</strong>.<br>
<img src="{{ asset('images/laravel_chap30_image6.jpg') }}"><br>
Dans PaymentController.php<br>
<img src="{{ asset('images/laravel_chap30_image7.jpg') }}"><br>
On copie le code de stripeAPI.php et on suprrime le dossier stripe. 
Dans App, on crée le dossier <strong>Services</strong> et à l'intérieur, on 
crée le fichier <strong>StripeService.php</strong>.<br>
<img src="{{ asset('images/laravel_chap30_image8.jpg') }}"><br>
Dans PaymentController.php<br>
<img src="{{ asset('images/laravel_chap30_image9.jpg') }}"><br>
</p>

<h3>Création d'un provider</h3>
<p>
On va créer un provider qui va montrer à laravel comment instancier 
la classe <strong>StripeService</strong>.<br>
<strong>php artisan make:provider StripeServiceProvider</strong><br>
Dans Providers\StripeServiceProvider.php<br>
<img src="{{ asset('images/laravel_chap30_image10.jpg') }}"><br>
Le service provider doit être enregistré au niveau du fichier de configuration 
App. Dans config\app.php<br>
<img src="{{ asset('images/laravel_chap30_image11.jpg') }}"><br>
Sur http://laravelpower.test/paiements<br>
<img src="{{ asset('images/laravel_chap30_image5.jpg') }}"><br>
Dans StripeService.php<br>
<img src="{{ asset('images/laravel_chap30_image12.jpg') }}"><br>
Sur http://laravelpower.test/paiements<br>
On obtient un montant aléatoire.<br>
</p>

<h3>Création d'un nouveau service</h3>
<p>
On veut créer un nouveau service pour faire une remise sur le montant. Dans 
Services, on crée le fichier <strong>OrderService.php</strong> pour traiter la 
commande et faire une remise sur le montant.<br>
Dans StripeService.php<br>
<img src="{{ asset('images/laravel_chap30_image13.jpg') }}"><br>
Dans OrderService.php<br>
<img src="{{ asset('images/laravel_chap30_image14.jpg') }}"><br>
Dans PaymentController.php<br>
<img src="{{ asset('images/laravel_chap30_image15.jpg') }}"><br>
Dans StripeServiceProvider.php<br>
<img src="{{ asset('images/laravel_chap30_image16.jpg') }}"><br>
Dans OrderService.php<br>
<img src="{{ asset('images/laravel_chap30_image17.jpg') }}"><br>
Sur http://laravelpower.test/paiements<br>
<img src="{{ asset('images/laravel_chap30_image18.jpg') }}"><br>
</p>


<div>
    <a href="{{ route('chap29') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre29: Les jobs</a>
    <a href="{{ route('chap31') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre31: Un système de commentaires</a>
</div>

</div>
@endsection
