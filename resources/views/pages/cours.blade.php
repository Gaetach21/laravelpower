@extends('layouts.app')
@section('title','Laravelpower | Cours sur Laravel')
@section('content')
<h1>liste de tutoriels sur Laravel</h1>
<div class="list-group">
	<a href="{{ route('chap1') }}" class="list-group-item list-group-item-action">Tutoriel1: Introduction</a>
	<a href="{{ route('chap2') }}" class="list-group-item list-group-item-action">Tutoriel2: Routing de base</a>
	<a href="{{ route('chap3') }}" class="list-group-item list-group-item-action">Tutoriel3: Les contrôleurs</a>
	<a href="{{ route('chap4') }}" class="list-group-item list-group-item-action">Tutoriel4: Les vues avec Blade</a>
	<a href="{{ route('chap5') }}" class="list-group-item list-group-item-action">Tutoriel5: Compiler les assets</a>
	<a href="{{ route('chap6') }}" class="list-group-item list-group-item-action">Tutoriel6: Les migrations</a>
	<a href="{{ route('chap7') }}" class="list-group-item list-group-item-action">Tutoriel7: Les factories</a>
	<a href="{{ route('chap8') }}" class="list-group-item list-group-item-action">Tutoriel8: L'ORM Eloquent</a>
	<a href="{{ route('chap9') }}" class="list-group-item list-group-item-action">Tutoriel9: Relation One to Many</a>
	<a href="{{ route('chap10') }}" class="list-group-item list-group-item-action">Tutoriel10: Relation One to One</a>
</div>

<ul class="pagination justify-content-center" style="margin:20px 0;">
	<li class="page-item disabled"><a class="page-link" href="#">Précédente</a></li>
	<li class="page-item active"><a class="page-link" href="{{ route('courses') }}">1</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses2') }}">2</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses3') }}">3</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses4') }}">4</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses2') }}">Suivante</a></li>
</ul>


@endsection

