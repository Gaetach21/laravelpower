<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Compiler les assets</title>
    </head>
    <body>
      <h1>Laravel8 Compiler les assets (installation de TailwindCSS)</h1>
  
<p>
<strong>laravelmix</strong> est une sorte de module basé sur <strong>webpack</strong>
qui va nous permettre de compiler tout notre fichier js et tout notre fichier css en 
un seul fichier js et un seul fichier css minifié et compact pour gagner un maximum de place.
</p>
  
<p>
  A la racine du projet, le fichier <strong>webpac.mix.js</strong><br>:
  <pre >
    <i>
      
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
    </i>
  </pre>
  On récupère le javascript dans le dossier <strong>resources/js/app.js</strong> et on le compile dans
  <strong>public/js</strong>.<br>
  On procède de la même façon avec le css.
</p>
  
  <p>
    on installe <strong>nodejs</strong> et <strong>npm</strong><br>
    Sur un terminal, on entre les commandes suivantes: <br>
    <ul>
      <li>node -v</li>
      <li>npm -v</li>
      <li>npm install</li>
      <li>npm run dev</li>
    </ul>
  </p>

  <p>
    <h3>Exemple</h3>
    Dans <strong>webpac.mix.js</strong>, on change postcss en sass et on écrit en scss. <br>
     <pre>
    <i>
    .sass('resources/scss/app.scss', 'public/css', [
        //
    ]);
    </i>
  </pre><br>
  Dans le dossier resources, on crée le dossier <strong>scss</strong>. A l'intérieur, on crée le fichier <strong>app.scss</strong>.<br>
  dans app.scss, on écrit : <br>
<pre >
  $bg: #bcbcbc;
  body
  {
    background-color: $bg;
  }
</pre><br>
On enregistre les modifications dans le fichier et on le recompile en tapant sur le terminal:<br>
<ul>
  <li>npm run watch</li>
  <li>npm run watch</li>
</ul>
Dans public, on a app.css : <br>
<pre > 
  body
  {
    background-color: #bcbcbc;
  }
</pre><br>
Dans layouts, dans app.blade.php <br>
<img src="{{ asset('images/laravel_asset_image1.jpg') }}"><br>
Dans resources/scss/app.scss <br>
<pre >
  $bg: #bc5bcb;
</pre><br>
Dans resources/js/app.js, on écrit : <br>
<pre >
  require ('./bootstrap');
  <span class="text-danger">alert('coucou')</span>
</pre><br>
  </p>
  
  <p>
    <h3>Installation du framework Tailwindcss</h3>
        <ul>
      <li>npm install -D tailwindcss</li>
      <li>npx tailwindcss init</li>
    </ul>
          Cette dernière commande crée le fichier <strong>tailwindcss.config.js</strong> à la racine du projet.<br>
          Dans resources/css/app.css, on écrit : <br>
          <pre >
@import 'tailwindcss/base';
@import 'tailwindcss/components';
@import 'tailwindcss/utilities';
          </pre><br>
on revient dans <strong>webpac.mix.js</strong><br>:
  <pre >
    <i>
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);
    </i>
  </pre><br>
  laravelformation><span >npm run dev</span><br>
  Dans public/css/app.css, on a le css de tailwindcss<br>
  Sur laravelformation.test, on revient à un style par défaut. <br>
  Dans app.blade.php <br>
  <img src="{{ asset('images/laravel_tailwindcss_image1.jpg') }}"><br>
  La partie content a été centrée avec le margin-auto de tailwindcss.
  </p>
    </body>
</html>
