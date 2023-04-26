@extends('layouts.app')
@section('content')
<h1>Créer un nouveau article</h1>
@if ($errors->any())
  @foreach ($errors->all() as $error)
 <div style="color: red;">{{ $error }}</div>
  @endforeach 
  @endif

<form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
	@csrf
	<input type="text" name="title" style="border: 2px solid gray; font-weight: 600;"><br>
	<textarea name="content" cols="20" rows="10" style="border: 2px solid gray; font-weight: 600;"></textarea><br>
	<label for="avatar">Sélectionner une image pour votre article : </label> <br/><br/>
	<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" /><br/><br/>

	<button type="submit" style="background-color: green; font-weight: 500;">Créer</button>
</form>
@endsection
