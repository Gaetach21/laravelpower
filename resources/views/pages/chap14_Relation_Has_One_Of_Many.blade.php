<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Relation Has One Of Many</title>
    </head>
    <body>
      <h1>Laravel8 Relation Has One Of Many</h1>
  
<p>
On tape sur la console la commande <strong>composer update</strong> 
pour mettre à jour la version de notre framework Laravel.
</p>

<p>
Dans le cas des posts, on peut grace à cette relation récupérer le 
premier et le dernier commentaire.
</p>


<p>
Dans la base de données, dans la table commentaire, on crée 2 nouveaux 
commentaires<br>
<img src="{{ asset('images/laravel_chap14_image1.jpg') }}">
</p>


<p>
Dans Post.php<br>
<img src="{{ asset('images/laravel_chap14_image2.jpg') }}">
</p>


<p>
Dans <strong>article.blade.php</strong><br>
<img src="{{ asset('images/laravel_chap14_image3.jpg') }}">
</p>

<p> 
Sur la page d'accueil, on clique sur "Mon super titre" : 
<br><img src="{{ asset('images/laravel_chap14_image4.jpg') }}"><br> 
</p>


<p>
On peut trier l’id à la place de content.
Dans <strong>article.blade.php</strong><br>
<img src="{{ asset('images/laravel_chap14_image5.jpg') }}">
</p>

<p> 
Sur la page d'accueil, on clique sur "Mon super titre" : 
<br><img src="{{ asset('images/laravel_chap14_image6.jpg') }}"><br> 
</p>

    </body>
</html>
