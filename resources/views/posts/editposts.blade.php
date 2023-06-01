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
<h1>Modifier un article</h1>
<div class="content">
@if ($errors->any())
  @foreach ($errors->all() as $error)
 <div class="alert alert-danger">{{ $error }}</div>
  @endforeach 
  @endif

<form method="post" action="{{ route('gestion.articles.update', $post->id ) }}" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
              <label for="title">Titre de l'article:</label>
              <input type="text" class="form-control" name="title" value="{{ $post->title }}"/>
     </div>
     <div class="form-group">
              <label for="content">Contenu de l'article:</label>
              <textarea name="content" cols="30" rows="20" class="form-control" >{{ $post->content }}</textarea>
     </div><br/><br/>

	<button type="submit" class="btn btn-primary">Modifier un article</button>
</form>
</div>

@endsection
