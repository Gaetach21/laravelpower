@extends('layouts.app')
@section('title','Laravelpower | Les composants Blade')
@section('content')
<div class="p-2">
      <h1>Laravel8 Les composants Blade</h1>

      <h3>Introduction</h3>
<p>
Les composants Blade vont nous permettre de manipuler les données pour 
éviter les répétitions et aussi pour une question d'organisation et de lisibilité.
</p>

<h3>Création d'un composant Blade</h3>
<p>
Pour créer un composant Blade : <br>
<strong>php artisan make:component NewFirstComponent</strong><br>
Le composant va être créé automatiquement dans App\View\Components. <br>
<strong>NewFirstComponent</strong> est un sous-contrôleur qui va piloter 
notre composant.<br>
Dans App\View\Components\NewFirstComponent<br>
<img src="{{ asset('images/laravel_chap25_image1.jpg') }}"><br>
Dans resources\views\components\new-first-component<br>
<img src="{{ asset('images/laravel_chap25_image2.jpg') }}"><br>
On veut l'afficher dans la vue contenant les articles de notre site. 
A chaque article, on veut afficher le composant.Dans articles.blade.php
<img src="{{ asset('images/laravel_chap25_image3.jpg') }}"><br>
 Sur http://laravelpower.test/Mesarticles
<img src="{{ asset('images/laravel_chap25_image4.jpg') }}"><br>
</p>

 <h3>Création d'une variable statique au composant</h3>
<p>
On veut passer un nom(une variable statique) à notre composant.<br>
Dans App\View\Components\NewFirstComponent<br>
<img src="{{ asset('images/laravel_chap25_image5.jpg') }}"><br> 
Dans resources\views\components\new-first-component<br>
<img src="{{ asset('images/laravel_chap25_image6.jpg') }}"><br>
Dans articles.blade.php<br>
<img src="{{ asset('images/laravel_chap25_image7.jpg') }}"><br>
Sur http://laravelpower.test/Mesarticles
<img src="{{ asset('images/laravel_chap25_image8.jpg') }}"><br>
</p>

<h3>Création d'une variable dynamique au composant</h3>
<p>
On veut passer quelque chose de dynamique à notre composant.<br>
Dans articles.blade.php<br>
<img src="{{ asset('images/laravel_chap25_image9.jpg') }}"><br>
Dans App\View\Components\NewFirstComponent<br>
<img src="{{ asset('images/laravel_chap25_image10.jpg') }}"><br> 
Dans resources\views\components\new-first-component<br>
<img src="{{ asset('images/laravel_chap25_image11.jpg') }}"><br>
Sur http://laravelpower.test/Mesarticles
<img src="{{ asset('images/laravel_chap25_image12.jpg') }}"><br>
</p>

<h3>Insertion du style au composant</h3>
<p>
Pour rajouter du style par exemple la couleur verte : <br>
Dans resources\views\components\new-first-component<br>
<img src="{{ asset('images/laravel_chap25_image13.jpg') }}"><br>
Dans articles.blade.php<br>
<img src="{{ asset('images/laravel_chap25_image14.jpg') }}"><br> 
Sur http://laravelpower.test/Mesarticles
<img src="{{ asset('images/laravel_chap25_image15.jpg') }}"><br>
Pour que le texte vert soit en italique et souligné : <br>
Dans resources\views\components\new-first-component<br>
<img src="{{ asset('images/laravel_chap25_image16.jpg') }}"><br>
Sur http://laravelpower.test/Mesarticles
<img src="{{ asset('images/laravel_chap25_image17.jpg') }}"><br>
</p>

<h3>Insertion des tags au composant</h3>
<p>
Pour insérer des tags : <br>
Dans App\View\Components\NewFirstComponent<br>
<img src="{{ asset('images/laravel_chap25_image18.jpg') }}"><br> 
Dans resources\views\components\new-first-component<br>
<img src="{{ asset('images/laravel_chap25_image19.jpg') }}"><br>
Sur http://laravelpower.test/Mesarticles
<img src="{{ asset('images/laravel_chap25_image20.jpg') }}"><br>
</p>

<h3>Insertion des slots au composant</h3>
<p>
Pour insérer des slots : <br>
Dans articles.blade.php<br>
<img src="{{ asset('images/laravel_chap25_image21.jpg') }}"><br>
Dans resources\views\components\new-first-component<br>
<img src="{{ asset('images/laravel_chap25_image22.jpg') }}"><br>
Sur http://laravelpower.test/Mesarticles
<img src="{{ asset('images/laravel_chap25_image23.jpg') }}"><br>
</p>

<h3>Composants anonymes</h3>
<p>
On peut créer des composants anonymes c'est-à-dire 
des composants qui n'ont pas de contrôleur. <br>
<strong>php artisan make:component Alert --inline</strong><br>
Dans App\View\Components\Alert.php<br>
<img src="{{ asset('images/laravel_chap25_image24.jpg') }}"><br> 
Dans articles.blade.php<br>
<img src="{{ asset('images/laravel_chap25_image25.jpg') }}"><br>
Sur http://laravelpower.test/Mesarticles
<img src="{{ asset('images/laravel_chap25_image26.jpg') }}"><br>
On a également des composants dynamiques. On va les créer 
manuellement.<br>
Dans resources\views\components, on crée la vue 
test.blade.php<br>
<img src="{{ asset('images/laravel_chap25_image27.jpg') }}"><br>
Dans articles.blade.php<br>
<img src="{{ asset('images/laravel_chap25_image28.jpg') }}"><br>
Sur http://laravelpower.test/Mesarticles<br>
<img src="{{ asset('images/laravel_chap25_image29.jpg') }}"><br>
</p> 


<div>
    <a href="{{ route('chap24') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre24: Les évènements</a>
    <a href="{{ route('chap26') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre26: Les routes(notions avancées)</a>
</div>

</div>
@endsection
