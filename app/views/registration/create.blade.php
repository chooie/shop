@extends('layouts.default')

@section('content')
<div class="row">


	<div class=" regForm col-md-6">
		<h1 style="color:#990000;">ANTEEK</h1>
		@include('layouts.partials.errors')
		
		{{ Form::open(['route' => 'register_path']) }}
			<div class="form-group">
				{{ Form::label('username', 'Username:') }}
				{{ Form::text('username', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', ['class' => 'form-control']) }}
			</div>

			<div class="form-group">
				{{ Form::label('password_confirmation', 'Password Confirmation:') }}
				{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
            </div>

            @include('layouts.partials.recaptcha')

			<div class="form-group signUpButton">
				{{ Form::submit('SIGN UP', ['class' => 'btn btn-success']) }}
			</div>
		{{ Form::close() }}
	</div>


	 
</div>

<html>
    <body id="bg_cover " background="http://i.huffpost.com/gen/1311792/thumbs/o-VINTAGE-FURNITURE-facebook.jpg" />
</html>

@stop