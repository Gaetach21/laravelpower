  <div class="container">
  <nav>
      <ul id="menu" class="bg-primary">
        <li><a href="{{ route('welcome') }}" class="text-white">Accueil</a></li>
        <li><a href="{{ route('about_us') }}" class="text-white">A propos</a></li>
        <li><a href="{{ route('courses') }}" class="text-white">Cours</a></li>
        <li><a href="{{ route('gestion.articles.index') }}" class="text-white">Articles</a>
          @auth
          <ul class="bg-primary">
            <li><a href="{{ route('gestion.articles.create') }}" class="text-white">Création</a></li>
          </li>
          </ul>
          @endauth    
        <li><a href="#" class="text-white">Logiciels</a></li>
        <li><a href="{{ route('contact.create') }}" class="text-white">Contact</a></li>
        
      </ul>
    </nav>
    </div>