@extends('layouts.default')

@section('content')
    <?= 'Test'; ?>
    <ul>
        @foreach ($products as $product)
            @include('products.partials.productInfo')
        @endforeach
    </ul>
@stop