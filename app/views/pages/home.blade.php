@extends('layouts.default')

@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img {{-- First carousel image --}}
                class="slide-image"
                src="{{ Image::url("images/misc/table1.png", 3000, 750, ['crop']) }}"
                alt="ANTEEK"
            />
            <div class="container">
                <div class="carousel-caption">
                    <h2 class= "logo">ANTEEK</h2>
                </div>
            </div>
        </div>

        <div class="item">
            <img {{-- Second carousel image --}}
                class="slide-image"
                src="{{ Image::url("images/misc/table3.png", 3000, 510, ['crop']) }}"
                alt="ANTEEK"
            />
            <div class="2caption">
                <div class="carousel-caption carousel-caption5">
                   <a href="https://www.facebook.com/AnteekFurniture"> <img src="images/misc/facebook.png"></a>
                    <a href="https://twitter.com/AnteekFurniture"><img src="images/misc/twitter.png"></a>
                    <img src="images/misc/instagram2.png">
                </div>
            </div>
        </div>
2
        <div class="item">
            <img {{-- Third carousel image --}}
                class="slide-image opintionated"
                src="{{ Image::url("images/misc/table2.jpg", 3000, 800, ['crop']) }}"
                alt="ANTEEK"
            />
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

<div class="part2">
    <div class="statementHeader">Mission Statement</div>

    <div class="missionStatement">
        “Anteek offers you an elegant looking,user 
        <br>friendly platform for buying and selling antique
        <br> furniture, It’s a treasure trove for Collectors, dealers
        <br> and antique enthusiasts.”</div>
 </div>

<div class ="listings">
    @if ($recentProducts->get()->first())
        <h3 class="listingsHeading">Recent Listings</h3>
        @foreach ($recentProducts->get()->chunk(4) as $productSet)
            <div class="row row-no-top-margin">
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
</div>
@stop
