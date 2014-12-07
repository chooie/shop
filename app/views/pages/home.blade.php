@extends('layouts.default')

@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img class="slide-image" src="http://placehold.it/1200x315" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>“Anteek offers you an elegant looking, user friendly platform for selling antique
                    furniture. It’s a treasure trove for collectors, dealers and antique enthusiasts.”</h1>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="slide-image" src="http://placehold.it/1200x315" alt="">
        </div>
        <div class="item">
            <img class="slide-image" src="http://placehold.it/1200x315" alt="">
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
@if ($recentProducts->get()->first())
    <h2>Recent Activity</h2>
    @foreach ($recentProducts->get()->chunk(4) as $productSet)
        <div class="row">
            @foreach ($productSet as $product)
                <div class="col-md-3">
                    @include('products.partials.productInfo')
                </div>
            @endforeach
        </div>
    @endforeach
@else
<h2>There are no products :(</h2>
@endif
@stop