@extends('layouts.app')
@section('title','Laravelpower | Toute la puissance de Laravel')
@section('content')
<h1>Laravelpower - Toute la puissance de Laravel</h1>
   <p>
  <center><img src="{{ asset('images/laravel_logo.png') }}" alt="le logo de Laravel"  /></center>
  </p>
  <p>Que vous soyez simple débutant, curieux ou passionnés du développement web,
  <strong>Laravelpower</strong> vous permet d'apprendre et de développer des compétences en
  utilisant <strong>Laravel</strong>.
    <strong>Laravel</strong> est un framework PHP qui propose des outils pour construire une application web. <strong>Laravel</strong> est si populaire parmi les développeurs de logiciels et les entreprises pour plusieurs raisons :  </p>
    <ul>
      <li>Laravel fournit un moteur de modèle de lame qui aide à créer des mises en page fascinantes en incorporant des fichiers CSS et JS. </li>
      <li>Artisan permet aux développeurs Web de créer leurs propres commandes et de gérer les fichiers de la manière la plus pratique.</li>
      <li>L’ORM éloquent aide les développeurs Web à interagir avec les bases de données sans utiliser le SQL.</li>
      <li>Laravel fournit une large gamme de bibliothèques qui permettent de créer des applications Web modulaires, rapides à répondre et efficaces.</li>
      <li>Avec l’architecture MVC, les développeurs de logiciels peuvent créer des applications complètes et bien structurées avec une logique et une présentation claires.</li>
      <li>Le système de migration de Laravel étend la structure de la base de données des applications sans avoir besoin de la recréer chaque fois que les développeurs Web introduisent des changements dans sa structure.</li>
      <li>Le framework Laravel facilite les tests de code en fournissant des outils de test unitaire.</li>
      <li>Le framework Laravel dispose d’un certain nombre d’outils avancés qui aident à protéger le code d’une application contre divers types d’attaques de pirates informatiques telles que les injections de code SQL, les vulnérabilités XSS, la falsification de requêtes intersites (CSRF), etc.</li>
    </ul>

  <p>Vous pouvez choisir votre manière d'apprendre à coder en utilisant <strong>Laravel</strong>
  à travers mes <a href="{{ route('courses') }}">cours</a>.<br>
  Vous avez également la possibilité de consulter mes <a href="{{ route('gestion.articles.index') }}">articles</a> sur 
    le framework <strong>Laravel</strong> et de publier des commentaires.<br>
  Si vous éprouvez des difficultés à assimiler certains <a href="{{ route('courses') }}">cours</a> 
  ou à manipuler certains <a href="#">logiciels</a>, vous pouvez me joindre en cliquant 
  sur <a href="{{ route('contact.create') }}">contact</a> et en remplissant vos coordonnées. Vous pouvez également me contacter sur mes pages <a href="https://api.whatsapp.com/send?phone=237679298838" title="Suivez-nous sur WhatsApp">WhatsApp</a> et <a href="https://m.facebook.com/profile.php?id=100094428570698" title="Suivez-nous sur Facebook">Facebook</a>.
  </p>

@endsection

