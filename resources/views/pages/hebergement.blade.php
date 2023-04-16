@extends('layouts.app')
@section('title','Laravelpower | Hebergement web')
@section('content')
<h1>Hebergement web</h1>
<p>Pour fonctionner, tout site internet s’appuie donc sur un serveur.
En général on loue un serveur auprès d’un hébergeur, mais il est tout à fait possible de créer 
son propre serveur chez soi. Cela demande en revanche des compétences techniques.</p>
<figure>
      <img src="{{ asset('images/hebergement_img1.png') }}" alt="#" style="width: 600px;" />
      <figcaption><center>Fonctionnement d'un site internet</center></figcaption>
</figure>
<p>Le serveur stocke les fichiers qui composent le site web et exécute le code contenu dans ces fichiers. 
Il génère la page au format HTML, lisible par le navigateur web (Google Chrome, Mozilla Firefox, etc.).</p>
<p>Pour créer votre site web, vous aurez donc besoin d’un hébergement web.<br>
Deux solutions s’offrent à vous :<br>
<ul>
  <li>Créer un environnement en local</li>
L’idée est de simuler un serveur sur votre ordinateur grâce à des logiciels comme MAMP ou encore Local by Flywheel. C’est gratuit, mais cela demande un peu de configuration et votre site ne sera pas en ligne, il ne sera accessible que sur votre machine.
  <li>Louer un serveur chez un hébergeur</li>
En vérité, il s’agit souvent de louer un espace sur un serveur et non un serveur entier. Votre site pourra ainsi être accessible au public via internet, mais ce n’est pas gratuit.
</ul>

@endsection

