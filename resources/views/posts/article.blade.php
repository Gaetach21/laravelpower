@extends('layouts.app')
@section('title','Laravelpower | Page des articles')
@section('content')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
<h1>{{$post->title}}</h1>
<img src=" {{ Storage::url($post->image->path) }}" alt="" class="mx-auto d-block" style="width: 250px; height: 250px;">
<p>{{$post->content}}</p>


<div class="container">
<span>Catégories</span> : 
 @forelse($post->categories as $category)
<span class="btn btn-primary btn-large">{{ $category->name }}</span>
@empty
<span>Aucune catégorie pour cet article</span>
@endforelse
</div>

<hr>
<h1 style="text-transform: uppercase; text-decoration: underline;">Afficher les commentaires</h1>
@include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])

<hr>
<h1 style="text-transform: uppercase; text-decoration: underline;">laisser un commentaire</h1>
					<form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="content" class="form-control" />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary mt-2" value="Publier un commentaire" />
                        </div>
                    </form>





                        
                    


@endsection
