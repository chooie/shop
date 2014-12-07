@extends('layouts.default')

@section('content')
    <h1>{{ $user->username }}</h1>
    <p>Number of Products on Sale: {{ $user->products()->count() }}</p>
    @foreach($user->products()->get() as $product)
        @include('products.partials.productOnUserProfile')
    @endforeach

    {{--@foreach ($user->products()->chunk(4) as $productSet)
        <div class="row users">
            @foreach ($productSet as $product)
                <div class="col-md-3 user-block">
                    @include('products.partials.productOnUserProfile')
                </div>
            @endforeach
        </div>
    @endforeach
    --}}
@stop