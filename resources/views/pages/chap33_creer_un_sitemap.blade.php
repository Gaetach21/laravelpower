@extends('layouts.app')
@section('title','Laravelpower | Créer un plan du site')
@section('content')
<div class="p-2">
      <h1>Tutoriel 32 : Créer un plan du site</h1>


<h3>Introduction au sitemap</h3>
<p><strong>Sitemap</strong> est un protocole qui permet au webmaster d’informer les moteurs de recherches des pages d’un site web disponibles pour l’indexation automatique.</p>
<p>Il s’agit d’un fichier, généralement présenté au format XML ou texte, qui répertorie ou liste les adresses (URLs) d’un site web en permettant d’inclure des informations complémentaires pour chaque adresse tels que la date de dernière modification, la fréquence de mise à jour, la priorité par rapport aux autres adresses, ...</p>
<p>Les moteurs de recherche tels que Google lisent le sitemap pour explorer plus intelligemment un site web, présenter les statistiques sur les recherches qui aboutissent aux pages de ce site, …</p>
<p>Nous allons voir comment mettre en place un sitemap (plan de site) dynamique au format XML dans un projet Laravel.</p>

<h3>Le protocole sitemap</h3>
<p>Le protocole sitemap utilise des tags XML pour décrire l'information. Le fichier XML qui contient ces tags doit être encodé en UTF-8.</p>
<p>Voici l’exemple d’un sitemap au format XML avec une URL renseignée : <br>
<img src="{{ asset('images/laravel_chap33_image1.jpg') }}"><br>
</p>
<p>Décrivons ce schéma :</p>
<ul>
<li>
<code>&lt;urlset&gt;</code> (<em>requis</em>) : Encapsule les URLs et indique l'espace de noms (namespace)</li>
<li>
<code>&lt;url&gt;</code> (<em>requis</em>) : Tag parent pour chaque entré d’URL</li>
<li>
<code>&lt;loc&gt;</code> (<em>requis</em>) : L’URL de la page</li>
<li>
<code>&lt;lastmod&gt;</code> (<em>optionnel</em>) : Date de la dernière mise à jour de la page. La valeur doit respecter l’un de formats <a href="http://www.w3.org/TR/NOTE-datetime" target="_blank" rel="noopener">Date and Time</a>&nbsp;recommandé par W3C.&nbsp;</li>
<li>
<code>&lt;changefreq&gt;</code> (<em>optionnel</em>) : La fréquence (périodicité) de mise à jour de la page. Les valeurs valides sont « always », « hourly », « daily », « weekly », « monthly », « yearly », « never »</li>
<li>
<code>&lt;priority&gt;</code> (<em>optionnel</em>) : L’importance de l’URL par rapport aux autres URLs. La valeur doit être comprise entre "0.0" et "1.0". La valeur de priorité par défaut est "0.5".</li>
</ul>
<p>Notez bien : Dans un fichier XML, la valeur d'un tag (y compris pour une URL) doit utiliser les codes d'échappement pour les caractères énumérés au tableau ci-dessous :</p>
<table style="width: 46.2445%; height: 164px;" class="table table-bordered table-striped table-hover table-sm">
<tbody>
<tr style="height: 44px;">
<th style="width: 40.4697%; height: 44px;" colspan="2">Caractère</th>
<th style="width: 50.8398%; height: 44px;">Code d'échappement</th>
</tr>
<tr style="height: 24px;">
<td style="width: 36.3893%; height: 24px;">Ampersand</td>
<td style="width: 4.08041%; height: 24px;">&amp;</td>
<td style="width: 50.8398%; height: 24px;"><code style="font-family: Courier, monospace;">&amp;amp;</code></td>
</tr>
<tr style="height: 24px;">
<td style="width: 36.3893%; height: 24px;">Single Quote</td>
<td style="width: 4.08041%; height: 24px;">'</td>
<td style="width: 50.8398%; height: 24px;"><code style="font-family: Courier, monospace;">&amp;apos;</code></td>
</tr>
<tr style="height: 24px;">
<td style="width: 36.3893%; height: 24px;">Double Quote</td>
<td style="width: 4.08041%; height: 24px;">"</td>
<td style="width: 50.8398%; height: 24px;"><code style="font-family: Courier, monospace;">&amp;quot;</code></td>
</tr>
<tr style="height: 24px;">
<td style="width: 36.3893%; height: 24px;">Greater Than</td>
<td style="width: 4.08041%; height: 24px;">&gt;</td>
<td style="width: 50.8398%; height: 24px;"><code style="font-family: Courier, monospace;">&amp;gt;</code></td>
</tr>
<tr style="height: 24px;">
<td style="width: 36.3893%; height: 24px;">Less Than</td>
<td style="width: 4.08041%; height: 24px;">&lt;</td>
<td style="width: 50.8398%; height: 24px;"><code style="font-family: Courier, monospace;">&amp;lt;</code></td>
</tr>
</tbody>
</table>


<h3>Mettre en place un sitemap</h3>
<p>Partant du schéma que nous venons de décrire au protocole sitemap, mettons en place un sitemap pour les publications d’un site web que nous supposons être représentées par le modèle « Post » (table « posts ») dans un projet Laravel.</p>
<p>Notez Bien : Pour bien organiser l’application, nous vous recommandons de toujours créer un sitemap spécifique à chaque modèle, c’est-à-dire aussi une route spécifique pour chaque sitemap. Voici comment le faire en trois étapes :</p>

