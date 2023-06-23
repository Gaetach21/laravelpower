@extends('layouts.app')
@section('title','Laravelpower | Laravel Multiple Upload')
@section('content')
<div class="container my-5">
<h1>Laravel Multiple Upload</h1>
<div class="row justify-content-between">
  @if(session('success'))
<div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <h4 class="alert-heading">Bravo!</h4>
  <p class="mb-0">Un nouveau produit a été ajouté avec succès!</p>
</div>
@endif
  <div class="col-md-5">
    <h3>Ajouter un produit</h3>
    <form action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title" class="mt-4">Titre du produit</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid 
        @enderror" placeholder="Entrez le titre d'un produit">
        <span class="text-danger">
          @error('title'){{$message}}@enderror
        </span>
      </div>


        <div class="form-group">
        <label for="files" class="form-label mt-4">Uploader plusieurs images</label>
        <input type="file" name="images[]" class="form-control" accept="images/*" multiple>
        </div>

        <div class="mt-4">
          <button type="submit" class="btn btn-primary">Enregistrer le produit</button>
        </div>

    </form>
  </div>

  <div class="col-md-6">
    <h3>Les produits</h3>
    <table class="table table-striped">
      <thead>
        <tr>
        <th>N°</th>
        <th>Titre</th>
        <th>Total</th>
        <th>Vue</th>
      </tr>
      </thead>
      <tbody>
        @php $i=1; @endphp
        @forelse($products as $product)
        <tr>
          <td>{{$i++;}}</td>
          <td>{{$product->title}}</td>
          <td>{{$product->images->count()}}</td>
          <td><a href="{{ route('upload.images',$product->id) }}" class="btn btn-outline-dark">View</a></td>
        </tr>
        @empty
        <tr>
          <td colspan="5" class="text-center">Pas de produit</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

</div>
</div>
@endsection

