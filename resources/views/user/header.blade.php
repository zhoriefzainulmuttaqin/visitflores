<?php
use Illuminate\Support\Facades\App;
$locale = App::currentLocale();
?>
<!-- Header
============================================= -->
<link rel="stylesheet" href="style.css">
<header id="header" class="transparent-header page-section dark" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container-fluid">
            <div class="header-row">
                <!-- Logo
                ============================================= -->

                <div id="logo">
                    <a href="{{ url('/') }}" class="ps-2">
                        <img class="logo-default py-1" srcset="{{ url('assets/logo-dark.png') }}"
                            src="{{ url('assets/logo-dark.png') }}" alt="Logo Visit Cirebon">
                        <img class="logo-dark py-1" srcset="{{ url('assets/logo-light.png') }}"
                            src="{{ url('assets/logo-light.png') }}" alt="Logo Visit Cirebon">
                    </a>
                </div><!-- #logo end -->

                <div class="header-misc ms-auto justify-content-lg-end">
                    <!-- Primary Navigation
                    ============================================= -->
                    <nav class="primary-menu d-none d-sm-none d-md-none d-lg-block d-xl-block">
                        <ul class="menu-container one-page-menu">
                            <li class="menu-item"><a class="menu-link" href="{{ url('/') }}">
                                    <div>Home</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ url('wisata') }}">
                                    <div>Wisata</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ url('event') }}">
                                    <div>Event</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ url('kuliner') }}">
                                    <div>Kuliner</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ url('oleh-oleh') }}">
                                    <div>Oleh - oleh</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ url('akomodasi') }}">
                                    <div>Akomodasi</div>
                                </a></li>
                            <!-- <li class="menu-item"><a class="menu-link" href="{{ url('berita') }}"><div>Berita</div></a></li> -->
                            <li class="menu-item">

                                @if (App::isLocale('id'))
                                    <a class="menu-link" href="{{ url('atur-bahasa/en') }}">
                                        <div>English</div>
                                    </a>
                                @else
                                    <a class="menu-link" href="{{ url('atur-bahasa/id') }}">
                                        <div>Indonesia</div>
                                    </a>
                                @endif
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="#">
                                    <div>
                                        Layanan
                                        <i
                                            class="bi-caret-down-fill text-smaller d-none d-lg-inline-block d-lg-inline-block d-xl-inline-block me-0"></i>
                                    </div>
                                </a>
                                <ul class="sub-menu-container mega-menu-dropdown p-lg-0">
                                    <li class="menu-item">
                                        <a class="menu-link" href="{{ url('layanan-produk') }}">
                                            <div>Produk</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="{{ url('layanan-jasa') }}">
                                            <div>Jasa</div>
                                        </a>
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
                    @if (Auth()->check())
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
                        <li class="menu-item"><a class="menu-link" href="{{ url('/') }}">
                                <div>Home</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ url('wisata') }}">
                                <div>Wisata</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ url('event') }}">
                                <div>Event</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ url('kuliner') }}">
                                <div>Kuliner</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ url('oleh-oleh') }}">
                                <div>Oleh - oleh</div>
                            </a></li>
                        <!-- <li class="menu-item"><a class="menu-link" href="{{ url('berita') }}"><div>Berita</div></a></li> -->
                        <li class="menu-item"><a class="menu-link" href="{{ url('akomodasi') }}">
                                <div>Akomodasi</div>
                            </a></li>
                        <li class="menu-item">
                            <a class="menu-link" href="#">
                                <div>
                                    Layanan
                                    <i
                                        class="bi-caret-down-fill text-smaller d-none d-lg-inline-block d-lg-inline-block d-xl-inline-block me-0"></i>
                                </div>
                            </a>
                            <ul class="sub-menu-container mega-menu-dropdown p-lg-0">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ url('layanan-produk') }}">
                                        <div>Produk</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ url('layanan-jasa') }}">
                                        <div>Jasa</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @if (Auth()->check())
                            <li class="menu-item d-block d-md-none d-xl-none mb-3">
                                <a class="menu-link btn btn-danger btn-sm" href="{{ url('profil') }}">
                                    <div>
                                        <i class="uil-user"></i>
                                        Profil
                                    </div>
                                </a>
                            </li>
                        @else
                            <li class="menu-item d-block d-md-none d-xl-none mb-3">
                                <a class="menu-link btn btn-danger btn-sm" href="{{ url('login') }}">
                                    <div>
                                        <i class="uil-signin"></i>
                                        Login
                                    </div>
                                </a>
                            </li>
                        @endif
                    </ul>

                </nav><!-- #primary-menu end -->
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
