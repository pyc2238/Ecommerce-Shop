@extends('front.master')
@section('title','Detail Page')
@section('content')

<div class="container">
    <br><br>
    <div class="row">

        @foreach($products as $product)

        <div class="col-md-6 col-xs-12">
            <div class="thumbnail">
                <img src="{{ url('images',$product->image) }}" class="card-img">
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <h2><?php echo ucwords($product->pro_name);?></h2>
            <h5>{{ $product->pro_name }}</h5>
            <h2 class="text-danger">$ {{ $product->spl_price }}</h2>
            <p><b>Avilable : {{ $product->stock }} In Stock</b></p>
            <button class="btn btn-default btn-sm">
                Add To Cart
            </button>
            <br><br>
            <button class="btn btn-default btn-sm">
                WishList
            </button>
        </div>
        @endforeach



    </div>




</div>

@endsection