@extends('master')
@section('main_content')
<div class="row">
    <div class="col-md-12">
        <h1>{{ $product['title'] }}</h1>
        <p><img width="500" src="{{asset('images/products/' .$product['image']) }}" alt=""></p>
        <p>{!! $product['article'] !!}</p>
        <p><b>price on site</b>{{ $product['price'] }}$</p>
        <p>{{ $product['id'] }}</p>
        <p>
            @if( !Cart::get($product['id']) )
            <input data-id="{{ $product['id'] }}" class="btn btn-success add_to_cart_btn" type="button"
                id="{{ $product['id'] }}" value="+ Add to cart">
            @else
            <input class="btn btn-success add_to_cart_btn" type="button" value="in cart" disabled>
            @endif
            <a href="{{ url('shop/chechout') }}" class="btn btn-primary">Checkout</a>
        </p>
    </div>
</div>
@endsection