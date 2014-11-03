<!DOCTYPE html>
<html>
<head>
	<title></title>
	{{ HTML::style('css/boostrap.min.css') }}
	{{ HTML::style('css/main.css') }}
	{{ HTML::style('fonts/roboto.css') }}
</head>
<body>
	@include('layouts.partials.nav')

	<div class='container'>
		@include('flash::message')

		@yield('content')
	</div>
	{{ HTML::script('js/jquery-1.11.0.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	<script>
    	$('#flash-overlay-modal').modal();

    	$('.comments__create-form').on('keydown', function(e) {
    	    if(e.keyCode == 13) {
    	        e.preventDefault();
    	        $(this).submit();
    	    }
    	});
	</script>
</body>
</html>