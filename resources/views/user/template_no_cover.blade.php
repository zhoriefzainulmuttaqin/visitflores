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

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header page-section dark" data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container-fluid">
					<div class="header-row">
						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="{{ url('/') }}" class="ps-2">
								<img class="logo-default py-1" srcset="{{ url('assets/logo-dark.png') }}" src="{{ url('assets/logo-dark.png') }}" alt="Logo Visit Cirebon">
								<img class="logo-dark py-1" srcset="{{ url('assets/logo-light.png') }}" src="{{ url('assets/logo-light.png') }}" alt="Logo Visit Cirebon">
							</a>
						</div><!-- #logo end -->

                        <div class="header-misc ms-auto justify-content-lg-end">
							<!-- Primary Navigation
							============================================= -->
							<nav class="primary-menu d-none d-sm-none d-md-none d-lg-block d-xl-block">
								<ul class="menu-container one-page-menu">
									<li class="menu-item"><a class="menu-link" href="{{ url('/') }}"><div>Home</div></a></li>
									<li class="menu-item"><a class="menu-link" href="{{ url('wisata') }}"><div>Wisata</div></a></li>
									<li class="menu-item"><a class="menu-link" href="{{ url('event') }}"><div>Event</div></a></li>
									<li class="menu-item"><a class="menu-link" href="{{ url('kuliner') }}"><div>Kuliner</div></a></li>
									<li class="menu-item"><a class="menu-link" href="{{ url('oleh-oleh') }}"><div>Oleh - oleh</div></a></li>
									<!-- <li class="menu-item"><a class="menu-link" href="{{ url('berita') }}"><div>Berita</div></a></li> -->
									<li class="menu-item">
										<a class="menu-link" href="#">
											<div>
												Layanan
												<i class="bi-caret-down-fill text-smaller d-none d-lg-inline-block d-lg-inline-block d-xl-inline-block me-0"></i>
											</div>
										</a>
										<ul class="sub-menu-container mega-menu-dropdown p-lg-0">
											<li class="menu-item">
												<a class="menu-link" href="{{ url('layanan-produk') }}"><div>Produk</div></a>
											</li>
											<li class="menu-item">
												<a class="menu-link" href="{{ url('layanan-jasa') }}"><div>Jasa</div></a>
											</li>
										</ul>
									</li>
								</ul>

							</nav><!-- #primary-menu end -->
							<!-- Top Notif
							============================================= -->
							<!-- <div id="top-notif" class="header-misc-icon">
								<a href="#"><i class="bi-bell"></i><span class="top-cart-number bg-danger">0</span></a>								
							</div> -->
							<!-- #top-notif end -->
							<!-- Top Cart
							============================================= -->
							<!-- <div id="top-cart" class="header-misc-icon">
								<a href="#" id="top-cart-trigger">
									<i class="bi-cart"></i>
									<span class="top-cart-number bg-danger">0</span>
								</a>
							</div> -->
							<!-- #top-cart end -->
							@if(Auth()->check())
							<a href="{{ url('profil') }}" class="btn btn-danger btn-sm ms-3 d-none d-md-block d-lg-block">
								<i class="uil-user"></i>
								Profil
							</a>
							@else
							<a href="{{ url('login') }}" class="btn btn-danger btn-sm ms-3 d-none d-md-block d-lg-block">
								<i class="uil-signin"></i>
								Login
							</a>
							@endif
							
						</div>
						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu d-block d-sm-block d-md-block d-lg-none d-xl-none">

							<ul class="menu-container">
							<li class="menu-item"><a class="menu-link" href="{{ url('/') }}"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('wisata') }}"><div>Wisata</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('event') }}"><div>Event</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('kuliner') }}"><div>Kuliner</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('oleh-oleh') }}"><div>Oleh - oleh</div></a></li>
								<!-- <li class="menu-item"><a class="menu-link" href="{{ url('berita') }}"><div>Berita</div></a></li> -->
								<li class="menu-item">
									<a class="menu-link" href="#">
										<div>
											Layanan
											<i class="bi-caret-down-fill text-smaller d-none d-lg-inline-block d-lg-inline-block d-xl-inline-block me-0"></i>
										</div>
									</a>
									<ul class="sub-menu-container mega-menu-dropdown p-lg-0">
										<li class="menu-item">
											<a class="menu-link" href="{{ url('layanan-produk') }}"><div>Produk</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="{{ url('layanan-jasa') }}"><div>Jasa</div></a>
										</li>
									</ul>
								</li>
								<li class="menu-item d-block d-md-none d-xl-none mb-3">
									<a class="menu-link btn btn-danger btn-sm" href="{{ url('login') }}" data-href="#section-buy">
										<div>
											<i class="uil-signin"></i>
											Login
										</div>
									</a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->
						

                        

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

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

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-4">

									<div class="widget">

										<img src="{{ url('images/logo.png') }}" alt="Image" class="footer-logo">

										<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

										<div style="background: url('<?= url('canvas/images/world-map.png') ?>') no-repeat center center; background-size: 100%;">
											<address>
												<strong>Headquarters:</strong><br>
												795 Folsom Ave, Suite 600<br>
												San Francisco, CA 94107<br>
											</address>
											<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
											<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
											<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
										</div>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget widget_links">

										<h4>Blogroll</h4>

										<ul>
											<li><a href="https://codex.wordpress.org/">Documentation</a></li>
											<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="https://wordpress.org/support/">Support Forums</a></li>
											<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
											<li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
											<li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
										</ul>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget">
										<h4>Recent Posts</h4>

										<div class="posts-sm row col-mb-30" id="post-list-footer">
											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="row col-mb-50">
								<div class="col-md-4 col-lg-12">
									<div class="widget">

										<div class="row col-mb-30">
											<div class="col-lg-6">
												<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
												<h5 class="mb-0">Total Downloads</h5>
											</div>

											<div class="col-lg-6">
												<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
												<h5 class="mb-0">Clients</h5>
											</div>
										</div>

									</div>
								</div>

								<div class="col-md-5 col-lg-12">
									<div class="widget subscribe-widget">
										<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
										<div class="widget-subscribe-form-result"></div>
										<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
											<div class="input-group mx-auto">
												<div class="input-group-text"><i class="bi-envelope-plus"></i></div>
												<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
												<button class="btn btn-success" type="submit">Subscribe</button>
											</div>
										</form>
									</div>
								</div>

								<div class="col-md-3 col-lg-12">
									<div class="widget">

										<div class="row col-mb-30">
											<div class="col-6 col-md-12 col-lg-6 d-flex align-items-center">
												<a href="#" class="social-icon text-white border-transparent bg-facebook me-2 mb-0 float-none">
													<i class="fa-brands fa-facebook-f"></i>
													<i class="fa-brands fa-facebook-f"></i>
												</a>
												<a href="#" class="ms-1"><small class="d-block"><strong>Like Us</strong><br>on Facebook</small></a>
											</div>
											<div class="col-6 col-md-12 col-lg-6 d-flex align-items-center">
												<a href="#" class="social-icon text-white border-transparent bg-rss me-2 mb-0 float-none">
													<i class="fa-solid fa-rss"></i>
													<i class="fa-solid fa-rss"></i>
												</a>
												<a href="#" class="ms-1"><small class="d-block"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
											</div>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-start">
							Copyrights &copy; 2023 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-end">
							<div class="d-flex justify-content-center justify-content-md-end mb-2">
								<a href="#" class="social-icon border-transparent si-small h-bg-facebook">
									<i class="fa-brands fa-facebook-f"></i>
									<i class="fa-brands fa-facebook-f"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-twitter">
									<i class="fa-brands fa-twitter"></i>
									<i class="fa-brands fa-twitter"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-google">
									<i class="fa-brands fa-google"></i>
									<i class="fa-brands fa-google"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-pinterest">
									<i class="fa-brands fa-pinterest-p"></i>
									<i class="fa-brands fa-pinterest-p"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-vimeo">
									<i class="fa-brands fa-vimeo-v"></i>
									<i class="fa-brands fa-vimeo-v"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-github">
									<i class="fa-brands fa-github"></i>
									<i class="fa-brands fa-github"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small h-bg-yahoo">
									<i class="fa-brands fa-yahoo"></i>
									<i class="fa-brands fa-yahoo"></i>
								</a>

								<a href="#" class="social-icon border-transparent si-small me-0 h-bg-linkedin">
									<i class="fa-brands fa-linkedin"></i>
									<i class="fa-brands fa-linkedin"></i>
								</a>
							</div>

							<i class="bi-envelope"></i> info@canvas.com <span class="middot">&middot;</span> <i class="fa-solid fa-phone"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="bi-skype"></i> CanvasOnSkype
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<!-- <div id="gotoTop" class="uil uil-angle-up"></div> -->
	<a href="https://wa.me/6285156878608" target="_blank" id="chatWA">
		<img src="{{ url('assets/logo-wa.png') }}" width="60px" class="rounded-circle">
	</a>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ url('js/jquery-3.7.1.min.js') }}"></script>
	<script src="{{ url('canvas') }}/js/plugins.min.js"></script>
	<script src="{{ url('canvas') }}/js/functions.bundle.js"></script>

	@yield("script")

</body>
</html>