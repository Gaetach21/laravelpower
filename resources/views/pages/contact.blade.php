@extends('layouts.app')
@section('title','Laravelpower | Nous contacter')
@section('content')


 <h1>Comment nous contacter</h1>

 <div class="bg-light pb-5 mb-5 was-validated">
<p>
Pour nous contacter, envoyez-nous votre demande, question ou votre commentaire, et nous vous répondrons dans les plus brefs délais.<br>
Vous pouvez nous contacter aussi par mail à l'adresse <a href="mailto:tachgaetan@gmail.com">tachgaetan@gmail.com</a>
</p>
@if ($errors->any())
        <div class="alert alert-danger">
            {{ __('Un ou plusieurs champs contiennent une erreur. Veuillez vérifier et essayer de nouveau.') }}
        </div>
@endif
	
<form action="{{ route('contact.store') }}" method="post" >
	@csrf

  @if (Session::has('error'))
      <div class="alert alert-danger">
        {{ Session::get('error') }}
      </div>
  @endif

  @if (Session::has('success'))
      <div class="alert alert-success">
        {{ Session::get('success') }}
      </div>
  @endif

  <div class="mb-3 mt-3 form-group">
    <label for="name" class="form-label">Votre nom</label>
    <input type="text" class="form-control form-control-lg" id="name" placeholder="Votre nom" name="name" style="width: 60%;"  value="{{ old('name') }}" required="required">
    <div class="invalid-feedback">Veuillez remplir ce champ.</div>
    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
  </div>
  <div class="mb-3 form-group">
    <label for="email" class="form-label">Votre adresse email</label>
    <input type="email" class="form-control form-control-lg" id="email" placeholder="Votre adresse email" name="email" value="{{ old('email') }}" style="width: 60%;" required="required">
    <div class="invalid-feedback">Veuillez remplir une adresse email valide.</div>
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
  </div>
  <div class="mb-3 form-group">
    <label for="message" class="form-label">Votre message</label>
    <textarea placeholder="Votre message" class="form-control form-control-lg" id="message" name="message" style="width: 60%;" required="required">{{ old('message') }}</textarea>
    <div class="invalid-feedback">Veuillez remplir ce champ.</div>
    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

</div>
	 	
@endsection
