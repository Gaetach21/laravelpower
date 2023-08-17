<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Laravelpower')</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel ="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
        <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    </head>
    <body style="background: url('images/fond_jaune.png');">
        
        <div id="bloc_page" style="background: url('images/fond_blanc.png'); width: 920px;">   

  <!-- entête -->  
 @include('partials.header')
    
  <!-- menu de navigation --> 
  @include('partials.navbar')

   <section> 

    <!-- contenu de la page --> 
    <div id="main_content">
    <article>
@yield('content')
  </article>
  </div>
  <!-- menu de coté --> 
  @include('partials.aside')
  </section>

  
      <!-- pied de page --> 
  @include('partials.footer')
    
    </div>
    </body>
</html>