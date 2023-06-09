@extends('layouts.app')
@section('title','Laravelpower | Page des articles')
@section('content')
<h1>{{$post->title}}</h1>
<center><img src=" {{ Storage::url($post->image->path) }}" alt="" style="width: 250px; height: 250px;"></center>
<p>{{$post->content}}</p>

<hr>
<div class="container">
<span>Catégories</span> : 
 @forelse($post->categories as $category)
<span class="btn btn-primary btn-large">{{ $category->name }}</span>
@empty
<span>Aucune catégorie pour cet article</span>
@endforelse
</div>
<hr>
<h1 style="text-transform: uppercase; text-decoration: underline;">laisser un commentaire</h1>
<p>Vous devez <a href="{{ route('login') }}">vous connecter</a> pour publier un commentaire</p>

@endsection
