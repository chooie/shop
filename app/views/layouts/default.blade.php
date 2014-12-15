<!DOCTYPE html>
<html>
<head>
	<title></title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/main.css') }}
	{{ HTML::style('fonts/roboto.css') }}
</head>
<body>
	@include('layouts.partials.nav')

	<div class='container'>
	    <div class="below-nav">
            @include('flash::message')
        </div>

		@yield('content')
	</div>

	@include('layouts.partials.footer')

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
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-57582095-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>