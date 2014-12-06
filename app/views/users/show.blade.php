@extends('layouts.default')

@section('content')
    <p>{{ $user->username }}</p>
    @foreach($user->products()->get() as $product)
        @include('products.partials.productOnUserProfile')
    @endforeach
@stop