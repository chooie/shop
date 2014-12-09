@extends('layouts.default')

@section('content')
    <h1>{{ $user->username }}</h1>
    <p>Number of Products on Sale: {{ $user->products()->count() }}</p>

    @foreach ($userProducts->chunk(4) as $productSet)
        <div class="row row-no-top-margin">
            @foreach ($productSet as $product)
                <div class="col-md-3">
                    @include('products.partials.productOnUserProfile')
                </div>
            @endforeach
        </div>
    @endforeach
@stop