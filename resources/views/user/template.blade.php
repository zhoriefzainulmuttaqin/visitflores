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
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{{ url('canvas') }}/style.css">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{{ url('canvas') }}/css/font-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('canvas') }}/css/custom.css">
    <link rel="stylesheet" href="{{ url('css/style-visit.css') }}">

    <!-- Document Title
 ============================================= -->
    <link href="{{ url('assets/logosaja.png') }}" rel="icon" type="image/png">
    <title>@yield('title') | {{ config('app.name') }} - {{ config('app.slogan') }}</title>

    @yield('style')

</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper">
        <?php
        $segments = Request::segments();
        ?>
        {{ view('user.header') }}
        @if ($segments == null)
            <section id="slider" class="slider-element slider-parallax min-vh-35 min-vh-md-100 dark include-header"
                style="background: url(@yield('cover'))  no-repeat; background-size: 100%;margin-bottom:0px; background-position: center center;">
            @else
                <section id="slider"
                    class="slider-element slider-parallax min-vh-40 min-vh-md-100 dark include-header"
                    style="background: url(@yield('cover'))  no-repeat; background-size: cover;margin-bottom:0px; background-position: center center;">
        @endif
        <div class="slider-inner">

            <div class="vertical-middle slider-element-fade">
                <div class="container-fluid py-5">
                    <div class="heading-block text-center border-bottom-0 mt-6 mt-md-0">
                        @if ($segments == null)
                            <img src="{{ url('assets/logo-light.png') }}" id="logo-on-header">
                            <p class="text-white d-none d-md-block display-6" style="font-size: 20px;">
                                {{ strtoupper(__('home.portal_text')) }} <br>
                                (CIREBON KUNINGAN INDRAMAYU MAJALENGKA)
                            </p>
                            <p class="text-white d-block d-md-none" style="font-size:7px; margin-top: -1rem;">
                                {{ strtoupper(__('home.portal_text')) }} <br>
                                (CIREBON KUNINGAN INDRAMAYU MAJALENGKA)
                            </p>
                            <div class="language">
                                <a href="{{ url('atur-bahasa/id') }}"
                                    class="btn text-center bg-btn-language but_lang1">
                                    BAHASA INDONESIA
                                </a>
                                <a href="{{ url('atur-bahasa/en') }}"
                                    class="btn text-center bg-btn-language but_lang2">
                                    ENGLISH
                                </a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>

        </div>
        </section>



        <!-- Content
  ============================================= -->
        <style>
            .sliderIklan .owl-dots {
                display: none !important;
            }
        </style>

        <section id="content" style="margin-top:-100px">
            <div class="container-fluid d-none d-lg-block">
                <div class="sliderIklan" style="margin-top: 7rem;">
                    <div id="oc-images" class="owl-carousel image-carousel  carousel-widget mb-4" data-items-xs="2"
                        data-items-sm="1" data-items-lg="1" data-items-xl="1" data-autoplay="3000" data-loop="true">
                        <div class="oc-item">
                            <img src="/assets/slider1.png" alt="" style=" height: 10rem; width: cover;">
                        </div>
                        <div class="oc-item">
                            <img src="/assets/slider2.png" alt="" style=" height: 10rem; width: cover;">
                        </div>
                        <div class="oc-item">
                            <img src="/assets/slider3.png" alt="" style=" height: 10rem; width: cover;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid d-block d-lg-none">
                <div class="sliderIklan" style="margin-top: 6.5em !important;">
                    <div id="oc-images" class="owl-carousel image-carousel  carousel-widget" data-items-xs="1"
                        data-items-sm="1" data-items-lg="1" data-items-xl="1" data-autoplay="3000" data-loop="true">
                        <div class="oc-item">
                            <img src="/assets/slider1.png" alt="" style=" height: 4rem; width: cover;">
                        </div>
                        <div class="oc-item">
                            <img src="/assets/slider2.png" alt="" style=" height: 4rem; width: cover;">
                        </div>
                        <div class="oc-item">
                            <img src="/assets/slider3.png" alt="" style=" height: 4rem; width: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Iklan Atas --}}
        <section>
            @yield('content')
        </section><!-- #content end -->

        {{ view('user.footer') }}

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <!-- <div id="gotoTop" class="uil uil-angle-up"></div> -->

    <!-- <a href="https://wa.me/<?= str_replace('+', '', getOption('cs_phone')) ?>" target="_blank" id="chatWA">
  <img src="{{ url('assets/logo-wa.png') }}" width="50px" class="rounded-circle">
 </a> -->
    <div class="whatsapp-button">
        <a href="https://wa.me/<?= str_replace('+', '', getOption('cs_phone')) ?>?text=Halo, saya ingin diskusi tentang Visit Cirebon."
            target="_blank">
            <img src="{{ url('assets/logo-wa.png') }}" alt="WhatsApp">
        </a>
    </div>

    <!-- JavaScripts
 ============================================= -->
    <script src="{{ url('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ url('canvas') }}/js/plugins.min.js"></script>
    <script src="{{ url('canvas') }}/js/functions.bundle.js"></script>

    @yield('script')

</body>

</html>