<h4>La route</h4>
<p>Au fichier routes/web.php, ajoutons la ligne suivante :</p>
<pre><strong>Route::get("sitemap/posts", "SitemapController@posts")->name("sitemap.posts");</strong></pre>
<p>Cette URL « sitemap/posts » (GET) nommée « sitemap.posts » est gérée par la méthode « posts » du contrôleur « SitemapController ».</p>
<p>Si vous le désirez, vous pouvez ajouter l’extension à l’URL : « sitemap/posts.xml »</p>

<h4>Le contrôleur</h4>
<p>Générons le contrôleur « SitemapController » en exécutant la commande artisan suivante :</p>
<pre><strong>php artisan make:controller SitemapController</strong></pre>
<p>Au fichier App/http/SitemapController.php généré, décrivons la méthode « posts » où nous récupérons les publications (données) « Post » de la base de données puis retournons une réponse de contenu XML en passant les données à la vue « sitemaps.posts » :</p>
<img src="{{ asset('images/laravel_chap33_image2.jpg') }}"><br>

<h4>La vue</h4>
<p>Créons le fichier <strong>resources/views/sitemaps/posts.blade.php</strong> où nous parcourons les différentes publications (collection de « Post ») en présentant pour chacune d’elles une url du sitemap :</p>
<p><img src="{{ asset('images/laravel_chap33_image3.jpg') }}"></p>
<p>Notez la façon dont nous affichons à la première ligne le code <strong>xml version</strong>.C'est pour qu’il n’y ait pas de confusion entre la syntaxe XML et PHP.</p>


<h3>L’index des sitemaps</h3>
<p>Nous vous avions recommandé de créer un sitemap spécifique à chaque modèle pour bien organiser l’application. Ce qui peut nous faire plusieurs sitemaps si nous avons plusieurs modèles.</p>
<p>Il faut aussi noter qu’un fichier sitemap ne peut contenir plus de 50000 URLs, ni peser plus de 50Mo (52,428,800 bytes) d’où il faut encore avoir plusieurs sitemaps quand on dépasse ces limites.</p>
<p>Si nous avons plusieurs sitemaps, nous pouvons les grouper (les lister) dans un fichier sitemap index. Il ne doit lui aussi avoir plus de 50000 sitemaps, ni peser plus de 50Mo.</p>
<p>Voici l’exemple d’un sitemap index qui liste deux sitemaps :</p>
<p><img src="{{ asset('images/laravel_chap33_image4.jpg') }}"></p>
<p>Décrivons ce schéma :</p>
<ul>
<li>
<code>&lt;sitemapindex&gt;</code> (<em>requis</em>) : Encapsule les informations de tous les sitemaps et indique le namespace</li>
<li>
<code>&lt;sitemap&gt;</code> (<em>requis</em>) : Tag parent pour chaque entrée de sitemap</li>
<li>
<code>&lt;loc&gt;</code> (<em>requis</em>)&nbsp;: L’URL du sitemap</li>
<li>
<code>&lt;lasmod&gt;</code> (<em>optionnel</em>) : La date de la dernière mise à jour du sitemap. Sa valeur doit respecter l’un de formats <a href="http://www.w3.org/TR/NOTE-datetime">Date and Time</a>&nbsp;recommandé par W3C</li>
</ul>
<p>Complétons le sitemap que nous avons mis en place précédemment en ajoutant pour le sitemap index:</p>
<ul>
<li>La route «&nbsp;sitemap/index&nbsp;»</li>
<li>La méthode «&nbsp;index&nbsp;» au contrôleur «&nbsp;SitemapController&nbsp;»</li>
<li>La vue « index.blade.php »</li>
</ul>

<h4>La route</h4>
<p>Ajoutons au fichier <strong>routes/web.php</strong> la route GET « sitemap/index » qui va être géré par la méthode « index » du contrôleur « SitemapController ». Nommons-la « sitemap.index » :</p>
<pre><strong>Route::get("sitemap/index", "SitemapController@index")->name("sitemap.index");</strong></pre>


<h4>Le contrôleur</h4>
<p>La méthode « index » du contrôleur « SitemapController » récupère la dernière entrée « Post » dont on utilisera la date pour indiquer la dernière mis à jour du sitemap « sitemap/posts », puis retourne une reponse de contenu XML en passant les données à la vue « sitemaps.index » :</p>
<p><img src="{{ asset('images/laravel_chap33_image5.jpg') }}"></p>


<h4>La vue</h4>
<p>Nous allons supposer avoir un sitemap supplémentaire de route nommée « sitemap.pages » et de vue resources/views/sitemaps/pages.blade.php qui liste les autres pages du site web.</p>
<p>Le code source de la vue resources/views/sitemaps/pages.blade.php avec les routes nommées « welcome », « login » et « register » peut se présenter de la manière suivante :</p>
<p><img src="{{ asset('images/laravel_chap33_image6.jpg') }}"></p>
<p>En intégrant ce sitemap supplémentaire dans l'index des sitemaps, la vue resources/views/sitemaps/index.blade.php devient :</p>
<p><img src="{{ asset('images/laravel_chap33_image7.jpg') }}"></p>
<p><span style="text-decoration: underline;"><strong>Notez bien</strong></span> : C'est à travers l'adresse du sitemap index qu'on soumet tous les sitemaps d'un site web aux moteurs de recherches.</p>


<div>
    <a href="{{ route('chap32') }}" class="bg-primary p-2 text-white" style="text-decoration: none;">Tutoriel32: Upload de plusieurs images</a>
    <a href="" class="bg-primary p-2 text-white mx-3" style="text-decoration: none;">Tutoriel34: Créer une newsletter</a>
</div>

</div>
@endsection
