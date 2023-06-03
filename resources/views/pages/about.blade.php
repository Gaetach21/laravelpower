@extends('layouts.app')
@section('title','Laravelpower | A propos de laravelpower')
@section('content')
<h1>A propos de laravelpower</h1>
   <p>
  <center><img src="{{ asset('images/laravel.png') }}" alt="le logo de Laravel"  /></center>
  </p>
  <h3>Que représente Laravelpower?</h3>
  <p>
    C’est un site web pour apprendre et maitriser le framework php <strong>LARAVEL</strong>. 
  </p>
  <h3>Quels sont les atouts de Laravelpower?</h3>
  <p>
    Il dispose de multiples fonctionnalités :
    <ul>
      <li>un système d’authentification personnalisé avec <strong>LARAVEL BREEZE</strong> incluant la validation en français des données des formulaires d’inscription et de connexion;</li>
      <li>un système de  <strong>NEWSLETTER</strong></li>
      <li>un système de gestion des articles (CRUD) et des commentaires protégé par les middlewares <strong>AUTH</strong> et <strong>ADMIN</strong>;</li>
      <li>un système de <strong>SOFT DELETES</strong> pour empêcher la suppression définitive des articles et des commentaires;</li>
      <li>la génération d’évènements à la création de chaque article;</li>
      <li>une page de contact avec validation des données et l’envoi d’un mail de confirmation à l’administrateur du site;</li>
      <li>l’envoi d’une notification par mail à l’utilisateur enregistré;</li>
      <li>un système de pagination;</li>
      <li>l’enregistrement des données(les utilisateurs, les articles, les images, les contacts, etc.) dans une base de données MySQL</li>
      <li>des cours théoriques et pratiques sur LARAVEL;</li>
      <li>le téléchargement des logiciels indispensables pour le développeur web;</li>
    </ul>
  </p>
  <h3>Quelles sont les ambitions de Larapower</h3>
  <p>
    Larapower vise à promouvoir l'utilisation de <strong>LARAVEL</strong> comme framework incontournable et pratique pour créer des sites dynamiques et multifonctions. Pour facilement manier ce framework, nous mettons à votre disposition des <a href="{{ route('courses') }}">cours</a> que vous pouvez suivre à votre rythme.
  </p>
  <h3>Comment nous contacter?</h3>
  <p>
    Vous pouvez nous joindre en cliquant sur <a href="{{ route('contact.create') }}">contact</a> et en remplissant vos coordonnées.
  </p>


@endsection

