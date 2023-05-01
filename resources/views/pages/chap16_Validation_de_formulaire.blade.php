@extends('layouts.app')
@section('title','Laravelpower | Validation de formulaire')
@section('content')
<div class="p-2">
      <h1>Laravel8 Validation de formulaire</h1>
  
<p>
On définit les routes dans web.php<br>
<em><strong>
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');<br>
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');<br>
</strong></em>
On crée le controller  et on définit la validation du formulaire
</p>


<p>
Dans PostController.php<br>
<img src="{{ asset('images/laravel_chap16_image1.jpg') }}" style="height: 380px;">
</p>


<p> 
Dans form.blade.php<br>
<br><img src="{{ asset('images/laravel_chap16_image2.jpg') }}">
</p>

<!-- <p> 
Pour avoir des messages d’erreur en français, dans config/app.php, on modifie 'locale' => 'fr',<br>
Dans resources/lang, on crée le dossier fr. <br>
On copie à l’intérieur les fichiers du dossier en (auth.php, pagination.php, password.php, validation.php).<br>
Dans validation.php, on remplace : <br>
<em>
'required' => 'The :attribute field is required.',<br>
</em>
Par
<em>
'required' => 'Ce champ est requis.',<br>
</em>
On remplace aussi : 
<em>
'min' => [
        'string' => 'The :attribute must be at least :min characters.',<br>
        </em>
par
<em>
'string' => 'Ce champ doit avoir au moins :min caractères.',<br>
</em>
</p>

<p>
Pour créer nos propres règles de validation<br>
<em><strong>
php artisan make:rule Uppercase
</strong></em><br>
Dans app\Rules, on a le fichier Uppercase.php<br>
<br><img src="{{ asset('images/laravel_chap16_image3.jpg') }}">
</p>


<p>
Sur http://laravelexperience.test/posts/create
<br><img src="{{ asset('images/laravel_chap16_image4.jpg') }}">
</p> -->

<div>
    <a href="{{ route('chap15') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre15: Les requêtes HTTP</a>
    <a href="{{ route('chap17') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre17: Upload de fichiers</a>
</div>

</div>
@endsection