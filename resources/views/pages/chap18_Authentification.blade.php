@extends('layouts.app')
@section('title','Laravelpower | Authentification')
@section('content')
<div class="p-2">
      <h1>Laravel8 Authentification</h1>
  
<p>
Je crée un projet laravel <strong>laravel-authentification</strong>.<br>
Je crée une base de données <strong>laravel-authentification</strong><br>
Dans le fichier <strong>.env</strong>
<strong>
DB_DATABASE = laravel-authentification
</strong>
</p>

<p>
Il faut installer <strong>laravel breeze</strong><br>
Pour cela, on tape la commande suivante sur la console : <strong>composer require laravel/breeze --dev</strong><br>
Au niveau des routes, on a un nouveau fichier <strong>auth.php</strong><br>
Dans routes/web.php : <br>
<strong><pre>require __DIR__.'/auth.php';</pre></strong><br>
on tape : <strong>php artisan route:list</strong><br>
<strong>npm install</strong><br>
Dans Http/Controllers, on a un dossier <strong>Auth</strong> dans lequel on retrouve toutes les classes qui concernent l'authentification de notre système.
<br>
on tape : <strong>npm run dev</strong><br>
Sur la page d'accueil laravel-authentication.test, on a les liens <strong>login</strong> pour se connecter et <strong>register</strong> pour s'enregistrer.<br>
Pour migrer nos tables, on tape : <strong>php artisan migrate</strong>
</p>

<p>
	Lorsqu'on s'enregistre en cliquant sur le lien <strong>register</strong>, il nous retourne la vue <strong>dashboard</strong>. Sur la page, on a un lien <strong>log out</strong> pour se déconnecter et pour se reconnecter, on clique sur le lien <strong>login</strong>.
</p>

<p>
On crée un contrôleur de test<br>
<strong>php artisan make :controller TestController</strong><br>
<!-- Dans routes/web.php, on va créer 2 routes de test
<strong><pre>
	use App\Http\Controllers\TestController;
Route::get('/foo', [TestController::class, 'foo'])->name('foo');
Route::get('/bar', [TestController::class, 'bar'])->name('bar');
</pre></strong>
Dans TestController.php<br>
<img src="{{ asset('images/laravel_chap18_image1.jpg') }}"><br>
Dans resources/views, on crée le dossier test dans lequel on créé 2 fichiers : <strong>foo.blade.php</strong> et <strong>bar.blade.php</strong>.<br>
Dans foo.blade.php<br>
<img src="{{ asset('images/laravel_chap18_image2.jpg') }}"><br>
Dans bar.blade.php<br>
<img src="{{ asset('images/laravel_chap18_image3.jpg') }}"><br>
On veut accede à ces pages à moins d’etre connecté. On va utiliser un middleware qui va courcuiter nos requêtes http. Dans TestController.php :<br>
Dans TestController.php<br>
<img src="{{ asset('images/laravel_chap18_image4.jpg') }}"><br>
Le middleware auth va vérifier si la personne qui consulte les vues test.foo et test.bar est connecté. Si elle n’est pas connectée, on la renvoie sur le login.<br>
Si on veut retourner une vue sans être authentifié par exemple bar.blade.php :<br>
<img src="{{ asset('images/laravel_chap18_image5.jpg') }}"><br>
</p> -->




<div>
    <a href="{{ route('chap17') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre17: Upload de fichiers</a>
    <a href="{{ route('chap19') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre19: Autorisation avec les gates</a>
</div>

</div>
@endsection
