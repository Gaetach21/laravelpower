@extends('layouts.app')
@section('title','Laravelpower | Page des articles')
@section('content')


<style>
  .uper {
    margin-top: 40px;
  }
  table, thead, tbody, td {border: 2px solid grey; 
      padding: 5px;
      border-collapse: collapse;}
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

<div class="uper">
<h1>Liste des articles</h1>
<div class="content">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
          <td>id</td>
          <td>titre</td>
          <td>crée le</td>
          <td>Modifier</td>
          <td>Supprimer</td>
        </tr>
    </thead>

    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td><a href="{{ route('gestion.articles.show',['id'=>$post->id]) }}" style="text-decoration: none;">{{$post->title}}</a></td>
            <td>{{$post->created_at}}</td>
            <td><a href="{{ route('gestion.articles.edit', $post->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('gestion.articles.destroy', $post->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
<div>


@endsection
