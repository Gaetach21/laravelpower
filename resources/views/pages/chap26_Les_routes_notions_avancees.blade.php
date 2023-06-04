@extends('layouts.app')
@section('title','Laravelpower | Les routes(notions avancées)')
@section('content')
<div class="p-2">
      <h1>Laravel8 Les routes(notions avancées)</h1>

      <h3>Introduction</h3>
<p>
On veut créér ses routes assez aisement de façon modulable pour 
organiser ses contrôleurs, toutes les méthodes autour et son application 
de façon assez sereine.<br>
Pour gérer ses routes, on utilise <strong>resource</strong> qui va créér toutes 
les routes pour faire une application <strong>CRUD(Create-Read-Update-Delete)
</strong>.
</p>

<h3>Création d'une application de gestion des livres</h3>
<p>
On veut afficher un livre, ajouter un formulaire d'ajout, ajouter un
livre, editer un livre, supprimer un livre. <br>
On crée le contrôleur :<br>
<strong>php artisan make:controller BookController --resource</strong><br>
Dans App\Http\Controllers\BookController.php<br>
<img src="{{ asset('images/laravel_chap26_image1.jpg') }}" style="height: 370px;"><br>
Dans routes\web.php<br>
<img src="{{ asset('images/laravel_chap26_image2.jpg') }}"><br>
 On affiche les routes : <br>
<strong>php artisan route:list</strong><br>
<img src="{{ asset('images/laravel_chap26_image3.jpg') }}" style="width: 90%;"><br>
Si on change l'URI dans web.php<br>
<img src="{{ asset('images/laravel_chap26_image4.jpg') }}"><br>
<strong>php artisan route:list</strong><br>
<img src="{{ asset('images/laravel_chap26_image5.jpg') }}" style="width: 90%;"><br>
On peut sélectionner les routes dont on a besoin, par exemple on 
ne veut pas les routes edit, update et destroy.<br>
Dans routes\web.php<br>
<img src="{{ asset('images/laravel_chap26_image6.jpg') }}"><br>
<strong>php artisan route:list</strong><br>
<img src="{{ asset('images/laravel_chap26_image7.jpg') }}" style="width: 90%;"><br>
A la place de la fonction except(), on peut utiliser la fonction 
contraire only().<br>
Dans routes\web.php<br>
<img src="{{ asset('images/laravel_chap26_image8.jpg') }}"><br>
<strong>php artisan route:list</strong><br>
<img src="{{ asset('images/laravel_chap26_image9.jpg') }}" style="width: 90%;"><br>
On peut gerer les routes suivant les middlewares.<br>
Dans routes\web.php<br>
<img src="{{ asset('images/laravel_chap26_image10.jpg') }}"><br>
On aura le middleware <strong>auth</strong> pour toutes les routes 
de BookController en plus du middleware web.<br>
Dans routes\web.php<br>
<img src="{{ asset('images/laravel_chap26_image11.jpg') }}"><br>
les routes de BookController seront affectées par le middleware 
auth et les routes de AdminController par le middleware admin mais 
puisqu'ils sont définis à l'intérieur du middleware auth, les routes 
de AdminController auront également le middleware auth.<br>
<strong>php artisan make:controller AdminController --resource</strong><br>
on fait ensuite : <strong>php artisan route:list</strong><br>
On peut modifier le prefixe pour <strong>gestion/book</strong> et 
<strong>gestion/admin</strong>
Dans routes\web.php<br>
<img src="{{ asset('images/laravel_chap26_image12.jpg') }}"><br>
<strong>php artisan route:list</strong><br>
<img src="{{ asset('images/laravel_chap26_image13.jpg') }}"><br>
<img src="{{ asset('images/laravel_chap26_image14.jpg') }}"><br>
La route admin bénéficie du préfixe <strong>gestion</strong> 
puisqu'elle est à l'intérieur de <strong>route::group</strong>.<br>
Pourque la route admin ne bénéficie pas du préfixe <strong>gestion</strong>, 
on la fait sortir de route::group().<br>
Dans Controllers, on crée le dossier <strong>Book</strong> à l'intérieur duquel 
on place BookController.<br>
Dans BookController<br>
<img src="{{ asset('images/laravel_chap26_image15.jpg') }}"><br>
on ajoute dans BookController et dans AdminController<br>
<strong>use App\Http\Controllers\Controller;</strong><br>
Dans routes\web.php<br>
<img src="{{ asset('images/laravel_chap26_image16.jpg') }}"><br>
On veut changer le nom des routes en gestion.book.index, gestion.book.create, 
gestion.book.store, etc.<br>
Dans routes\web.php<br>
<img src="{{ asset('images/laravel_chap26_image17.jpg') }}"><br>
<strong>php artisan route:list</strong><br>
<img src="{{ asset('images/laravel_chap26_image18.jpg') }}"><br>
Dans App\Providers\RouteServiceProvider.php, on a une fonction <strong>boot</strong> 
où on a défini le préfixe, le middleware, le namespace, le group, etc.<br>
<img src="{{ asset('images/laravel_chap26_image19.jpg') }}"><br>
Dans le dossier routes, on crée le dossier book dans lequel on crée le fichier <strong>web.php</strong>.<br>
Dans routes/book/web.php<br>
<img src="{{ asset('images/laravel_chap26_image20.jpg') }}"><br>
On fait <strong>php artisan route:list</strong>, tout fonctionne bien. 
</p>


<div>
    <a href="{{ route('chap25') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre25: Les composants Blade</a>
    <a href="" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre27: HTTP client</a>
</div>

</div>
@endsection
