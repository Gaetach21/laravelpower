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
<span>Aucune catégorie pour cette recette</span>
@endforelse
</div>
@endsection
