@extends('layouts.menu', ['title' => 'SHOP'])

@section('extra-script')
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

    <script src="https://unpkg.com/swiper/js/swiper.js"></script>

@endsection

@section('content')
<div class="row align-items-shop">
    {{-- <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 item-shop">
        @foreach (json_decode($product->images, true) as $image)
            <div style=""><img src="{{ asset('storage/' . $image) }}" alt="" height="200px;"></div>
        @endforeach

    </div> --}}

    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 item-shop">
        {{-- <img class="text-center item-content-shop" src="{{ asset('storage/' . $product->image) }}"> --}}
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"> <img height="300px" width="500px" src="{{ asset('storage/' . $product->image) }}"></div>
                @foreach (json_decode($product->images, true) as $image)
                    <div class="swiper-slide"><img src="{{ asset('storage/' . $image) }}" alt="" height="300px" width="500px"></div>
                @endforeach
            </div>

            <!-- Add Pagination -->
            {{-- <div class="swiper-pagination"></div>

            <!-- Add Arrows -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> --}}
          </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 item-shop">
        <br>{{ $product->name }}<br>{{ $product->formattedPrice() }}
        <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <select name="product_size">
                @foreach ($product->sizes as $size)
                    <option>{{ $size->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="blackred-btn">AJOUTER AU PANIER</button>
        </form>
        <br>{{ $product->description }}<br>
        @foreach ($product->styles as $style)
         <option>{{ $style->name }}</option>
        @endforeach
    </div>
@endsection

@section('extra-js')
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
      effect: 'flip',
      grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    </script>
@endsection
