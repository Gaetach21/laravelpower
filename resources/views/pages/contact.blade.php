@extends('layouts.app')
@section('title','Laravelpower | Nous contacter')
@section('content')
<style type="text/css">
	body
{
	font-family: Arial, Helvetica, sans-serif;
	padding: 0px;
}
input[type=text], textarea, #email
{
	width: 60%;
	padding: 12px;
	border: 1px solid #64abfb;
	border-radius: 4px;
	box-sizing: border-box;
	margin-top: 6px;
	margin-bottom: 8px;
	margin-right: 0px;
	margin-left: 0px;
	resize: vertical;
}
label
{
	margin-right: 0px;
	margin-left: 0px;
	width: 100%;
}
button[type=submit]
{
	background-color: #64abfb;
	color: white;
	font-weight: bold;
	text-transform: uppercase;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	margin-left: 10px;
	cursor: pointer; 
}
button[type=submit]:hover
{
	background-color: #1872D9;
}
.content
{
	box-sizing: border-box;
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 10px 20px;
	width: 100%;
	max-width: 940px;
	margin: 0 auto;
}
</style>

 <h1>Comment nous contacter</h1>

 <div class="content">
<p>
Pour nous contacter, envoyez-nous votre demande, question ou votre commentaire, et nous vous répondrons dans les plus brefs délais.<br>
Vous pouvez nous contacter aussi par mail à l'adresse <a href="mailto:tachgaetan@gmail.com">tachgaetan@gmail.com</a>
</p>
@if ($errors->any())
	@foreach ($errors->all() as $error)
 <div class="text-danger">{{ $error }}</div>
	@endforeach	
	@endif
	

<form action="{{ route('contact.store') }}" method="post">
@csrf
<div>
	<label for="name">Votre nom</label>
	<input type="text" placeholder="Votre nom" id="name" name="name" />
</div>

	 		<div>
	 			<label for="email">
	 			Votre adresse email</label>
	 			<input type="email" placeholder="Votre adresse email" id="email" name="email" />
	 		</div>

	 		<div>
	 			<label for="message">
	 			Votre message</label>
	 			<textarea placeholder="Votre message" id="message" name="message" ></textarea> 
	 		</div>

	 		<button type="submit">Valider</button>

</form>

</div>
	 	
@endsection
