@extends('layouts.app')
@section('title','Laravelpower | Autorisation avec les gates')
@section('content')
<div class="p-2">
      <h1>Laravel8 Autorisation avec les gates</h1>
  
<p>
L’autorisation donne accès à la personne authentifiée.<br>
Les gates sont un moyen de définir l’autorisation. On crée un nouveau rôle d’administrateur. 
</p>

<p>
	On crée une migration :<br>
	<strong>php artisan make:migration add_admin_column_to_users_table --table=users</strong><br>
Dans 2022_10_30_155300_add_admin_column_to_users_table.php<br>
<img src="{{ asset('images/laravel_chap19_image1.jpg') }}"><br>
on tape : <strong>php artisan migrate</strong><br>
On crée un nouvel utilisateur. 
</p>

<p>
Dans la base de données dans la table users, on définit la colonne admin de l’utilisateur créé à 1.<br>
On définit notre gate (notre autorisation).<br>
Dans App\Providers\ AuthServiceProvider.php<br>
<img src="{{ asset('images/laravel_chap19_image2.jpg') }}" style="height: 300px;"><br>
<!-- Pour avoir accès à ma gate, le user admin doit être égal à 1.<br>
Dans TestController.php<br>
<img src="{{ asset('images/laravel_chap18_image3.jpg') }}"><br>
Pour accéder à la page <strong>foo</strong>, l’utilisateur doit être administrateur sinon on renvoie une 403.
</p> -->


<div>
    <a href="{{ route('chap18') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre18: Authentification</a>
    <a href="" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre20: Envoyer des mails</a>
</div>

</div>
@endsection
