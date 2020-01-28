@extends('layouts.menu', ['title' => 'SHOP'])

@section('content')
<div class="row align-items-shop">

    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 item-shop">
        <img class="text-center item-content-shop" src="{{ $product->image }}">
        <br>{{ $product->name }}<br>{{ $product->formattedPrice() }}
      </div>
      {{ $product->description }}
      <form action="{{ route('cart.store') }}" method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{ $product->id }}">
      <button type="submit" class="blackred-btn">AJOUTER AU PANIER</button>
    </form>
@endsection

