@extends('layouts.app')
@section('title','Laravelpower | Page des logiciels')
@section('content')


<style>
  .uper {
    margin-top: 40px;
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

<div class="uper">
<h1>Liste des logiciels</h1>
<div class="content">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-bordered">

    <thead class="table-primary">
        <tr>
          <td>id</td>
          <td>titre</td>
          <td>crée le</td>
          <td>Modifier</td>
          <td>Supprimer</td>
        </tr>
    </thead>

    <tbody>
        @foreach($downloads as $download)
        <tr>
            <td>{{$download->id}}</td>
            <td><a href="{{ route('gestion.logiciels.show',['id'=>$download->id]) }}" class="text-decoration-none">{{$download->title}}</a></td>
            <td>{{$download->created_at}}</td>
            <td><a href="{{ route('gestion.logiciels.edit', $download->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('gestion.logiciels.destroy', $download->id)}}" method="post">
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
