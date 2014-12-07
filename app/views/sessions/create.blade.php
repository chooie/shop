@extends('layouts.default')

@section('content')
	<h1>Sign In</h1>
	
	<div class="row">
		<div class="col-md-6">
		    @include('layouts.partials.errors')
			{{ Form::open(['route' => 'login_path']) }}
				<div class="form-group">
					{{ Form::label('email', 'Email:') }}
					{{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
				</div>

				<div class="form-group">
					{{ Form::label('password', 'Password:') }}
					{{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
				</div>

                @include('layouts.partials.recaptcha')

				<div class="form-group">
					{{ Form::submit('Sign In', ['class' => 'btn btn-primary']) }}
					{{-- link_to('/password/remind', 'Reset Your Password', ['class' => 'password_reset']) --}}
				</div>
			{{ Form::close() }}
		</div>
	</div>
	<html>
    <body id="bg_cover " background="http://www.faccents.com/img/antiques-1.jpg" />
</html>

@stop