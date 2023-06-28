@extends('layouts.app')
@section('title','Laravelpower | Cours sur Laravel')
@section('content')
<h1>liste de tuto sur Laravel</h1>
<ul>
	<li><a href="{{ route('chap1') }}">Tutoriel1: Introduction</a></li>
	<li><a href="{{ route('chap2') }}">Tutoriel2: Routing de base</a></li>
	<li><a href="{{ route('chap3') }}">Tutoriel3: Les contrôleurs</a></li>
	<li><a href="{{ route('chap4') }}">Tutoriel4: Les vues avec Blade</a></li>
	<li><a href="{{ route('chap5') }}">Tutoriel5: Compiler les assets</a></li>
	<li><a href="{{ route('chap6') }}">Tutoriel6: Les migrations</a></li>
	<li><a href="{{ route('chap7') }}">Tutoriel7: Les factories</a></li>
	<li><a href="{{ route('chap8') }}">Tutoriel8: L'ORM Eloquent</a></li>
	<li><a href="{{ route('chap9') }}">Tutoriel9: Relation One to Many</a></li>
	<li><a href="{{ route('chap10') }}">Tutoriel10: Relation One to One</a></li>
	<li><a href="{{ route('chap11') }}">Tutoriel11: Relation Many to Many</a></li>
	<li><a href="{{ route('chap12') }}">Tutoriel12: Relation One to Many(Polymorphic)</a></li>
	<li><a href="{{ route('chap13') }}">Tutoriel13: Relation has one Through</a></li>
	<li><a href="{{ route('chap14') }}">Tutoriel14: Relation has one of Many</a></li>
	<li><a href="{{ route('chap15') }}">Tutoriel15: Les requêtes HTTP</a></li>
	<li><a href="{{ route('chap16') }}">Tutoriel16: Validation de formulaire</a></li>
	<li><a href="{{ route('chap17') }}">Tutoriel17: Upload de fichiers</a></li>
	<li><a href="{{ route('chap18') }}">Tutoriel18: Authentification</a></li>
	<li><a href="{{ route('chap19') }}">Tutoriel19: Autorisation avec les gates</a></li>
	<li><a href="{{ route('chap20') }}">Tutoriel20: Envoi des mails</a></li>
	<li><a href="{{ route('chap21') }}">Tutoriel21: Les notifications</a></li>
	<li><a href="{{ route('chap22') }}">Tutoriel22: Les middlewares</a></li>
	<li><a href="{{ route('chap23') }}">Tutoriel23: Soft Deletes</a></li>
	<li><a href="{{ route('chap24') }}">Tutoriel24: Les évènements</a></li>
	<li><a href="{{ route('chap25') }}">Tutoriel25: Les composants Blade</a></li>
	<li><a href="{{ route('chap26') }}">Tutoriel26: Les routes(notions avancées)</a></li>
	<li><a href="{{ route('chap27') }}">Tutoriel27: HTTP client</a></li>
	<li><a href="{{ route('chap28') }}">Tutoriel28: Les observers</a></li>
	<li><a href="{{ route('chap29') }}">Tutoriel29: Les jobs</a></li>
	<li><a href="{{ route('chap30') }}">Tutoriel30: Les services providers</a></li>
	<li><a href="{{ route('chap31') }}">Tutoriel31: Un système de commentaires</a></li>
	<li><a href="{{ route('chap32') }}">Tutoriel32: Upload de plusieurs images</a></li>
	<li><a href="{{ route('chap33') }}">Tutoriel33: Créer un plan du site</a></li>
</ul>


@endsection

