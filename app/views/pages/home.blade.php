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
@stop