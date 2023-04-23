<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Routing de base</title>
    </head>
    <body>
        <p>
  <h3>La première vue</h3>
Dans <strong>resources/views</strong>, la première vue renvoyée est
<strong>welcome.blade.php</strong>.
Dans <strong>routes/web.php</strong>, on retrouve notre première vue: <br>
<pre class="bg-secondary">
  <strong><i>
    Route::get('/', function () {
    return view('welcome');
});
  </i></strong>
</pre>
Cette vue utilise la façade <strong>Route</strong> et la fonction <strong>get</strong>
qui se situe au niveau du slash c'est-à-dire au niveau du domaine.<br>
<strong>NB</strong>: l'usage du slash est facultatif.<br>
La fonction get renvoie une <strong>closure</strong> une fonction anonyme (qui n'a pas de nom)
qui renvoie la vue <strong>welcome</strong>
  </p>
  
  <p>
<h3>Chaine de caractères</h3>
on peut renvoyer une <strong>chaine de caractères</strong>
<pre class="bg-secondary">
  <strong><i>
    Route::get('/posts', function () {
    return 'Liste d\'articles';
});
  </i></strong>
</pre>
Résultat à l'adresse <strong>validcv.test/posts</strong>
<p>
<img src="{{ asset('images/laravel_routing1.jpg') }}" alt="Routing Example" />
</p>
  </p>
  

  <p>
<h3>Une réponse en JSON</h3>
on peut renvoyer une <strong>réponse en JSON</strong>
<pre>
  <strong><i>
    Route::get('/posts', function () {
    return response()->json([
    'title' => 'mon super titre',
    'description' => 'ma super description'
    ]);
});
  </i></strong>
</pre>
Résultat à l'adresse <strong>validcv.test/posts</strong>
<p>
<img src="{{ asset('images/laravel_routing2.jpg') }}" alt="Routing Example2" />
</p>
  </p>

    <p>
<h3>Une autre vue</h3>
on peut renvoyer une <strong>autre vue</strong><br>
<pre>
  <strong><i>
Route::get('articles', function () {
    return view('articles');
});
  </i></strong>
</pre><br>
Dans <strong>resources/views</strong>, on crée la vue
<strong>articles.blade.php</strong>.<br>
<h2>Example</h2>
<img src="{{ asset('images/laravel_routing3.jpg') }}" alt="Routing Example" />
Résultat à l'adresse <strong>validcv.test/posts</strong><br>
<img src="{{ asset('images/laravel_routing4.jpg') }}" alt="Routing Example3" />
  </p>
    </body>
</html>
