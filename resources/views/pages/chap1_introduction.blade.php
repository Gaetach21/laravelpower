@extends('layouts.app')
@section('title','Laravelpower | Laravel Introduction')
@section('content')
<div class="p-2">
     <h1>Laravel8 Introduction</h1>
  
  <p>
  <h3>Prérequis</h3>
<ul>
    <li>Maitriser les langages HTML, CSS</li>
    <li>Maitriser le langage SQL</li>
    <li>Maitriser la programmation orientée objet en PHP</li>
    </ul>
  </p>
  
  <p>
<h3>Avantages de Laravel</h3>
<ul>
  <li>Documentation bien guidée</li>
  <li>Pléthore d'outils et de librairies pour construire des applications très complexes</li>
  </ul>
  </p>
  
      <p>
  <h3>Outils necessaires</h3>
Pour développer des applications Laravel, il faut disposer des outils suivants : <br>
<ul>
  <li>Le gestionnaire de dépendances <strong>Composer</strong></li>
  <li><strong>Laragon</strong></li>
  <li>Un navigateur web comme <strong>Mozilla Firefox</strong></li>
  <li>Un éditeur de code tel que <strong>Visual Studio Code</strong></li>
  <li>Le framework <strong>Laravel 8</strong></li>
  </ul>
  </p>

    <p>
  <h3>Installation d'un projet Laravel8</h3>
<ul>
  <li>Installer <strong>Laragon</strong></li>
  <li>Créer un projet Laravel, lui donner un nom et valider. Le projet se télécharge sur internet.</li>
  <li>Dans Laragon/www, on sélectionne notre projet Laravel et on l'ouvre sous Visual Studio.</li>
  </ul>
  </p>
  <div>
    <a href="{{ route('chap2') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Chapitre2: Routing de base</a>
  </div>

<!--     <p>
   <h3>Structure d'un projet Laravel</h3>
Un projet Laravel comporte plusieurs dossiers et fichiers : 
<ul>
  <li>le dossier <strong>App</strong> contient entre autres les modèles et les controleurs.</li>
  <li>le dossier <strong>Conf</strong> contient les fichiers de configuration de l'application.</li>
    <li>le dossier <strong>Database</strong> contient les factories, les migrations, les seeders.</li>
  <li>le dossier <strong>Public</strong> contient les fichiers images, css, js, etc.</li>
    <li>le dossier <strong>Resources</strong> contient entre autres les vues.</li>
  <li>le fichier <strong>.env</strong> contient les variables d'environnement.</li>
  </ul>
  </p> -->
</div>
@endsection

