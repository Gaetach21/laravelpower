@extends('layouts.app')
@section('title','Laravelpower | Relation One To Many(Polymorphic)')
@section('content')
<div class="p-2">
      <h1>Laravel8 Relation One To Many(Polymorphic)</h1>
  
<p>
On dispose d'un modèle <strong>Post</strong> avec des commentaires. On 
veut ajouter un modèle <strong>Vidéo</strong> et on veut que les vidéos tout 
comme les posts possèdent des commentaires. les posts et les vidéos ne partagent 
pas les memes commentaires.
</p>

<p>La
table posts contient les champs id, title, content, created_at et 
updated_at.<br>
La
table comments contient les champs id, content, post_id, created_at et 
updated_at.<br>
La
table videos contient les champs id, title, url, created_at et 
updated_at.<br>
La
table video_comments contient les champs id, content, video_id, created_at et 
updated_at.
</p>

<p>Grace aux relations polymorphiques, on fusionne la table comments et la table 
video_comments.
La table comments contient les champs id, content, commentable_id et 
commentable_type.<br>
La
table videos contient les champs id, title, url, created_at et 
updated_at.<br>
</p>

<p>
Pour supprimer la table comments : 
<em><strong>php artisan make:migration remove_comments_table</strong></em><br>
Dans Post.php, on commente la relation avec la fonction comments.<br>
Dans comments.php, on commente la relation avec la fonction post.<br>
Dans article.blade.php, on commente la boucle forelse.<br>
</p>

<!-- <p>
Dans 2023_03_13_191439_remove_comments_table.php<br>
<img src="{{ asset('images/laravel_chap12_image1.jpg') }}"><br>
<em><strong>php artisan migrate</strong></em><br>
Dans la base de données, la table comments n'existe plus!!!
</p>
  
<p>
Pour mettre en place notre relation polymorphique, on crée le modele <strong>Video</strong>. On tape 
<em><strong>php artisan make:model Video -m</strong></em><br>
Dans database\migrations\ xxxx_create_videos_table<br>
<img src="{{ asset('images/laravel_chap12_image2.jpg') }}"><br>
On tape la commande :
<em><strong>php artisan migrate</strong></em><br>
On va recréer la table comments mais avant on supprime <strong>comments.php</strong> 
et <strong>create_comments_table.php</strong>.<br>
</p>

<p>
On crée le modele <strong>Comment</strong>. On tape 
<em><strong>php artisan make:model Comment -m</strong></em><br>
Dans database\migrations\ xxxx_create_comments_table<br>
<img src="{{ asset('images/laravel_chap12_image3.jpg') }}"><br>
On tape la commande :
<em><strong>php artisan migrate</strong></em><br>
</p>

<p>
Dans Comment.php<br>
<img src="{{ asset('images/laravel_chap12_image4.jpg') }}">
</p>

<p>
Dans Post.php<br>
<img src="{{ asset('images/laravel_chap12_image5.jpg') }}">
</p>

<p>
Dans Video.php<br>
<img src="{{ asset('images/laravel_chap12_image6.jpg') }}">
</p>

<p>
Dans la base de données, dans la table videos, on insère une ligne<br>
<img src="{{ asset('images/laravel_chap12_image7.jpg') }}">
</p>

<p>
Dans routes/web.php<br>
<img src="{{ asset('images/laravel_chap12_image8.jpg') }}">
</p>

<p>
Dans PostController.php<br>
<img src="{{ asset('images/laravel_chap12_image9.jpg') }}">
</p>

<p>
Dans Comment.php<br>
<img src="{{ asset('images/laravel_chap12_image10.jpg') }}">
</p>

<p>
Dans <strong>article.blade.php</strong>, on décommente toutes 
les lignes commentées. Pour afficher les commentaires des posts, 
on va sur la page d'accueil et on clique sur le post <strong>mon super 
titre</strong> par exemple.<br>
<img src="{{ asset('images/laravel_chap12_image11.jpg') }}">
</p>


<p>
Dans PostController.php : <br><img src="{{ asset('images/laravel_chap12_image12.jpg') }}"><br> 
Dans article.blade.php : <br><img src="{{ asset('images/laravel_chap12_image13.jpg') }}"><br> 
Sur la page d'accueil : <br><img src="{{ asset('images/laravel_chap12_image14.jpg') }}"><br> 
</p> -->


<div>
    <a href="{{ route('chap11') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre11: Relation Many to Many</a>
    <a href="{{ route('chap13') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre13: Relation has one Through</a>
</div>

</div>
@endsection
