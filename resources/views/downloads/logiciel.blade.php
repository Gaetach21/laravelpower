@extends('layouts.app')
@section('title','Laravelpower | Page des logiciels')
@section('content')
<h1>{{$download->title}}</h1>
<center><img src=" {{ Storage::url($download->imagetodownload->path) }}" alt="" style="width: 250px; height: 250px;"></center>
<p>{{$download->content}}</p>
<p><a href="{{ Storage::url($download->software->path) }}" class="btn btn-primary">Télécharger le fichier</a></p>

<hr>
<div class="container">
<span>Catégories</span> : 
 @forelse($download->categories as $category)
<span class="text-primary">{{ $category->name }}</span>
@empty
<span>Aucune catégorie pour ce téléchargement</span>
@endforelse
</div>


@endsection
