@extends('layouts.menu', ['title' => 'SHOP'])

@section('content')
<div class="row align-items-shop">

    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 item-shop">
    <a href="{{ route('products.show', $product->slug) }}">
        <img class="text-center item-content-shop" src="{{ $product->image }}">
        <br>{{ $product->name }}<br>{{ $product->formattedPrice() }}
    </a>
      </div>
      {{ $product->description }}
@endsection

