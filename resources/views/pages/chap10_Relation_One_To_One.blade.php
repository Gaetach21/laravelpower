<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Relation one to one</title>
    </head>
    <body>
      <h1>Laravel8 Relation one to one</h1>
  
<p>
On a une table posts liée à notre modèle <strong>Post</strong>. La
table posts contient les champs id, title, content, created_at et 
updated_at.
</p>
<p>
On veut ajouter une image à chaque post. On va créer une table 
<strong>images</strong> avec les champs suivants : 
<em><strong>id path post_id created_at updated_at </strong></em>.<br>
Un post détient une et une seule image et une image 
appartient à un seul post.<br>
</p>
  
<p>On crée le modele <strong>Image</strong>. On tape 
<em><strong>php artisan make:model Image -m</strong></em><br>
Dans database\migrations\ xxxx_create_images_table<br>
<img src="{{ asset('images/laravel_chap10_image1.jpg') }}"><br>
On tape la commande :
<em><strong>php artisan migrate</strong></em><br>
On vérifie en base de données la table <strong>images</strong>.
</p>

<p>
Dans Post.php<br>
<img src="{{ asset('images/laravel_chap10_image2.jpg') }}">
</p>


<p>
Dans la base de données, on va créer une image dans la 
table images.<br>
Données - clic droit - insérer une ligne<br>
<img src="{{ asset('images/laravel_chap10_image3.jpg') }}"><br>
</p>

<p>
Dans <strong>article.blade.php</strong><br>
<img src="{{ asset('images/laravel_chap10_image4.jpg') }}"><br>
</p>

<p>
Sur la page d'accueil : <br>
<img src="{{ asset('images/laravel_chap10_image5.jpg') }}"><br>
<img src="{{ asset('images/laravel_chap10_image6.jpg') }}">
</p>


    </body>
</html>