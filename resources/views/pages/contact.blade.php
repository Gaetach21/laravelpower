@extends('layouts.app')
@section('title','Laravelpower | Nous contacter')
@section('content')


 <h1>Comment nous contacter</h1>

 <div class="bg-light">
<p>
Pour nous contacter, envoyez-nous votre demande, question ou votre commentaire, et nous vous répondrons dans les plus brefs délais.<br>
Vous pouvez nous contacter aussi par mail à l'adresse <a href="mailto:tachgaetan@gmail.com">tachgaetan@gmail.com</a>
</p>
@if ($errors->any())
	@foreach ($errors->all() as $error)
 <div class="text-danger">{{ $error }}</div>
	@endforeach	
	@endif
	
<form action="{{ route('contact.store') }}" method="post" class="was-validated">
	@csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Votre nom</label>
    <input type="text" class="form-control form-control-lg" id="name" placeholder="Votre nom" name="name" style="width: 60%;" required>
    <div class="invalid-feedback">Ce champ est obligatoire.</div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Votre adresse email</label>
    <input type="email" class="form-control form-control-lg" id="email" placeholder="Votre adresse email" name="email"style="width: 60%;" required>
    <div class="invalid-feedback">Ce champ n'est pas valide.</div>
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Votre message</label>
    <textarea placeholder="Votre message" class="form-control form-control-lg" id="message" name="message" style="width: 60%;" required></textarea> 
    <div class="invalid-feedback">Ce champ est obligatoire.</div>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>



	 		


</div>
	 	
@endsection
