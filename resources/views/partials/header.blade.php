<header>
  <div class="container">
        <div id="navbar1" class="text-primary">
        @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Tableau de bord</a>
                        
                    @else
                         <a href="{{ route('login') }}">Connexion</a>

                        @if (Route::has('register'))
                            | <a href="{{ route('register') }}">Inscription</a>
                        @endif
                    @endauth
            @endif

        | <a href="#">Blog</a>
        | <a href="#">Langues</a>
        </div>
        </div>

    <div id="main_title">
  <img src="{{ asset('images/laravelexperience_logo.png') }}" alt="logo de Laravelexperience" id="logo" />
    <h1>laravelpower</h1>
    <h2>Développer en utilisant Laravel</h2>
    </div>
    
    </header>