@extends('layouts.app')
@section('title','Laravelpower | Histoire du web')
@section('content')
<h1>Histoire du web</h1>

<p>Le Web a une longue histoire derrière lui. Faisons un historique express :</p>
<ul>
	<li>1969 : création de l’ancêtre d’Internet, appelé alors <strong>ARPAnet</strong>. C’est un réseau militaire qui se veut décentralisé (il n’a pas de lieu de commande central). Le réseau a ensuite évolué pour devenir un lieu d’échange universitaire avant de devenir progressivement grand public sous le nom d’Internet.</li>
	<li>1972 : apparition des <strong>e-mails</strong> pour échanger des messages.</li>
	<li>1991 : lancement du <strong>Web</strong>, pour afficher des pages d’information.</li>
</ul>
<p>Comme vous le voyez, Internet est apparu bien avant le Web ! Il était possible de s’échanger des e-mails avant que l’on puisse consulter des pages web.
</p>
<p>L’inventeur du Web ? Il s’agit de Tim Berners-Lee, un Britannique. Il est le premier à présenter un concept de "page web" avec des "liens hypertextes" qui permettent de naviguer d’une page à une autre. Il est aussi à l’origine des bases du langage HTML que l’on utilise toujours aujourd’hui pour concevoir des pages web.
</p>
<center>
<figure><img src="{{ asset('images/tim_berners_lee.jpg') }}" alt="Photographie de Tim Berners-Lee">
	<figcaption>Tim Berners-Lee, l’inventeur du Web</figcaption>
</figure>
</center>
<p>Tim Berners-Lee était en 1991 chercheur au CERN (un important centre de recherche scientifique à la frontière franco-suisse). C’est là qu’il a eu l’idée du Web. Il a par la suite créé un organisme, le <a href="https://www.w3.org/" target="_blank">W3C</a> (World Wide Web Consortium) qui a pris le relais pour faire évoluer les technologies du web (HTML, CSS, PNG, XML et autres noms barbares).
</p>


@endsection

