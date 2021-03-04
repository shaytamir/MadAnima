@extends('master')
@section('main_content')
<div class="row">
    <div class="col-md-12">
        <h1>Shop Checkout Page</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @if($cart)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Sub Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>
                        <input name="{{ $item['id'] }}" data-id=" {{ $item['id'] }} " type="button" value="-"
                            class="update_cart">
                        <input type="text" value="{{$item['quantity']}}" class="text-center" size="1">
                        <input name="{{ $item['id'] }}" data-id="{{ $item['id'] }}" type="button" value="+"
                            class="update_cart">
                    </td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['quantity']*$item['price'] }}$</td>
                    <td class="text-center">
                        <a href="{{ url('shop/remove-item/' . $item['id']) }}">
                            <img class="icon_trash" src="{{ asset('images/icons/trash-blue.png') }}" alt="trash">
                        </a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <p>
            <b>total in cart: </b>{{ Cart::getTotal() }}
            <span class="float-end">
                <a class="btn btn-secondary" href="{{ url('shop/clear-cart') }}">Clear cart</a>
            </span>
        </p>
        <p>
            <a class="btn btn-primary" href="{{ url('shop/order') }}">Order Now</a>
        </p>
        @else
        <p><i>No items in cart</i></p>
        @endif
    </div>
</div>
@endsection