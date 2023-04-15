<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Laravelpower')</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel ="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        
        <div id="bloc_page">   

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