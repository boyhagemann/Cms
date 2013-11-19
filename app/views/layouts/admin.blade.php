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

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">


	</div>
</nav>

<!-- Container -->
<div class="container">

        @if($navbar)
	<div class="row">            
            <div class="col-lg-12 page-header">
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

{{ $tools }}

<!-- Javascripts
================================================== -->
{{ javascript_include_tag() }}

</body>
</html>

