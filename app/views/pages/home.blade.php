@extends('layouts.default')

@section('content')
<div class="jumbotron" style="text-align: center">
	<h1>Welcome!</h1>
	<p>
        “Anteek offers you an elegant looking, user friendly platform for selling antique
        furniture. It’s a treasure trove for collectors, dealers and antique enthusiasts.”
	</p>
	@if ( ! $currentUser)
		<p>
		    {{ link_to_route('register_path', 'Sign Up', null, ['class' => 'btn btn-lg btn-primary']) }}
		</p>
	@endif
</div>
@if ($recentProducts->get()->first())
    <h2>Recent Activity</h2>
    @foreach ($recentProducts->get()->chunk(4) as $productSet)
        <div class="row users">
            @foreach ($productSet as $product)
                <div class="col-md-3 user-block">

                    <h4 class="user-block-username">
                        {{ link_to_route('products.show', $product->name, $product->id) }}
                    </h4>
                    <p>Price: {{ $product->price }}</p>
                    <p>First Posted: {{ $product->created_at }}</p>
                    <p>Recent Activity: {{ $product->updated_at }}</p>
                    <p>Sold by: {{ $product->user()->first()->username }}</p>
                </div>
            @endforeach
        </div>
    @endforeach
@else
<h2>There are no products :(</h2>
@endif
@stop