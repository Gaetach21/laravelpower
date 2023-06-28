@extends('layouts.app')
@section('title','Laravelpower | Upload de plusieurs images')
@section('content')
<div class="p-2">
      <h1>Tutoriel 32 : Upload de plusieurs images</h1>


<h3>Création des modèles et des migrations</h3>
<p>
On crée un modèle Product et un contrôleur associé : <br>
<strong>php artisan make:model Product -mc</strong><br>
Dans Product.php<br>
<img src="{{ asset('images/laravel_chap32_image1.jpg') }}"><br>
Dans create_products_table.php<br>
<img src="{{ asset('images/laravel_chap32_image2.jpg') }}"><br>
On crée un modèle ImageProduct : <br>
<strong>php artisan make:model ImageProduct -m</strong><br>
Dans ImageProduct.php<br>
<img src="{{ asset('images/laravel_chap32_image3.jpg') }}"><br>
Dans create_images_products_table.php<br>
<img src="{{ asset('images/laravel_chap32_image4.jpg') }}"><br>
On migre nos tables dans la base de données.<br>
<strong>php artisan migrate</strong><br>
</p>

<h3>Création des vues</h3>
<p>
Dans resources/views/pages, on crée le fichier images.blade.php<br>
<img src="{{ asset('images/laravel_chap32_image5.jpg') }}" width="90%"><br>
Dans routes/web.php<br>
<img src="{{ asset('images/laravel_chap32_image6.jpg') }}"><br>
Dans ProductController.php<br>
<img src="{{ asset('images/laravel_chap32_image7.jpg') }}"><br>
Dans navbar.php<br>
<img src="{{ asset('images/laravel_chap32_image8.jpg') }}"><br>
Dans Product.php<br>
<img src="{{ asset('images/laravel_chap32_image9.jpg') }}"><br>
Dans resources/views/pages/images.blade.php<br>
<img src="{{ asset('images/laravel_chap32_image10.jpg') }}" width="90%"><br>
Dans routes/web.php<br>
<img src="{{ asset('images/laravel_chap32_image11.jpg') }}"><br>
Dans ProductController.php<br>
<img src="{{ asset('images/laravel_chap32_image12.jpg') }}"><br>
Dans resources/views/pages/images.blade.php<br>
<img src="{{ asset('images/laravel_chap32_image13.jpg') }}"><br>
Dans routes/web.php<br>
<img src="{{ asset('images/laravel_chap32_image14.jpg') }}" width="90%"><br>
Dans ProductController.php<br>
<img src="{{ asset('images/laravel_chap32_image15.jpg') }}"><br>
Dans resources/views/pages/image.blade.php<br>
<img src="{{ asset('images/laravel_chap32_image16.jpg') }}"><br>
</p>



<div>
    <a href="{{ route('chap31') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Tutoriel31: Un système de commentaires</a>
    <a href="{{ route('chap33') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Tutoriel33: Créer un plan du site</a>
</div>

</div>
@endsection
