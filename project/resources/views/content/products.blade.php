@extends('master')
@section('main_content')
<div class="row">
    <div class="col-md-12">
        <h1>{{ str_replace('Melamed |', '', $title) }}</h1>

    </div>
</div>

@if( !empty($products) )
<div class="row">
    @foreach( $products as $product )
    <div class="col-md-6">
        <h3>{{$product['title']}}</h3>
        <p><img src="{{ asset('images/products/' . $product['image'] ) }}" width="200"></p>
        <p>{!! $product['article'] !!}</p>
        <p><b>price on site</b>{{ $product['price'] }}$</p>
        <p>
            @if( !Cart::get($product['id']) )
            <input data-id="{{ $product['id'] }}" class="btn btn-success add_to_cart_btn" type="button"
                id="{{ $product['id'] }}" value="+ Add to cart">
            @else
            <input class="btn btn-success add_to_cart_btn" type="button" value="in cart" disabled>
            @endif
            <a href="{{ url('shop/' . $cat_url . '/' . $product['url']) }}" class="btn btn-primary">More Details</a>
        </p>
    </div>
    @endforeach
</div>
@endif

@endsection