<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
            {{ link_to_route('home', 'Anteek', null, ['class' => 'navbar-brand']) }}
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<ul class="nav navbar-nav">
				<li>{{ link_to_route('users.index', 'Browse Users', null, null) }}</li>
                @if ($categories)
                   <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Product Categories<span class="caret"></span>
                     </a>
                      <ul class="dropdown-menu" role="menu">
                        @foreach($categories as $category)
                            <li>{{ link_to_route('products_by_category_path', $category->category, $category->category) }}</li>
                       @endforeach
                     </ul>
                   </li>
                @endif
			</ul>

			<ul class="nav navbar-nav navbar-right">
			@if ($currentUser)
			    <li>{{ link_to_route('products.create', 'Add Item') }}</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img class="nav-gravatar" src="{{ $currentUser->present()->gravatar() }}" 
							 alt=" $currentUser->username }}">

						{{ $currentUser->username }} <span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>{{ link_to_route('users.show', 'Your Profile', $currentUser->username) }}</li>
						<li class="divider"></li>
						<li>{{ link_to_route('logout_path', 'Logout') }}</li>
					</ul>
				</li>
			@else
				<li>{{ link_to_route('register_path', 'Register') }}</li>
				<li>{{ link_to_route('login_path', 'Login') }}</li>
			@endif
			</ul>
		</div>
	</div>
	<script>
(function ($) {
  $(document).ready(function(){
    
	// hide .navbar first
	$(".navbar").hide();
	
	// fade in .navbar
	$(function () {
		$(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
			if ($(this).scrollTop() > 1000) {
				$('.navbar').fadeIn();
			} else {
				$('.navbar').fadeOut();
			}
		});

	
	});

});
  }(jQuery));
</script>
</nav>
