@extends('layouts.app')
@section('title','Laravelpower | les migrations')
@section('content')
<div class="p-2">
      <h1>Laravel8 les migrations</h1>
  
<p>
Pour créer une base de données en utilisant Laragon, on clique sur <strong>database</strong>, HeidiSQL s'ouvre, 
on entre le nom de la base de données. Par exemple <strong>laravelexperience</strong>.
</p>
  
<p>
  A la racine du projet, on a le fichier <strong>.env</strong>. Dans celui-ci, on a les informations
  relatives à la connexion à la base de données. Par exemple <strong>laravelexperience</strong>.<pre ><strong><em>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelexperience
DB_USERNAME=root
DB_PASSWORD="123abc456"</em></strong></pre>
</p>
  
  <p>
    Pour créer une table, laravel vient avec un système de migrations.
  </p>

  <p>
   Pour créer une migration: <em><strong>php artisan make:migration nom_migration</strong></em>
  </p>

  <p>
   Pour créer un modèle: <em><strong>php artisan make:model Post -m</strong></em>
  </p>
  

  <p>Il crée dans le dossier app/models le fichier Post.php et une migration qui sera directement liée à ce modèle.<br>
  	<em>Model created successfully.<br>
Created Migration: 2022_09_19_192257_create_posts_table
</em></p>

 <p>Dans C:\laragon\www\laravelexperience\database\migrations\2023_02_28_220252_create_posts_table.php : <br>
		<strong><em>public function up()<br>
    {<br>
        Schema::create('recipes', function (Blueprint $table) {<br>
            $table->id();<br>
            $table->string('title');<br>
            $table->mediumText('content');<br>
            $table->timestamps();<br>
        });<br>
    }<br>
</em></strong></p>

	<p>
		Dans App\Models\Recipe.php<pre><em><strong>
    use HasFactory;
    protected $fillable = ['title','content'];</strong></em></pre>
	</p>

  <p>
    On tape ensuite la commande suivante sur le terminal : <strong><em>php artisan migrate</em></strong><br>.
    il va migrer tous nos fichiers (il va prendre chacun de nos fichiers et mettre à jour notre base de données en créant les tables suivant les champs indiqués et les noms donnés).
  </p>
  <p>Sous Heidi SQL, on actualise notre base de données. On retrouve les différentes tables que l'on a migrées.</p>

<div>
    <a href="{{ route('chap5') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre5: Compiler les assets</a>
    <a href="{{ route('chap7') }}" class="bg-primary p-2 text-white mx-5" style="text-decoration: none;">Chapitre7: Les factories</a>
</div>

</div>
@endsection
