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
        
            <img class="slide-image" src="http://stpaulhaus.files.wordpress.com/2013/02/image28.jpg" alt="">
             <h2>ANTEEK</h2>

    
             

           <!--  <div class="container">
                <div class="carousel-caption">
                    <h1>“Anteek offers you an elegant looking, user friendly platform for selling antique
                    furniture. It’s a treasure trove for collectors, dealers and antique enthusiasts.”</h1>
                </div>
            </div> -->
        </div>
        <div class="item">
            <img class="slide-image" src="http://www.inessa.com/blog/wp-content/uploads/2013/02/479957_548576075174849_250895956_n.jpg" alt="">
        </div>
        <div class="item">
            <img class="slide-image" src="http://www.carrocel.com/images/sce/IMG_4108_Original_Final.jpg" alt="">
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<div class ="listings">
@if ($recentProducts->get()->first())
    <h3>Recent Listings</h3>
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
</div>
