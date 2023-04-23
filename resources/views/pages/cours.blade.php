@extends('layouts.app')
@section('title','Laravelpower | Cours sur Laravel')
@section('content')
<h1>liste de cours sur Laravel</h1>
<ul >
	<li><a href="{{ route('chap1') }}">Chapitre1: Introduction</a></li>
	<li><a href="{{ route('chap2') }}">Chapitre2: Routing de base</a></li>
	<li><a href="{{ route('chap3') }}">Chapitre3: Les contrôleurs</a></li>
	<li><a href="{{ route('chap4') }}">Chapitre4: Les vues avec Blade</a></li>
	<li><a href="">Chapitre5: Compiler les assets</a></li>
	<li><a href="">Chapitre6: Les migrations</a></li>
	<li><a href="">Chapitre7: Les factories</a></li>
	<li><a href="">Chapitre8: L'ORM Eloquent</a></li>
	<li><a href="">Chapitre9: Relation One to Many</a></li>
	<li><a href="">Chapitre10: Relation One to One</a></li>
</ul>


@endsection

