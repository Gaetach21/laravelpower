@extends('layouts.app')
@section('title','Laravelpower | Cours sur Laravel')
@section('content')
<h1>liste de tutoriels sur Laravel</h1>
<div class="list-group">
	<a href="{{ route('chap21') }}" class="list-group-item list-group-item-action">Tutoriel21: Les notifications</a>
	<a href="{{ route('chap22') }}" class="list-group-item list-group-item-action">Tutoriel22: Les middlewares</a>
	<a href="{{ route('chap23') }}" class="list-group-item list-group-item-action">Tutoriel23: Soft Deletes</a>
	<a href="{{ route('chap24') }}" class="list-group-item list-group-item-action">Tutoriel24: Les évènements</a>
	<a href="{{ route('chap25') }}" class="list-group-item list-group-item-action">Tutoriel25: Les composants Blade</a>
	<a href="{{ route('chap26') }}" class="list-group-item list-group-item-action">Tutoriel26: Les routes(notions avancées)</a>
	<a href="{{ route('chap27') }}" class="list-group-item list-group-item-action">Tutoriel27: HTTP client</a>
	<a href="{{ route('chap28') }}" class="list-group-item list-group-item-action">Tutoriel28: Les observers</a>
	<a href="{{ route('chap29') }}" class="list-group-item list-group-item-action">Tutoriel29: Les jobs</a>
	<a href="{{ route('chap30') }}" class="list-group-item list-group-item-action">Tutoriel30: Les services providers</a>

</div>

<ul class="pagination justify-content-center" style="margin:20px 0;">
	<li class="page-item"><a class="page-link" href="{{ route('courses2') }}">Précédente</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses') }}">1</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses2') }}">2</a></li>
	<li class="page-item active"><a class="page-link" href="{{ route('courses3') }}">3</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses4') }}">4</a></li>
	<li class="page-item"><a class="page-link" href="{{ route('courses4') }}">Suivante</a></li>
</ul>


@endsection

