@extends('layouts.default')

@section('content')
<div class="jumbotron">
	<h1>Welcome to the Shop!</h1>
	@if ( ! $currentUser)
		<p>
			{{-- link_to_route('register_path', 'Sign Up', null, ['class' => 'btn btn-lg btn-primary']) --}}
		</p>
	@endif
</div>
@if ($recentProducts->get()->first())
    @foreach ($recentProducts->get() as $product)
        @include('products.partials.productInfo')
    @endforeach
@else
<h2>There are no products :(</h2>
@endif
@stop