@extends('layouts.app')
@section('title','Laravelpower | Upload de fichiers')
@section('content')
<div class="p-2">
      <h1>Laravel8 Upload de fichiers</h1>
  
<p>
Laravel met à notre disposition un système de fichier 
tres puissant.<br>
Dans config/filesystems.php, on a 3 disques virtuels :<br>
<strong><pre>
        'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],
</pre></strong>
</p>

<p>
Pour le disque local, le chemin d’accès aux fichiers est: storage/app<br>
<strong><pre>
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],    
</pre></strong>
</p>

<p>
Pour le disque public, le chemin pour partager les fichiers avec l’extérieur est: storage/app/public<br>
<strong><pre>
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ],
</pre></strong>
 s3 est le système de stockage de fichiers qui utilise le cloud d’Amazon.
</p>

<p>
Pour partager des fichiers avec le reste du monde, on se sert du <strong>disque public</strong>. 
Les fichiers dans <strong>storage/app</strong> ne sont pas partagés avec le public.<br>
<strong>php artisan storage : link</strong> est une commande artisan qui permet de créer un reflet du 
dossier storage dans le dossier public.
</p>


<p>
Dans form.blade.php<br>
<img src="{{ asset('images/laravel_chap17_image1.jpg') }}"><br>
<br>On travaille sur le disque local.
</p>

<p>
Dans PostController.php<br>
<img src="{{ asset('images/laravel_chap17_image2.jpg') }}">
<br>On clique sur creer et dans storage/app, on a le fichier example.txt avec comme contenu : 
Mon contenu de test.
</p>

<p>
Pour récupérer une image,<br>
<strong><em>storage::disk('local')->put('avatars',$request->file('avatar'));</em></strong>
<br>On enregistre une image et on clique sur créer.<br>
Dans storage/app, j’ai un dossier avatars avec une image.
</p>

<p>
<strong>
<pre>
$name = storage::disk('local')->put('avatars',$request->avatar);
dd(storage::get($name));
</pre>
</strong>
<br>Cette fonction retourne l’image sur la page 
web et l'enregistre dans le dossier avatars.
</p>

<p>
<strong>
<pre>
$name = storage::disk('local')->put('avatars',$request->avatar);
       dd($name);
</pre>
</strong>
<br>Renvoie le chemin du fichier.
</p>

<p>
<strong>
<pre>
$name = storage::disk('local')->put('avatars',$request->avatar);
       return storage::download($name);

</pre>
</strong>
<br>Télécharge le fichier enregistré.
</p>

<p>
<strong>
<pre>
$name = storage::disk('local')->put('avatars',$request->avatar);
       dd(storage::url($name));
</pre>
</strong>
<br>permet de récupérer le chemin relatif du fichier.
</p>

<p>
<strong>
<pre>
    $name = storage::disk('local')->put('avatars',$request->avatar);
    dd(storage::size($name));
</pre>
</strong>
<br>permet de récupérer la taille du fichier
<strong>
<pre>
    $name = storage::disk('local')->put('avatars',$request->avatar);
dd(storage::path($name));
</pre>
</strong>
<br>permet de récupérer le chemin total du fichier
<strong>
<pre>
    $name = storage::disk('local')->put('avatars',$request->avatar);
dd(storage::put('avatarstest',$request->avatar));
</pre>
</strong>
<br>permet de récupérer le chemin du fichier dans le dossier avatarstest
<br>On peut ne pas utiliser la façade Storage. On fait une request 
avatar et on stocke dans avatarstest2.
<strong>
<pre>
dd($request->file('avatar')->store('avatarstest2'));
</pre>
</strong>
<br>Renvoie le chemin dans avatarstest2.
<br>Pour personnaliser le nom du fichier, on utilise la fonction storeAs()
<strong>
<pre>
dd($request->file('avatar')->storeAs('avatarstest2','test.jpg'));
</pre>
</strong>
<br>Renvoie le chemin dans <strong>avatarstest2/test.jpg</strong>.
<br>On va créer une variable $filename comprenant un identifiant 
pour chaque fichier ainsi que son extension.
<strong>
<pre>
$filename = time(). '.'.$request->avatar->extension();
       dd($request->file('avatar')->storeAs(
        'avatartest3',
        $filename
       )
   );

</pre>
</strong>
<br>Renvoie le chemin du fichier : 
<strong>"avatartest3/1680720388.jpg"</strong>
</p>

<p>
A présent, on va enregistrer une image pour chacun de nos posts.<br>
Dans PostController.php<br>
<img src="{{ asset('images/laravel_chap17_image3.jpg') }}">
</p>

<p>
Le code précédent de PostCcontroller nous permettra automatiquement d’enregistrer l’id 
de la recette pour laquelle est liée l’image en base de données.
</p>

<p>
Sur http://laravelexperience.test/posts/create<br>
<img src="{{ asset('images/laravel_chap17_image4.jpg') }}">
<br>Il renvoie : <strong>Post créé!</strong>
</p>

<p>
Au niveau de storage/app/public, on a le dossier avatars contenant l’image enregistrée.<br>
Dans la BD, la table images, on a un nouvel enregistrement, idem pour la table posts.
</p>

<p>
Dans article.blade.php<br>
<img src="{{ asset('images/laravel_chap17_image5.jpg') }}">
</p>

<p>
La commande <strong>php artisan storage:link</strong> crée un lien entre public\storage et storage\app\public. 
A présent le dossier avatars est disponible depuis public.
</p> 

<div>
    <a href="{{ route('chap16') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre16: Validation de formulaire</a>
    <a href="{{ route('chap18') }}" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Chapitre18: Authentification</a>
</div>

</div>
@endsection
