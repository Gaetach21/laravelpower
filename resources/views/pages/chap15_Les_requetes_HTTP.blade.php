<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Les requetes HTTP</title>
    </head>
    <body>
      <h1>Laravel8 Les requetes HTTP</h1>
  
<p>
Laravel permet de récupérer les requêtes  via l’objet request
 (il représente ce qui a été envoyé par le client).<br>
 On va faire des traitements sur l’objet request.
</p>


<p>
Dans PostController.php<br>
<img src="{{ asset('images/laravel_chap15_image1.jpg') }}"><br>
Il permet de récupérer la valeur du titre au niveau de la page.
</p>


<p> 
Sur la page http://laravelexperience.test/posts/create : 
<br><img src="{{ asset('images/laravel_chap15_image2.jpg') }}"><br> 
</p>

<p> 
Sur la page http://laravelexperience.test/posts/create: 
<br><img src="{{ asset('images/laravel_chap15_image3.jpg') }}"><br> 
</p>

<p>On peut récupérer le path en faisant dd($request->path());<br>
Dans PostController.php<br>
<img src="{{ asset('images/laravel_chap15_image4.jpg') }}"><br>
Sur la page http://laravelexperience.test/posts/create, on clique sur créer :
<br><img src="{{ asset('images/laravel_chap15_image5.jpg') }}">
</p>

<p>
On peut vérifier le type d’URL exemple :dd($request->is('posts/*'));<br>
Sur la page http://laravelexperience.test/posts/create, on clique sur créer :
<br><img src="{{ asset('images/laravel_chap15_image6.jpg') }}"><br>
Ca nous renvoie <strong>true</strong> car l'url est <strong>posts/create</strong>
</p>

<p>
on peut vérifier le nom de la route :
dd($request->routeIs('posts.store'));<br>
Sur la page http://laravelexperience.test/posts/create, on clique sur créer :
<br><img src="{{ asset('images/laravel_chap15_image7.jpg') }}"><br>
Ca nous renvoie <strong>true</strong>
</p>

<p>
on peut récupérer l’URL :
dd($request->url());
<br><img src="{{ asset('images/laravel_chap15_image8.jpg') }}"><br>
</p>

<p>
on peut récupérer le fullUrl :
dd($request->fullUrl());
<br><img src="{{ asset('images/laravel_chap15_image8.jpg') }}"><br>
</p>

<p>
On peut renvoyer la méthode sur laquelle on poste notre formulaire : 
dd($request->method());
<br><img src="{{ asset('images/laravel_chap15_image9.jpg') }}"><br>
</p>

<p>
On peut récupérer toutes les valeurs des inputs : 
dd($request->all());
<br><img src="{{ asset('images/laravel_chap15_image10.jpg') }}"><br>
</p>

<p>
On peut récupérer la valeur du champ name 
dd($request->input('title'));
<br><img src="{{ asset('images/laravel_chap15_image11.jpg') }}"><br>
</p>

<p>
On peut récupérer uniquement la valeur de certains inputs
dd($request->only(['title','content']));
<br><img src="{{ asset('images/laravel_chap15_image12.jpg') }}"><br>
</p>

<p>
On peut récupérer tout sauf la valeur du token
dd($request->except(['_token']));
<br><img src="{{ asset('images/laravel_chap15_image12.jpg') }}"><br>
</p>

<p>
Dans form.blade.php:
<br><img src="{{ asset('images/laravel_chap15_image13.jpg') }}"><br>
Dans PostController.php
<br><img src="{{ asset('images/laravel_chap15_image14.jpg') }}"><br>
Sur la page http://laravelexperience.test/posts/create: 
<br><img src="{{ asset('images/laravel_chap15_image16.jpg') }}"><br> 

Dans PostController.php
<br><img src="{{ asset('images/laravel_chap15_image17.jpg') }}"><br>
Sur la page http://laravelexperience.test/posts/create: 
<br><img src="{{ asset('images/laravel_chap15_image18.jpg') }}"><br> 
</p>

    </body>
</html>
