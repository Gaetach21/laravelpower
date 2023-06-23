@extends('layouts.app')
@section('title','Laravelpower | Laravel Multiple Upload')
@section('content')
<style type="text/css">
  section{background-color: #f2f2f2;}
</style>
<div class="container my-5">
<h1>Les images du produit : </h1>
<hr>
<div class="row mt-4">
  @foreach($images as $image)
  <div class="col-md-3">
    <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
      <div class="card-body">
        <img src="/upload_images/{{$image->image}}" class="card-img-top">
      </div>
    </div>
  </div>
  @endforeach
</div>
<a href="{{ route('upload.index') }}">Revenir sur upload</a>
</div>
@endsection

