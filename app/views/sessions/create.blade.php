@extends('layouts.default')

@section('content')
	<div class="row">
		<div class="col-md-5 regForm">
		    @include('layouts.partials.errors')
			{{ Form::open(['route' => 'login_path']) }}
				<h1 style="color:#990000;">Sign In</h1>
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
					{{ Form::submit('Sign In', ['class' => 'btn btn-success']) }}
					{{-- link_to('/password/remind', 'Reset Your Password', ['class' => 'password_reset']) --}}
				</div>
			{{ Form::close() }}
		</div>
		<img class= "col-md-6 loginImage" src="images/misc/chair.jpg">
	</div>
	<html>
   
</html>

