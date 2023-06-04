@extends('layouts.app')
@section('title','Laravelpower | Nom de domaine')
@section('content')
<h1>Qu'est-ce qu'un nom de domaine ?</h1>
<center><h2>Définition</h2></center>
<p>Sur le plan technique, chaque ordinateur connecté à internet possède une adresse IP (Internet Protocol) qui permet de l’identifier. Cette adresse IP est constituée soit d’une suite de chiffres lorsqu’il s’agit d’une adresse IPv4 (par exemple, 193.191.210.100), soit d’une suite de chiffres et de lettres lorsqu’il est question d’une adresse IPv6 (par exemple, 2001:0db8::53). Dans la mesure où cette série de chiffres est difficile à retenir, la possibilité de remplacer ces chiffres par des mots (le nom de domaine) a été créée. </p>
<p>Un <strong>nom de domaine</strong> est donc un nom unique qui identifie un particulier, une entreprise ou une organisation sur internet. Il permet la recherche d’un site web ou l’envoi de messages électroniques, sans devoir recopier une longue adresse IP.</p>
<p>Ainsi, pour consulter le site internet de google, il suffit de taper <strong>« www.google.com »</strong>. Le « www » indique que le nom de domaine est recherché sur le World Wide Web.</p>
<p>Toujours d’un point de vue technique, l’URL (uniform resource locator ou l’adresse web) tapée dans un navigateur internet se présente comme suit :</p>
<figure>
      <img src="{{ asset('images/domain_name.png') }}" alt="#" style="width: 600px;" />
      <figcaption><center>Description d'une URL</center></figcaption>
</figure>
 <p>Le nom de domaine comprend deux parties :</p>
<ol>
	<li>le <strong>nom de domaine de deuxième niveau</strong> (second-level domain ou SLD), sous-domaine ou encore radical ;</li>
	<li>le <strong>nom de domaine de premier niveau</strong> (top-level domain ou TLD) ou extension. Les noms de domaine de premier niveau peuvent être subdivisés en deux catégories générales : 
		<ul>
			<li>o	les extensions génériques (generic top-level domain ou gTLD), telles que « .org » ou « .net ». Ces extensions peuvent aussi, notamment, être des marques ou des noms géographiques (par exemple, « .vlaanderen », « .berlin », « .brussels », « .gent », etc.) ;</li>
			<li>o	les extensions équivalentes à des codes de pays (country code top-level domain ou ccTLD), telles que « .be » ou « .nl ». </li>
		</ul></li>
</ol>
<h2>Utilité du nom de domaine</h2>
<p>Un nom de domaine constitue un sésame pour tout faire sur internet : configurer un site web, envoyer et recevoir des e-mails ou créer une boutique en ligne.</p>
<p>Pour une entreprise, le nom de domaine est incontournable pour assurer sa présence sur la toile :</p>
<ul>
	<li>il lui permet d’accroître la visibilité de son site, donc le nombre de visiteurs sur ce site ainsi que le nombre de contacts commerciaux potentiels ;</li>
	<li>il sert à personnaliser les adresses de messagerie électronique et à promouvoir le site web ;</li>
	<li>il représente un réel actif sur lequel l’entreprise peut capitaliser pour créer de la valeur.</li>
</ul>
 
@endsection

