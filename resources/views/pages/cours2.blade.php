@extends('layouts.app')
@section('title','Laravelpower | Cours sur Laravel')
@section('content')
<h1>liste de tutoriels sur Laravel</h1>
<div class="list-group">
	<a href="{{ route('chap11') }}" class="list-group-item list-group-item-action">Tutoriel11: Relation Many to Many</a>
	<a href="{{ route('chap12') }}" class="list-group-item list-group-item-action">Tutoriel12: Relation One to Many(Polymorphic)</a>
	<a href="{{ route('chap13') }}" class="list-group-item list-group-item-action">Tutoriel13: Relation has one Through</a>
	<a href="{{ route('chap14') }}" class="list-group-item list-group-item-action">Tutoriel14: Relation has one of Many</a>
	<a href="{{ route('chap15') }}" class="list-group-item list-group-item-action">Tutoriel15: Les requêtes HTTP</a>
	<a href="{{ route('chap16') }}" class="list-group-item list-group-item-action">Tutoriel16: Validation de formulaire</a>
	<a href="{{ route('chap17') }}" class="list-group-item list-group-item-action">Tutoriel17: Upload de fichiers</a>
	<a href="{{ route('chap18') }}" class="list-group-item list-group-item-action">Tutoriel18: Authentification</a>
	<a href="{{ route('chap19') }}" class="list-group-item list-group-item-action">Tutoriel19: Autorisation avec les gates</a>
	<a href="{{ route('chap20') }}" class="list-group-item list-group-item-action">Tutoriel20: Envoi des mails</a>
</div>

<ul class="pagination justify-content-center" style="margin:20px 0;">
	<li class="page-item"><a class="page-link" href="{{ route('courses') }}">Précédente</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses') }}">1</a></li>
	<li class="page-item active"><a class="page-link" href="{{ route('courses2') }}">2</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses3') }}">3</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses4') }}">4</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses3') }}">Suivante</a></li>
</ul>


@endsection

