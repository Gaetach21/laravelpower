<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Validation de formulaire</title>
    </head>
    <body>
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
<img src="{{ asset('images/laravel_chap16_image1.jpg') }}">
</p>


<p> 
Dans form.blade.php<br>
<br><img src="{{ asset('images/laravel_chap16_image2.jpg') }}">
</p>

<p> 
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
</p>


    </body>
</html>
