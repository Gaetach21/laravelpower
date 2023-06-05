@extends('layouts.app')
@section('title','Laravelpower | Cours sur Laravel')
@section('content')
<h1>liste de cours sur Laravel</h1>
<ul>
	<li><a href="{{ route('chap1') }}">Chapitre1: Introduction</a></li>
	<li><a href="{{ route('chap2') }}">Chapitre2: Routing de base</a></li>
	<li><a href="{{ route('chap3') }}">Chapitre3: Les contrôleurs</a></li>
	<li><a href="{{ route('chap4') }}">Chapitre4: Les vues avec Blade</a></li>
	<li><a href="{{ route('chap5') }}">Chapitre5: Compiler les assets</a></li>
	<li><a href="{{ route('chap6') }}">Chapitre6: Les migrations</a></li>
	<li><a href="{{ route('chap7') }}">Chapitre7: Les factories</a></li>
	<li><a href="{{ route('chap8') }}">Chapitre8: L'ORM Eloquent</a></li>
	<li><a href="{{ route('chap9') }}">Chapitre9: Relation One to Many</a></li>
	<li><a href="{{ route('chap10') }}">Chapitre10: Relation One to One</a></li>
	<li><a href="{{ route('chap11') }}">Chapitre11: Relation Many to Many</a></li>
	<li><a href="{{ route('chap12') }}">Chapitre12: Relation One to Many(Polymorphic)</a></li>
	<li><a href="{{ route('chap13') }}">Chapitre13: Relation has one Through</a></li>
	<li><a href="{{ route('chap14') }}">Chapitre14: Relation has one of Many</a></li>
	<li><a href="{{ route('chap15') }}">Chapitre15: Les requêtes HTTP</a></li>
	<li><a href="{{ route('chap16') }}">Chapitre16: Validation de formulaire</a></li>
	<li><a href="{{ route('chap17') }}">Chapitre17: Upload de fichiers</a></li>
	<li><a href="{{ route('chap18') }}">Chapitre18: Authentification</a></li>
	<li><a href="{{ route('chap19') }}">Chapitre19: Autorisation avec les gates</a></li>
	<li><a href="{{ route('chap20') }}">Chapitre20: Envoi des mails</a></li>
	<li><a href="{{ route('chap21') }}">Chapitre21: Les notifications</a></li>
	<li><a href="{{ route('chap22') }}">Chapitre22: Les middlewares</a></li>
	<li><a href="{{ route('chap23') }}">Chapitre23: Soft Deletes</a></li>
	<li><a href="{{ route('chap24') }}">Chapitre24: Les évènements</a></li>
	<li><a href="{{ route('chap25') }}">Chapitre25: Les composants Blade</a></li>
	<li><a href="{{ route('chap26') }}">Chapitre26: Les routes(notions avancées)</a></li>
	<li><a href="{{ route('chap27') }}">Chapitre27: HTTP client</a></li>
	<li><a href="{{ route('chap28') }}">Chapitre28: Les observers</a></li>
	<li><a href="">Chapitre29: Les jobs</a></li>
</ul>


@endsection

