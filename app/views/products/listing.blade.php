@extends('layouts.default')

@section('content')
    <ul>
        @foreach ($products as $product)
            @include('products.partials.productInfo')
        @endforeach
    </ul>
@stop