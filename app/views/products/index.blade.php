@extends('layouts.default')

@section('content')
    @foreach ($products->chunk(4) as $productSet)
        <div class="row">
            @foreach ($productSet as $product)
            <div class="col-md-3">
                @include('products.partials.productInfo')
            </div>
            @endforeach
        </div>
    @endforeach
{{ $products->links() }}
@stop