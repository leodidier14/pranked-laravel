@extends('layouts.menu', ['title' => 'SHOP'])

@section('content')
<div class="row align-items-shop">
    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 item-shop">
        <div style="background-color:grey"><img src="https://cdn.shopify.com/s/files/1/0277/2202/2987/products/TEE_360x.png?v=1573687645" alt="" height="200px;"></div>
        <div style="background-color:red "><img src="https://cdn.shopify.com/s/files/1/0277/2202/2987/products/TEE_360x.png?v=1573687645" alt="" height="200px;"></div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 item-shop" style="background-color:green ">
        <img class="text-center item-content-shop" src="{{ $product->image }}">
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 item-shop" style="background-color:purple ">
        <br>{{ $product->name }}<br>{{ $product->formattedPrice() }}
      {{ $product->description }}
      <form action="{{ route('cart.store') }}" method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{ $product->id }}">
      <button type="submit" class="blackred-btn">AJOUTER AU PANIER</button>
    </form>
    </div>
@endsection

