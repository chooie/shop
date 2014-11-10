@extends('layouts.default')

@section('content')
<div class="row">
	<div class="col-md-6">
		<h1>Post your Product!</h1>

		@include('layouts.partials.errors')

		{{ Form::open(['route' => 'products.create']) }}
			<div class="form-group">
				{{ Form::label('name', 'Product name:') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('price', 'Price') }}
				{{ Form::text('price', null, ['class' => 'form-control',
				                              'type' => 'number',
				                              'min' => '0']) }}
			</div>

			<div class="form-group">
				{{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
			</div>
		{{ Form::close() }}
	<div>
</div>
@stop