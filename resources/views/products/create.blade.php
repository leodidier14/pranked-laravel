@extends('layouts.menu', ['title' => 'AJOUTER ITEM'])

@section('content')
<form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">

    <div class="form-group">
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Nom">
    </div>

    <div class="custom-file">
        <input type="file" name="image" class="custom-file-input" id="image">
        <label class="custom-file-label" for="image">Choose file...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
      </div>

      <div class="form-group">
        <label for="price">Prix</label>
        <input type="text" class="form-control" id="price" placeholder="Prix">
      </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>

@endsection

