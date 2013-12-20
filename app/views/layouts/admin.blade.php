<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8" />
	<title>Default</title>
	<meta name="keywords" content="your, awesome, keywords, here" />
	<meta name="author" content="Jon Doe" />
	<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS
	================================================== -->
	{{ stylesheet_link_tag() }}


	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
</head>

<body>

	<nav id="nav-favorites">
		<a href="#favorites">Menu</a>
	</nav>

	<div>


		@if(1 == 2)
		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="col-lg-12">
					{{ $top }}
				</div>
			</div>
		</nav>
		@endif

		@if($jumbotron)
		<div class="jumbotron">
			<div class="container">
				{{ $jumbotron }}
			</div>
		</div>
		@endif


		<!-- Container -->
		<div class="container">

			@if($navbar)
			<div class="row admin-navbar">
				<div class="col-lg-12">
					{{ $navbar }}
				</div>
			</div>
			@endif

			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

			<div class="row">

				@if($sidebar)
				<div class="col-lg-9">{{ $content }}</div>
				<div class="col-lg-3">{{ $sidebar }}</div>
				@else
				<div class="col-lg-12">{{ $content }}</div>
				@endif
			</div>


		</div>

		<!-- ./ container -->

		<nav id="favorites">
			{{ $favorites }}
		</nav>

		{{ $tools }}

		<!-- Javascripts
		================================================== -->
		{{ javascript_include_tag() }}

	</div>

</body>
</html>

