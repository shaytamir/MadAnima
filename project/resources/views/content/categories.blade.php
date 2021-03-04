@extends('master')
@section('main_content')
<div class="row">
    <div class="col-md-12">
        <h1>MelamedAnimation Shop Categories</h1>




    </div>
</div>
<div class="row">

    @foreach($categories as $categorie)
    <div class="col-md-4 col-sm-6">
        <h3>{{$categorie['title']}}</h3>
        <p class="category_img_p"><img src="{{asset('images/categories/' . $categorie['image'])}}" alt=""></p>
        <p>{!! $categorie['article'] !!}</p>
        <p>
            <!-- <input type="button" class="btn btn-success" value="+add to cart" /> -->
            <a href="{{url('shop/' . $categorie['url']) }}" class="btn btn-primary">View Products</a>
        </p>
    </div>
    @endForeach
</div>

@endsection
