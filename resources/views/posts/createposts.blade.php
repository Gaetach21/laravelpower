@extends('layouts.app')
@section('content')
<style type="text/css">
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
<h1>Créer un nouveau article</h1>
<div class="content">
@if ($errors->any())
  @foreach ($errors->all() as $error)
 <div class="alert alert-danger">{{ $error }}</div>
  @endforeach 
  @endif

<form method="post" action="{{ route('gestion.articles.store') }}" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
              <label for="title">Titre de l'article:</label>
              <input type="text" class="form-control" name="title"/>
     </div>
     <div class="form-group">
              <label for="content">Contenu de l'article:</label>
              <textarea name="content" cols="30" rows="20" class="form-control"></textarea>
     </div>

	<label for="avatar">Sélectionner une image pour votre article : </label> <br/><br/>
	<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" /><br/><br/>

	<button type="submit" class="btn btn-primary">Créer un article</button>
</form>
</div>
@endsection
