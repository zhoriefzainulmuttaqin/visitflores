<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="{{ config('app.name') }}">
	<meta name="description" content="{{ config('app.name') }} - {{ config('app.slogan') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="{{ url('canvas') }}/style.css">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{ url('canvas') }}/css/font-icons.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ url('canvas') }}/css/custom.css">
	<link rel="stylesheet" href="{{ url('css/style-visit.css') }}">

	<!-- Document Title
	============================================= -->
	<link href="{{ url('images/logosaja.png') }}" rel="icon" type="image/png">
	<title>@yield("title") | {{ config("app.name") }} - {{ config('app.slogan') }}</title>

	@yield("style")

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		{{ view("user.header") }}

		<section id="slider" class="slider-element slider-parallax min-vh-20 min-vh-md-40 dark include-header" style="background: url(<?= url('assets/header_cover.jpg') ?>) center center no-repeat; background-size: cover">
			<div class="slider-inner">

				<div class="vertical-middle slider-element-fade">
					<div class="container-fluid py-5">
						<div class="heading-block text-center border-bottom-0">
							<!-- <h1>Starter's Guide to create Landing Pages</h1>
							<span>Building a Landing Page was never so Easy &amp; Interactive</span> -->
						</div>						
					</div>
				</div>

			</div>
		</section>

		
		<!-- Content
		============================================= -->
		<section id="content">
			@yield("content")
		</section><!-- #content end -->

		{{ view("user.footer") }}

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<!-- <div id="gotoTop" class="uil uil-angle-up"></div> -->
	<a href="https://wa.me/<?= str_replace("+","",getOption('cs_phone')) ?>" target="_blank" id="chatWA">
		<img src="{{ url('assets/logo-wa.png') }}" width="50px" class="rounded-circle">
	</a>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ url('js/jquery-3.7.1.min.js') }}"></script>
	<script src="{{ url('canvas') }}/js/plugins.min.js"></script>
	<script src="{{ url('canvas') }}/js/functions.bundle.js"></script>

	@yield("script")

</body>
</html>