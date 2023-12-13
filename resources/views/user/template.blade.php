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

        <style>
            .click-me a {
                color: #ffffff;
                padding: 5px 20px;
                background: rgb(255 255 255 / 20%);
                border-radius: 50px;
            }

            /* Adsense style popup */
            svg {
                width: 1.2em;
                height: 1.2em;
            }

            div#ad_position_box button {
                background: transparent;
                border: unset;
                font-size: 20px;
                cursor: pointer;
            }

            .flex-row {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            div#ad_position_box {
                display: none;
                align-items: center;
                justify-content: center;
                height: 100%;
                width: 100%;
                position: fixed;
                top: 50%;
                transform: translateY(-50%);
                backdrop-filter: blur(50px);
                z-index: 99999;
            }

            div#ad_position_box.active {
                display: flex;
            }

            div#ad_position_box .card {
                background: #fff;
                padding: 10px 24px 25px;
                border-radius: 6px;
                position: relative;
                box-shadow: 0px 8px 12px rgb(60 64 67 / 15%), 0px 4px 4px rgb(60 64 67 / 30%);
            }

            .ad-content {
                display: block;
                box-shadow: 0px 10px 22px rgb(0 0 0 / 65%);
            }

            .ad-content img {
                display: block;
                width: %;
            }
        </style>


        <!-- Content
  ============================================= -->

        {{-- <div class="popup-wrapper " id="popup">
            <a href="https://visitcirebon.id/layanan-produk/tourism-card">
                <div class="popup-container" style="">
                </div>
                <a class="popup-close" href="#popup">X</a>
            </a>
        </div> --}}

        <div class="container">
            <div class="click-me"><a href="#">Click Me</a></div>
        </div>
        <div id="ad_position_box">
            <div class="card">
                <div class="top-row flex-row">
                    <div class="colmun">
                        <span id="countdown" style="font-size: 15px">Iklan</span>
                    </div>
                    <div class="colmun">

                        <button class="skip" style="color: #ce0a0a">Close</button>
                    </div>
                </div>
                <div class="ad-content d-none d-lg-block" style="width: 50%; height: 50%; margin:auto;">
                    <a href="https://visitcirebon.id/layanan-produk/tourism-card">
                        <img src="assets/iklanTourismNotAvailable.png" alt="ad">
                    </a>
                </div>
                <div class="ad-content d-block d-lg-none" style="width: 100%; height: 100%; margin:auto;">
                    <a href="https://visitcirebon.id/layanan-produk/tourism-card">
                        <img src="assets/iklanTourismNotAvailable.png" alt="ad">
                    </a>
                </div>
            </div>
        </div>



        {{-- iklan atas --}}
        <style>
            .sliderIklan .owl-dots {
                display: none !important;
            }
        </style>

        <section id="content" style="margin-top:-100px">
            <div class="container-fluid d-none d-lg-block">
                <div class="sliderIklan" style="margin-top: 6.3rem;">
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
                <div class="sliderIklan" style="margin-top: 85px; margin-bottom: -15px;">
                    <div id="oc-images" class="owl-carousel image-carousel  carousel-widget" data-items-xs="1"
                        data-items-sm="1" data-items-lg="1" data-items-xl="1" data-autoplay="3000"
                        data-loop="true">
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
        </section>
        <!-- #content end -->

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
    <script>
      window.onload = function() {
    // Set a timeout of 15 seconds before triggering the ad
    setTimeout(function() {
        $(".click-me a").trigger("click");
        startCountdown();
    }, 15000);
};

$(".click-me a").click(function() {
    $("#ad_position_box").addClass("active");
    setTimeout(function() {
        $("#ad_position_box").slideUp();
    }, 15000);
    startCountdown();
});

$(".skip").click(function() {
    $("#ad_position_box").removeClass("active");
});

function startCountdown() {
    // Waktu dalam detik untuk 48 jam
    var countdownTime = 48 * 60 * 60;

    var countdownElement = document.getElementById("countdown");

    function updateCountdown() {
        var hours = Math.floor(countdownTime / 3600);
        var minutes = Math.floor((countdownTime % 3600) / 60);
        var seconds = countdownTime % 60;

        // Format waktu ke format "HH:MM:SS"
        // var formattedTime = hours + " jam " + minutes + " menit " + seconds + " detik";

        countdownElement.textContent = "Available " + formattedTime + " Soon";

        if (countdownTime > 0) {
            countdownTime--;
            setTimeout(updateCountdown, 1000); // Perbarui setiap 1 detik
        }
    }

    updateCountdown();
}

    </script>
    @yield('script')

</body>

</html>
