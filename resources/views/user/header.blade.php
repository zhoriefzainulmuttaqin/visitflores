<?php
use Illuminate\Support\Facades\App;
$locale = App::currentLocale();
?>
<!-- Header
============================================= -->
<link rel="stylesheet" href="style.css">

<style>
    .header-misc {
        display: flex;
        align-items: center;
    }

    .primary-menu-trigger {
        /* margin-right: 10px; */
        /* Adjust as needed */
    }

    .language-selector {
        position: relative;
    }

    .language-selector .sub-menu-container {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: white;
        /* Adjust to match your theme */
        padding: 10px;
        border-radius: 5px;
        width: 8em;
        color: #1b1b1b;
    }

    .language-selector:hover .sub-menu-container {
        display: block;
    }

    .primary-menu .sub-menu-container {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        /* Adjust to match your theme */
        padding: 10px;
        border-radius: 5px;
    }

    .primary-menu .menu-item:hover .sub-menu-container {
        display: block;
    }

    .primary-menu.d-lg-none .sub-menu-container {
        position: static;
        display: none;
        background-color: transparent;
        padding: 0;
    }

    .primary-menu.d-lg-none .menu-item:hover .sub-menu-container {
        display: block;
    }
</style>
<header id="header" class=" page-section dark shadow-lg" style="opacity: 0.8; z-index: 9999999999;">
    <div id="header-wrap">
        <div class="container-fluid">
            <div class="header-row">
                <!-- Logo -->
                <div class="d-none d-md-block" id="logo" style="display: flex; ">
                    <a href="{{ url('/') }}" class="ps-2 d-flex">

                        <img class="logo-default py-1"
                            srcset="{{ url('assets/visit-light-nobg.png') }} {{ url('assets/visit-light-nobg.png') }}"
                            src="{{ url('assets/visit-light-nobg.png') }}" alt="Logo UJICOBANTT">
                        <img src="{{ url('assets/wiputih.png') }}" alt=""
                            style="height: 50px; width: auto; margin: 0 10px;">
                        <!-- Sesuaikan ukuran dan margin sesuai kebutuhan -->
                        <img class="logo-dark py-1" srcset="{{ url('assets/logo-light.png') }}"
                            src=" {{ url('assets/logo-light.png') }}" alt="Logo UJICOBANTT">
                    </a>
                </div>
                <div class="d-block d-md-none" id="logo" style="display: flex; ">
                    <a href="{{ url('/') }}" class=" d-flex">


                        <img class="mt-auto mb-auto" src="{{ url('assets/wiputih.png') }}" alt="Wonderful Indonesia"
                            style="height: 0.8em !important;">
                        <!-- Sesuaikan ukuran dan margin sesuai kebutuhan -->
                        <img class="rounded " srcset="{{ url('assets/logo-light.png') }}"
                            src=" {{ url('assets/logo-light.png') }}" alt="Logo UJICOBA" style="height: 0.8em; ">
                        <!-- Sesuaikan ukuran dan margin sesuai kebutuhan -->
                    </a>

                </div>

                <div class="header-misc ms-auto d-flex align-items-center">
                    <!-- Primary Navigation (Desktop) -->
                    <nav class="primary-menu d-none d-lg-block">
                        <ul class="menu-container one-page-menu">
                            <li class="menu-item"><a class="menu-link" href="{{ url('/') }}">
                                    <div>Home</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ url('wisata') }}">
                                    <div>{{ __('menu.destinations') }}</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ url('event') }}">
                                    <div>{{ __('menu.events') }}</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ url('kuliner') }}">
                                    <div>{{ __('menu.culinaries') }}</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ url('oleh-oleh') }}">
                                    <div>{{ __('menu.souvenirs') }}</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ url('akomodasi') }}">
                                    <div>{{ __('menu.accomodations') }}</div>
                                </a></li>
                            <li class="menu-item">
                                <a class="menu-link" href="#">
                                    <div>
                                        {{ __('menu.services') }}
                                        <i
                                            class="bi-caret-down-fill text-smaller d-none d-lg-inline-block d-lg-inline-block d-xl-inline-block me-0"></i>
                                    </div>
                                </a>
                                <ul class="sub-menu-container mega-menu-dropdown p-lg-0">
                                    <li class="menu-item">
                                        <a class="menu-link text-dark" href="{{ url('layanan-produk') }}">
                                            <div>{{ __('menu.service_products') }}</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link text-dark" href="{{ url('layanan-jasa') }}">
                                            <div>{{ __('menu.our_services') }}</div>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-item">
                                <a class="menu-link" href="#">
                                    <div class="d-flex">
                                        @if (App::isLocale('id'))
                                            <img src="https://cdn-icons-png.flaticon.com/128/11654/11654463.png"
                                                alt="Indonesia" style="height: 2em;">
                                        @else
                                            <img src="https://cdn-icons-png.flaticon.com/128/323/323329.png"
                                                alt="English" style="height: 2em;">
                                        @endif
                                        <i class="bi-caret-down-fill text-smaller me-0"></i>
                                    </div>
                                </a>
                                <ul class="sub-menu-container p-lg-0">
                                    <li class="menu-item"><a class="menu-link" href="{{ url('atur-bahasa/id') }}">
                                            <div class="d-flex">
                                                <img class=" mt-auto mb-auto"
                                                    src="https://cdn-icons-png.flaticon.com/128/11654/11654463.png"
                                                    alt="indonesia" style="height: 2em;">
                                                <span class="ms-2 text-dark">Bahasa</span>
                                            </div>
                                        </a></li>
                                    <li class="menu-item"><a class="menu-link" href="{{ url('atur-bahasa/en') }}">
                                            <div class="d-flex">
                                                <img class=" mt-auto mb-auto"
                                                    src="https://cdn-icons-png.flaticon.com/128/323/323329.png"
                                                    alt="english" style="height: 2em;">
                                                <span class="ms-2 text-dark">English</span>
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>

                    @if (Auth()->check())
                        <a href="{{ url('profil') }}"
                            class="btn btn-danger btn-sm ms-3 d-none d-md-block d-lg-block">
                            <i class="uil-user"></i>
                            {{ __('menu.profile') }}
                        </a>
                    @else
                        <a href="{{ url('login') }}"
                            class="btn btn-danger btn-sm ms-3 d-none d-md-block d-lg-block">
                            <i class="uil-signin"></i>
                            {{ __('menu.login') }}
                        </a>
                    @endif
                    <!-- Mobile Menu Trigger & Language Selector -->
                    <div class="d-flex align-items-center d-lg-none">
                        <div class="primary-menu-trigger ">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>
                        <div class="language-selector">
                            <a class="menu-link" href="#">
                                <div class="d-flex">
                                    @if (App::isLocale('id'))
                                        <img src="https://cdn-icons-png.flaticon.com/128/11654/11654463.png"
                                            alt="Indonesia" style="height: 2em;">
                                    @else
                                        <img src="https://cdn-icons-png.flaticon.com/128/323/323329.png"
                                            alt="English" style="height: 2em;">
                                    @endif
                                    <i class="bi-caret-down-fill text-smaller me-0"></i>
                                </div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item"><a class="menu-link" href="{{ url('atur-bahasa/id') }}">
                                        <div class="d-flex"><img class="mt-auto mb-auto" style="height: 1.5em;"
                                                src="https://cdn-icons-png.flaticon.com/128/11654/11654463.png"
                                                alt="indonesia">
                                            <p class="ms-2 text-dark mt-auto mb-auto">Bahasa</p>
                                        </div>
                                    </a></li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ url('atur-bahasa/en') }}">
                                        <div class="d-flex">
                                            <img class="mt-auto mb-auto" style="height: 1.5em;"
                                                src="https://cdn-icons-png.flaticon.com/128/323/323329.png"
                                                alt="english">
                                            <p class="ms-2 text-dark mt-auto mb-auto">English</p>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Primary Navigation (Mobile) -->
                <nav class="primary-menu d-lg-none">
                    <ul class="menu-container">
                        <li class="menu-item"><a class="menu-link" href="{{ url('/') }}">
                                <div>Home</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ url('wisata') }}">
                                <div>{{ __('menu.destinations') }}</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ url('event') }}">
                                <div>{{ __('menu.events') }}</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ url('kuliner') }}">
                                <div>{{ __('menu.culinaries') }}</div>
                            </a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ url('oleh-oleh') }}">
                                <div>{{ __('menu.souvenirs') }}</div>
                            </a></li>
                        <!-- <li class="menu-item"><a class="menu-link" href="{{ url('berita') }}"><div>Berita</div></a></li> -->
                        <li class="menu-item"><a class="menu-link" href="{{ url('akomodasi') }}">
                                <div>{{ __('menu.accomodations') }}</div>
                            </a></li>
                        <li class="menu-item">
                            <a class="menu-link" href="#">
                                <div>
                                    {{ __('menu.services') }}
                                    <i
                                        class="bi-caret-down-fill text-smaller d-none d-lg-inline-block d-lg-inline-block d-xl-inline-block me-0"></i>
                                </div>
                            </a>
                            <ul class="sub-menu-container mega-menu-dropdown p-lg-0">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ url('layanan-produk') }}">
                                        <div>{{ __('menu.service_products') }}</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ url('layanan-jasa') }}">
                                        <div>{{ __('menu.our_services') }}</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @if (Auth()->check())
                            <li class="menu-item d-block d-md-none d-xl-none mb-3">
                                <a class="menu-link btn btn-danger btn-sm" href="{{ url('profil') }}">
                                    <div>
                                        <i class="uil-user"></i>
                                        {{ __('menu.profile') }}
                                    </div>
                                </a>
                            </li>
                        @else
                            <li class="menu-item d-block d-md-none d-xl-none mb-3">
                                <a class="menu-link btn btn-danger btn-sm" href="{{ url('login') }}">
                                    <div>
                                        <i class="uil-signin"></i>
                                        {{ __('menu.login') }}
                                    </div>
                                </a>
                            </li>
                        @endif
                    </ul>

                </nav>
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>
