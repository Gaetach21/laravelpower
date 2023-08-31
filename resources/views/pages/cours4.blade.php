@extends('layouts.app')
@section('title','Laravelpower | Cours sur Laravel')
@section('content')
<h1>liste de tutoriels sur Laravel</h1>
<div class="list-group">
	<a href="{{ route('chap31') }}" class="list-group-item list-group-item-action">Tutoriel31: Un système de commentaires</a>
	<a href="{{ route('chap32') }}" class="list-group-item list-group-item-action">Tutoriel32: Upload de plusieurs images</a>
	<a href="{{ route('chap33') }}" class="list-group-item list-group-item-action">Tutoriel33: Créer un plan du site</a>
</div>

<ul class="pagination justify-content-center" style="margin:20px 0;">
	<li class="page-item"><a class="page-link" href="{{ route('courses3') }}">Précédente</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses') }}">1</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses2') }}">2</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses3') }}">3</a></li>
	<li class="page-item active"><a class="page-link" href="{{ route('courses4') }}">4</a></li>
	<li class="page-item disabled"><a class="page-link" href="#">Suivante</a></li>
</ul>


@endsection