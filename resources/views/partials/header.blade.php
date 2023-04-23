<header>
  <div class="container">
        <div id="navbar1" class="text-primary" style="text-align: center;">
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
        </div>
        </div>

    <div id="main_title">
  <img src="{{ asset('images/laravelpower_logo.png') }}" alt="logo de Laravelpower" id="logo" />
    <h1>laravelpower</h1>
    <h1 style="float: right; padding-right: 20px;">{{ date('d/m/Y') }}</h1>
    <h2>Développer en utilisant Laravel</h2>
    <h2 style="float: right; padding-right: 20px;">{{ date('H:i:s') }}</h2>
    </div>
    
    </header>