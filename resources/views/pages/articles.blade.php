@extends('layouts.app')
@section('title','Laravelpower | Page des articles')
@section('content')
<h1>Liste des articles</h1>
@if($posts->count()>0)
@foreach($posts as $post)
<h4><a href="{{ route('posts.show',['id'=>$post->id]) }}" style="text-decoration: none;">{{$post->title}}</a></h4>
@endforeach
@else
<span>Aucun post en base de données</span>
@endif	
@endsection
