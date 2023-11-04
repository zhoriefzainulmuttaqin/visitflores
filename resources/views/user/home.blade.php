@extends('user.template')



@section('title')
    Home
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('canvas') }}/css/components/bs-rating.css">
    <link rel="stylesheet" href="{{ url('swiperjs/swiper-bundle.min.css') }}" />
    <style>
        #home-event-container {
            background-image: url("<?= url('assets/ellipse.png') ?>");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 100px;
            padding-bottom: 300px;
        }

        @media (max-width: 768px) {
            #home-event-container {
                padding-top: 30px;
                padding-bottom: 40px;
                margin-top: -5.1rem;
                display: inline;
            }


        }
    </style>
    <!-- Demo styles -->
    <style>
        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
        }

        @media (max-width: 768px) {
            .swiper-slide img {
                /* display: block; */
                width: 100px !important;
                height: 10rem !important;
            }
        }
    </style>
@endsection

@section('cover')
    <?= url('assets/gedung.png') ?>
@endsection

@section('content')
    <div class="container-fluid d-none d-lg-block">
        <div class="row justify-content-center py-5">
            <div class="col-md-4">
                <div class="row justify-content-center">
                    <div class="col-md-2 align-items-center">
                        <img src="{{ url('assets/phone.png') }}" width="95%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-7 align-self-center">
                        <b>{{ __("home.highlight_title_web") }}</b> <br>
                        {{ __("home.highlight_description_web") }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center">
                    <div class="col-md-2 align-items-center">
                        <img src="{{ url('assets/event.png') }}" width="95%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-7 align-self-center">
                        <b>{{ __("home.highlight_title_events") }}</b> <br>
                        {{ __("home.highlight_description_events") }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center">
                    <div class="col-md-2 align-items-center">
                        <img src="{{ url('assets/360.png') }}" width="95%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-7 align-self-center">
                        <b>{!! __("home.highlight_title_destination_360") !!}</b> <br>
                        {{ __("home.highlight_description_destination_360") }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- css event --}}
    <style>
        #but_event {
            width: 800px;
            height: 100px;
            font-size: 24px;
            margin-top: 3rem;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 30px;
        }
        .entry-title h3 {
        max-height: 3em;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        }

        @media (max-width: 768px) {

            #but_event {
                width: 15rem;
                height: 50px;
                font-size: 16px;
                font-weight: 500;
                margin-top: -3rem;
                margin-left: auto;
                margin-right: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 5px;

            }


        }
    </style>
    {{-- end css event --}}

    <div id="home-event-container">
        <div class="container-fluid">
            <h1 class="mb-2 text-center">

                <b>{{ strtoupper(__("home.title_calender_events")) }}</b>
                <!-- <p>                                                                                 {{ __('content.welcome') }}
                            </p> -->

            </h1>
            <div class="d-block d-md-none">
                <div id="oc-images" class="owl-carousel image-carousel carousel-widget mb-6" data-items-xs="2"
                    data-items-sm="2" data-items-lg="3" data-items-xl="5">
                    @foreach ($events as $event)
                        <div class="oc-item" style="max-height: 140px;">
                            <a href="{{ url('event') }}"><img src="{{ url('assets/event/' . $event->cover_picture) }}"
                                    alt="Image 1" style="min-height: fit-content; "></a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-none d-md-block">
                <div class="px-4">
                    <div id="oc-events" class="owl-carousel events-carousel carousel-widget" data-margin="0" data-pagi="true"
                        data-items="2" data-items-md="2" data-items-lg="3" data-items-xl="3">
                        @foreach ($events as $event)
                            <div class="oc-item" >
                                <article class="entry event p-3">
                                    <div
                                        class="grid-inner bg-contrast-0 row g-0 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                        <div class="col-12 mb-md-0">
                                            <a href="{{ url('event') }}" class="entry-image">
                                                <img src="{{ url('assets/event/' . $event->cover_picture) }}" class="rounded-2" style="max-height: 20rem;">
                                            </a>
                                        </div>
                                        <div class="col-12 p-0 p-md-4 pt-0">
                                            <div class="entry-title nott">
                                                @if(App::isLocale("id"))
                                                <h3><a href="{{ url('event') }}">{{ $event->name }}</a></h3>
                                                @else
                                                <h3><a href="{{ url('event') }}">{{ $event->name_en }}</a></h3>
                                                @endif
                                            </div>
                                            <div class="entry-meta no-separator mb-1 mt-0">
                                                <ul>
                                                    <li>
                                                        <a href="{{ url('event') }}" class="text-uppercase fw-medium">
                                                            {{ $event->location }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="entry-content my-3">
                                                <p class="mb-0">
                                                    @if(App::isLocale("id"))
                                                    <b>{{ tglIndo($event->start_date, 'd/m/Y') }}</b>
                                                    @else
                                                    <b>{{ date("d-M-Y",strtotime($event->start_date)) }}</b>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="text-center mt-5 mb-5">
                <a href="{{ url('event') }}" class="btn fs-3 btn-primary text-white bg-btn-visit">
                    {{ __("home.see_all") }} {{ __("home.title_events") }}
                    <i class="bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- css wisata --}}
    <style>
        .image-caption {
            font-size: 22px;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.7);
            /* Adjust the background color and opacity */
            padding: 1.5rem;
            backdrop-filter: blur(5px);
            /* Adjust the blur amount */
        }

        .image-caption p {
            color: white;
            margin: 0;
        }

        .mySwiper2 {
            margin-top: 1rem;
            height: 20rem;
            width: 60rem;;
        }

        .mySwiper2 img {
            height: 20rem;
            width: cover;
        }

        @media (max-width: 768px) {
            #top_wisata {
                margin-bottom: -0.5rem;
                margin-bottom: -0.3rem;

            }

            #but_wisata {
                width: 15rem;
                height: 50px;
                font-size: 16px;
                font-weight: 500;
                margin-top: 2rem;
                margin-left: auto;
                margin-right: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 5px;

            }

            .image-caption {
                font-size: 12px;
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                background: rgba(0, 0, 0, 0.7);
                /* Adjust the background color and opacity */
                padding: 5px;
                backdrop-filter: blur(5px);
                /* Adjust the blur amount */
            }

            .image-caption p {
                color: white;
                margin: 0;
            }

            .mySwiper2 {
                margin-top: 1rem;
                height: 10rem;
                width: 25rem;
            }

            .mySwiper2 img {
                height: 10rem;
                width: cover;
            }

        }
    </style>
    {{-- end css wisata --}}
    <div class="section" id="top_wisata">
        <div class="container">
            <div class="d-none d-md-block">
                <div class="row mb-5">
                    <div class="col-md-7">
                        <h1 class="mb-1">
                            <b>TOP {{ __("home.title_destinations") }}</b>
                        </h1>
                        <div class="text-lg fs-4">
                            {{ __("home.subtitle_destinations") }}
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mt-5">
                            <a href="{{ url('wisata') }}" class="btn btn-primary fs-4 float-end text-white bg-btn-visit">
                                {{ __("home.explore_all") }}
                                <i class="bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-md-none">
                <div class="container text-center" style="margin-top: -3rem;">
                    <b class="h1">TOP {{ __("home.title_destinations") }}</b>
                    <br>
                    <div style="font-size:12px; font-weight:500;">
                        {{ __("home.subtitle_destinations") }}
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <swiper-container class="mySwiper2 d-none d-md-block" id="mySwiper" effect="coverflow" grab-cursor="true" centered-slides="true"
                slides-per-view="2" coverflow-effect-rotate="30" coverflow-effect-stretch="0" coverflow-effect-depth="100"
                coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" loop="true">
                @foreach ($tours as $tour)
                    <swiper-slide class="card">
                        <a href="/wisata" style="text-decoration: none; color: white;">
                            <img src='{{ url("assets/wisata/$tour->picture") }}' />
                            <div class="image-caption">
                                @if(App::isLocale("id"))
                                <b style="font-weight: 800;">{{ $tour->name }}</b>
                                @else
                                <b style="font-weight: 800;">{{ $tour->name_en }}</b>
                                @endif
                            </div>
                        </a>
                    </swiper-slide>
                @endforeach

            </swiper-container>
            <swiper-container class="mySwiper2 d-bloc d-md-none" id="mySwiper" effect="coverflow" grab-cursor="true" centered-slides="true"
                slides-per-view="2" coverflow-effect-rotate="30" coverflow-effect-stretch="0" coverflow-effect-depth="100"
                coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" loop="true">
                @foreach ($tours as $tour)
                    <swiper-slide class="card">
                        <a href="/wisata" style="text-decoration: none; color: white;">
                            <img src='{{ url("assets/wisata/$tour->picture") }}' />
                            <div class="image-caption">
                                @if(App::isLocale("id"))
                                <b style="font-weight: 800;">{{ $tour->name }}</b>
                                @else
                                <b style="font-weight: 800;">{{ $tour->name_en }}</b>
                                @endif
                            </div>
                        </a>
                    </swiper-slide>
                @endforeach

            </swiper-container>
        </div>



        {{-- <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($tours as $tour)
                        <div class="swiper-slide">
                            <img src='{{ url("assets/wisata/$tour->picture") }}' class="img-fluid w-100 h-100">
                            <div class="image-caption">
                                @if(App::isLocale("id"))
                                <b style="font-weight: 800;">{{ $tour->name }}</b>
                                @else
                                <b style="font-weight: 800;">{{ $tour->name_en }}</b>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div> --}}
        <div class="d-block d-md-none">
            <div class="container text-center">
                <a href="{{ url('wisata') }}" class="btn btn-primary text-white bg-btn-visit" id="but_wisata">
                    {{ __("home.explore_all") }} {{ __("home.title_destinations") }}
                    <i class="bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    </div>

    {{-- css kuliner --}}
    <style>
        @media (max-width: 768px) {
            #but_kuliner {
                width: 15rem;
                height: 50px;
                font-size: 16px;
                font-weight: 500;
                margin-top: -1.5rem;
                margin-bottom: -4rem;
                margin-left: auto;
                margin-right: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 5px;
            }

            .event {
                width: 16.5rem;
                /* height: 100%; */
                margin: auto;
            }
        }
    </style>
    {{-- end css kuliner --}}

    <div class="container">
        <div class="d-none d-md-block">
            <div class="row mb-5">
                <div class="col-md-7">
                    <h1 class="mb-1">
                        <b>TOP {{ __("home.title_culinaries") }}</b>
                    </h1>
                    <div class="text-lg fs-4">
                        {{ __("home.subtitle_culinaries") }}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mt-5">
                        <a href="{{ url('kuliner') }}"
                            class="btn btn-primary btn-lg fs-4 float-end text-white bg-btn-visit">
                            {{ __("home.explore_all") }}
                            <i class="bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($culiners as $culiner)
                    <div class="col-md-4 col-lg-4 col-md-9 mb-2">
                        <a href="{{ url('kuliner') }}">
                            <div class="card rounded rounded-3 border-0" style="background-color: transparent">
                                <img id="GProfile" class="card-img-top w-100"
                                    style="border-radius: 20px; width: 360px; height: 560px; object-fit: cover"
                                    src='{{ url("assets/resto/$culiner->picture") }}' alt="{{ $culiner->name }}">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark align-items-end justify-content-start">
                                        <h4 class="mb-0">
                                            <div class="image-caption text-center"
                                                style="background: #000000 transparent; color: #ddd; border-radius: 0 0 20px 20px;">
                                                @if(App::isLocale("id"))
                                                <b style="font-weight: 800;">{{ $culiner->name }}</b>
                                                @else
                                                <b style="font-weight: 800;">{{ $culiner->name_en }}</b>
                                                @endif
                                                <br>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-block d-md-none">
            <div class="container text-center" id="top_kuliner">
                <b class="h1">TOP {{ __("home.title_culinaries") }}</b>
                <br>
                <div style="font-size:12px">
                    {{ __("home.subtitle_culinaries") }}
                </div>
            </div>
            <div id="oc-events" class="owl-carousel events-carousel carousel-widget" data-margin="1" data-pagi="true"
            data-items="1" data-items-md="2" data-items-lg="3" data-items-xl="3" >
                @foreach ($culiners as $culiner)
                    <div class="oc-item">
                        <article class="entry event p-3">
                            <div
                                class="grid-inner bg-contrast-0 row g-0 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                <div class="col-12">
                                    <a href="{{ url('event') }}" class="">
                                        <img src="{{ url('assets/resto/' . $culiner->picture) }}" class="rounded-2">
                                        <div class="image-caption text-center"
                                            style="background: #000000 transparent; color: #ddd; ">
                                            @if(App::isLocale("id"))
                                            <b style="font-weight: 800;">{{ $culiner->name }}</b>
                                            @else
                                            <b style="font-weight: 800;">{{ $culiner->name_en }}</b>
                                            @endif
                                            <br>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
            <div class="container mt-5 text-center">
                <a href="{{ url('kuliner') }}" class="btn btn-primary text-white bg-btn-visit" id="but_kuliner">
                    {{ __("home.explore_all") }} {{ __("home.title_culinaries") }}
                    <i class="bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>


    {{-- css akomodasi --}}
    <style>
        @media (max-width: 768px) {
            #but_akomodasi {
                width: 15rem;
                height: 50px;
                font-size: 14px;
                font-weight: 500;
                margin-top: 2rem;
                margin-bottom: -4rem;
                margin-left: auto;
                margin-right: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 5px;
            }

            .image-caption-akomodasi {
                font-size: 12px;
                text-align: center;
            }

        }
    </style>
    {{-- end css akomodasi --}}

    <div class="section">
        <div class="container mt-4">
            <div class="d-none d-md-block">
                <div class="row mb-5">
                    <div class="col-md-7">
                        <h1 class="mb-1">
                            <b>TOP {{ __("home.title_accommodations") }}</b>
                        </h1>
                        <div class="text-lg fs-4">
                            {{ __("home.subtitle_accommodations") }}
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mt-5">
                            <a href="{{ url('akomodasi') }}"
                                class="btn btn-primary btn-lg fs-4 float-end text-white bg-btn-visit">
                                {{ __("home.explore_all") }}
                                <i class="bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-md-none">
                <div class="container text-center">
                    <b class="h1">TOP {{ __("home.title_accommodations") }}</b>
                    <br>
                    <div style="font-size:12px">
                        {{ __("home.subtitle_accommodations") }}
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <swiper-container class="mySwiper2 d-none d-md-block" id="mySwiper" effect="coverflow" grab-cursor="true"
                centered-slides="true" slides-per-view="2" coverflow-effect-rotate="30" coverflow-effect-stretch="0"
                coverflow-effect-depth="100" coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true"
                loop="true">
                @foreach ($accomodations as $accomodation)
                    <swiper-slide class="card">
                        <a href="/akomodasi" style="text-decoration: none; color: white;">
                            <img src='{{ url("assets/akomodasi/$accomodation->picture") }}' />
                            <div class="image-caption">
                                @if(App::isLocale("id"))
                                <b style="font-weight: 800;">{{ $accomodation->name }}</b>
                                @else
                                <b style="font-weight: 800;">{{ $accomodation->name_en }}</b>
                                @endif
                            </div>
                        </a>
                    </swiper-slide>
                @endforeach

            </swiper-container>
            <swiper-container class="mySwiper2 d-bloc d-md-none" id="mySwiper" effect="coverflow" grab-cursor="true"
            centered-slides="true" slides-per-view="2" coverflow-effect-rotate="30" coverflow-effect-stretch="0"
            coverflow-effect-depth="100" coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true"
            loop="true">
            @foreach ($accomodations as $accomodation)
                <swiper-slide class="card">
                    <a href="/akomodasi" style="text-decoration: none; color: white;">
                        <img src='{{ url("assets/akomodasi/$accomodation->picture") }}' />
                        <div class="image-caption">
                            @if(App::isLocale("id"))
                            <b style="font-weight: 800;">{{ $accomodation->name }}</b>
                            @else
                            <b style="font-weight: 800;">{{ $accomodation->name_en }}</b>
                            @endif
                        </div>
                    </a>
                </swiper-slide>
            @endforeach

        </swiper-container>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
        {{-- <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($accomodations as $accomodation)
                        <div class="swiper-slide">
                            <img src='{{ url("assets/akomodasi/$accomodation->picture") }}'
                                class="img-fluid w-100 h-100">
                            <div class="image-caption-akomodasi">
                                @if(App::isLocale("id"))
                                <b style="font-weight: 800;">{{ $accomodation->name }}</b>
                                @else
                                <b style="font-weight: 800;">{{ $accomodation->name_en }}</b>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div> --}}

        {{-- <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($accomodations as $accomodation)
                        <div class="swiper-slide"
                            style="background-image: url(<?= url('assets/akomodasi/' . $accomodation->picture) ?>) !important;background-size:cover !important;">
                            <!-- <img src='{{ url("assets/wisata/$tour->picture") }}' /> -->

                        </div>
                    @endforeach
                    <div class="swiper-pagination"></div>
                </div>
            </div> --}}
        <div class="d-block d-md-none">
            <div class="container text-center">
                <a href="{{ url('akomodasi') }}" class="btn btn-primary text-white bg-btn-visit" id="but_akomodasi">
                    {{ __("home.explore_all") }} {{ __("home.title_accommodations") }}
                    <i class="bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    </div>

    {{-- css layanan --}}
    <style>
        .teks-layanan {
            font-size: calc(1.275rem + 0.3vw) !important;
        }

        #but_layanan {
            width: 30rem;
            height: 5rem;
            font-size: 22px;
            font-weight: 500;
            margin-top: 0.5rem;
            margin-bottom: -8rem;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            #but_layanan {
                width: 15rem;
                height: 50px;
                font-size: 16px;
                font-weight: 500;
                margin-top: 0.5rem;
                margin-bottom: -10rem;
                margin-left: auto;
                margin-right: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 5px;
            }

            .teks_layanan {
                font-size: 8px;
            }

        }
    </style>
    {{-- end css layanan --}}

    <div class="section">
        <div class="container mt-5 " id="service-floating-card">
            <div class=" container text-center mb-5">
                <b class="h1">{{ __("home.title_service_products") }}</b>
                <br>
                <div class="teks_layanan" style="font-size:12px; margin-top: 1rem; margin-bottom: -2rem;">
                    {{ __("home.subtitle_service_products") }}
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-4 text-center">
                    <img src="{{ url('assets/layanan-produk/tourism-card.png') }}" class="img-fluid" width="100px">
                    <br>
                    <b>Tourism Card</b>
                </div>
                <div class="col-4 text-center">
                    <img src="{{ url('assets/layanan-produk/Ticket.png') }}" class="img-fluid" width="100px">
                    <br>
                    <b>{{ __("services.tour_packages") }}</b>
                </div>
                <div class="col-4 text-center">
                    <img src="{{ url('assets/layanan-produk/collectible.png') }}" class="img-fluid" width="100px">
                    <br>
                    <b>{{ __("services.souvenirs") }}</b>
                </div>
            </div>
            <div class="container mt-5 text-center">
                <a href="{{ url('layanan-produk') }}" class="btn btn-primary text-white bg-btn-visit" id="but_layanan">
                    {{ __("home.explore_all") }}

                    <i class="bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- css berita --}}
    <style>
        @media (max-width: 768px) {
            #but_berita {
                width: 15rem;
                height: 50px;
                font-size: 16px;
                font-weight: 500;
                margin-bottom: 5rem;
                margin-left: auto;
                margin-right: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 5px;
            }
        }
    </style>
    {{-- end css berita --}}

    <div class="container mt-lg-6">
        <div class="row mb-lg-6">
            <div class="col-md-12 text-center">
                <h1 class="mb-5">
                    <b>{{ __("home.title_news") }}</b>
                </h1>
            </div>
        </div>
        <div class="row gx-5 col-mb-80">
            <main class="postcontent col-lg-12">
                <div id="posts" class="row gutter-40">
                    <div class="entry col-12">
                        <div class="grid-inner row g-0">
                            <div class="col-md-4">
                                <div class="entry-image">
                                    <a href='{{ url("assets/berita/{$news[0]->cover_picture}") }}'
                                        data-lightbox="image"><img
                                            src='{{ url("assets/berita/{$news[0]->cover_picture}") }}'
                                            alt="{{ $news[0]->name }}"></a>
                                </div>
                            </div>
                            <div class="col-md-8 ps-md-4">
                                <div class="entry-title title-sm">
                                    <h2>
                                        <a href="{{ url("/detail-berita/{$news[0]->slug}") }}">
                                        @if(App::isLocale("id"))
                                        {{ $news[0]->name }}
                                        @else
                                        {{ $news[0]->name_en }}
                                        @endif
                                        </a>
                                    </h2>
                                </div>
                                @if(App::isLocale("id"))
                                <div class="entry-meta">
                                    <ul>
                                        <li>
                                            <i class="uil uil-schedule"></i>
                                            {{ tglIndo($news[0]->published_date, 'd/m/Y') }}</li>
                                        <li><i class="uil uil-user"></i> {{ $news[0]->admin_name }}</li>
                                        <li><i class="uil uil-folder-open"></i>{{ $news[0]->category_name }}</li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    {!! mb_substr(nl2br($news[0]->content), 0, 50) !!}
                                    <br>
                                    <a href="{{ url("/detail-berita/{$news[0]->slug}") }}" class="more-link">Lanjut
                                        Baca</a>
                                </div>
                                @else
                                <div class="entry-meta">
                                    <ul>
                                        <li>
                                            <i class="uil uil-schedule"></i>
                                            {{ date("d-m-Y",strtotime($news[0]->published_date)) }}
                                        </li>
                                        <li>
                                            <i class="uil uil-user"></i>
                                            {{ $news[0]->admin_name }}
                                        </li>
                                        <li>
                                            <i class="uil uil-folder-open"></i>
                                            {{ $news[0]->category_name_en }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    {!! mb_substr(nl2br($news[0]->content_en), 0, 50) !!}
                                    <br>
                                    <a href="{{ url("/detail-berita/{$news[0]->slug}") }}" class="more-link">
                                    {{ __("home.continue_reading") }}
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="entry col-12">
                        <div class="grid-inner row g-0">
                            <div class="col-md-4 order-md-last">
                                <div class="entry-image">
                                    <a href="{{ url("assets/berita/{$news[1]->cover_picture}") }}"
                                        data-lightbox="image"><img
                                            src="{{ url("assets/berita/{$news[1]->cover_picture}") }}"
                                            alt="{{ $news[1]->name }}"></a>
                                </div>
                            </div>
                            <div class="col-md-8 pe-md-4">
                                <div class="entry-title title-sm">
                                    <h2><a href="{{ url("/detail-berita/{$news[1]->slug}") }}">
                                        @if(App::isLocale("id"))
                                        {{ $news[1]->name }}
                                        @else
                                        {{ $news[1]->name_en }}
                                        @endif
                                </a>
                                    </h2>
                                </div>
                                @if(App::isLocale("id"))
                                <div class="entry-meta">
                                    <ul>
                                        <li>
                                            <i class="uil uil-schedule"></i>
                                            {{ tglIndo($news[1]->published_date, 'd/m/Y') }}</li>
                                        <li><i class="uil uil-user"></i> {{ $news[1]->admin_name }}</li>
                                        <li><i class="uil uil-folder-open"></i>{{ $news[1]->category_name }}</li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    {!! mb_substr(nl2br($news[1]->content), 0, 50) !!}
                                    <br>
                                    <a href="{{ url("/detail-berita/{$news[1]->slug}") }}" class="more-link">Lanjut
                                        Baca</a>
                                </div>
                                @else
                                <div class="entry-meta">
                                    <ul>
                                        <li>
                                            <i class="uil uil-schedule"></i>
                                            {{ date("d-m-Y",strtotime($news[1]->published_date)) }}
                                        </li>
                                        <li>
                                            <i class="uil uil-user"></i>
                                            {{ $news[1]->admin_name }}
                                        </li>
                                        <li>
                                            <i class="uil uil-folder-open"></i>
                                            {{ $news[1]->category_name_en }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    {!! mb_substr(nl2br($news[1]->content_en), 0, 50) !!}
                                    <br>
                                    <a href="{{ url("/detail-berita/{$news[1]->slug}") }}" class="more-link">
                                    {{ __("home.continue_reading") }}
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="entry col-12">
                        <div class="grid-inner row g-0">
                            <div class="col-md-4">
                                <div class="entry-image">
                                    <a href='{{ url("assets/berita/{$news[2]->cover_picture}") }}'
                                        data-lightbox="image"><img
                                            src='{{ url("assets/berita/{$news[2]->cover_picture}") }}'
                                            alt="{{ $news[2]->name }}"></a>
                                </div>
                            </div>
                            <div class="col-md-8 ps-md-4">
                                <div class="entry-title title-sm">
                                    <h2><a href="{{ url("/detail-berita/{$news[2]->slug}") }}">
                                        @if(App::isLocale("id"))
                                        {{ $news[2]->name }}
                                        @else
                                        {{ $news[2]->name_en }}
                                        @endif
                                </a>
                                    </h2>
                                </div>
                                @if(App::isLocale("id"))
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="uil uil-schedule"></i>
                                            {{ tglIndo($news[2]->published_date, 'd/m/Y') }}</li>
                                        <li><i class="uil uil-user"></i> {{ $news[2]->admin_name }}</li>
                                        <li><i class="uil uil-folder-open"></i>{{ $news[2]->category_name }}</li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    {!! mb_substr(nl2br($news[2]->content), 0, 50) !!}
                                    <br>
                                    <a href="{{ url("/detail-berita/{$news[2]->slug}") }}" class="more-link">Lanjut
                                        Baca</a>
                                </div>
                                @else
                                <div class="entry-meta">
                                    <ul>
                                        <li>
                                            <i class="uil uil-schedule"></i>
                                            {{ date("d-m-Y",strtotime($news[2]->published_date)) }}
                                        </li>
                                        <li>
                                            <i class="uil uil-user"></i>
                                            {{ $news[2]->admin_name }}
                                        </li>
                                        <li>
                                            <i class="uil uil-folder-open"></i>
                                            {{ $news[2]->category_name_en }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    {!! mb_substr(nl2br($news[2]->content_en), 0, 50) !!}
                                    <br>
                                    <a href="{{ url("/detail-berita/{$news[2]->slug}") }}" class="more-link">
                                    {{ __("home.continue_reading") }}
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="mt-5"></div>
    <div class="mt-5"></div>
    <br><br>
    <div class="container mt-5 text-center">
        <a href="{{ url('berita') }}" class="btn btn-primary text-white bg-btn-visit" id="but_berita">
            {{ __("home.explore_all") }} {{ __("home.title_news_general") }}
            <i class="bi-arrow-right"></i>
        </a>
    </div>


    {{-- <div class="container mt-lg-6">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-12">
                <div class="owl-carousel carousel-widget owl-loaded owl-drag with-carousel-dots" data-items="1"
                    data-items-md="3" data-autoplay="5000">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-383px, 0px, 0px); transition: all 0.25s ease 0s; width: 1149px;">
                            <div class="owl-item" style="width: 363px; margin-right: 20px;">
                                <div class="p-2">
                                    <div class="card text-center rounded-6 shadow-sm overflow-hidden">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <img class="rounded-circle mx-auto w-auto mb-4"
                                                        src="{{ url('assets/profil/user_default.png') }}" width="64"
                                                        height="64" alt="Customer Testimonails">
                                                    <div
                                                        class="rating-container theme-krajee-svg rating-md rating-animate">
                                                        <div class="rating-stars" tabindex="0"><span
                                                                class="empty-stars"><span class="star"
                                                                    title="One Star"><span
                                                                        class="bi-star"></span></span><span class="star"
                                                                    title="Two Stars"><span
                                                                        class="bi-star"></span></span><span class="star"
                                                                    title="Three Stars"><span
                                                                        class="bi-star"></span></span><span class="star"
                                                                    title="Four Stars"><span
                                                                        class="bi-star"></span></span><span class="star"
                                                                    title="Five Stars"><span
                                                                        class="bi-star"></span></span></span><span
                                                                class="filled-stars" style="width: 100%;"><span
                                                                    class="star" title="One Star"><span
                                                                        class="bi-star-fill"></span></span><span
                                                                    class="star" title="Two Stars"><span
                                                                        class="bi-star-fill"></span></span><span
                                                                    class="star" title="Three Stars"><span
                                                                        class="bi-star-fill"></span></span><span
                                                                    class="star" title="Four Stars"><span
                                                                        class="bi-star-fill"></span></span><span
                                                                    class="star" title="Five Stars"><span
                                                                        class="bi-star-fill"></span></span></span></div>
                                                    </div>
                                                    <p class="mb-4 font-secondary"
                                                        style="font-size: 1.125rem; line-height: 1.65;">Pelayanan yang
                                                        bagus, cepat, dan dapat dipercaya. Senang bisa menggunakan produk
                                                        tourism card, membantu segala hal dalam kuliner,wisata, dan oleh
                                                        oleh</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 fw-medium">Yusuf</h4>
                                                        <small class="text-muted">yusuf123@gmail.com</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-icon bi-star-fill op-02"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 363px; margin-right: 20px;">
                                <div class="p-2">
                                    <div class="card text-center rounded-6 shadow-sm overflow-hidden">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <img class="rounded-circle mx-auto w-auto mb-4"
                                                        src="{{ url('assets/profil/user_default.png') }}" width="64"
                                                        height="64" alt="Customer Testimonails">
                                                    <div
                                                        class="rating-container theme-krajee-svg rating-md rating-animate">
                                                        <div class="rating-stars" tabindex="0"><span
                                                                class="empty-stars"><span class="star"
                                                                    title="One Star"><span
                                                                        class="bi-star"></span></span><span class="star"
                                                                    title="Two Stars"><span
                                                                        class="bi-star"></span></span><span class="star"
                                                                    title="Three Stars"><span
                                                                        class="bi-star"></span></span><span class="star"
                                                                    title="Four Stars"><span
                                                                        class="bi-star"></span></span><span class="star"
                                                                    title="Five Stars"><span
                                                                        class="bi-star"></span></span></span><span
                                                                class="filled-stars" style="width: 100%;"><span
                                                                    class="star" title="One Star"><span
                                                                        class="bi-star-fill"></span></span><span
                                                                    class="star" title="Two Stars"><span
                                                                        class="bi-star-fill"></span></span><span
                                                                    class="star" title="Three Stars"><span
                                                                        class="bi-star-fill"></span></span><span
                                                                    class="star" title="Four Stars"><span
                                                                        class="bi-star-fill"></span></span><span
                                                                    class="star" title="Five Stars"><span
                                                                        class="bi-star-fill"></span></span></span></div>
                                                    </div>
                                                    <p class="mb-4 font-secondary"
                                                        style="font-size: 1.125rem; line-height: 1.65;">Antarmukanya
                                                        sederhana dan user-friendly sehingga mudah digunakan bagi saya
                                                        wisatawan dari luar jawa yang ingin menikmati wisata dan kebudayaan
                                                        disini.</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 fw-medium">Nabila</h4>
                                                        <small class="text-muted">nabila14@gmail.com</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-icon bi-star-fill op-02"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 363px; margin-right: 20px;">
                                <div class="p-2">
                                    <div class="card text-center rounded-6 shadow-sm overflow-hidden">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <img class="rounded-circle mx-auto w-auto mb-4"
                                                        src="{{ url('assets/profil/user_default.png') }}" width="64"
                                                        height="64" alt="Customer Testimonails">
                                                    <div
                                                        class="rating-container theme-krajee-svg rating-md rating-animate">
                                                        <div class="rating-stars" tabindex="0"><span
                                                                class="empty-stars"><span class="star"
                                                                    title="One Star"><span
                                                                        class="bi-star"></span></span><span class="star"
                                                                    title="Two Stars"><span
                                                                        class="bi-star"></span></span><span class="star"
                                                                    title="Three Stars"><span
                                                                        class="bi-star"></span></span><span class="star"
                                                                    title="Four Stars"><span
                                                                        class="bi-star"></span></span><span class="star"
                                                                    title="Five Stars"><span
                                                                        class="bi-star"></span></span></span><span
                                                                class="filled-stars" style="width: 100%;"><span
                                                                    class="star" title="One Star"><span
                                                                        class="bi-star-fill"></span></span><span
                                                                    class="star" title="Two Stars"><span
                                                                        class="bi-star-fill"></span></span><span
                                                                    class="star" title="Three Stars"><span
                                                                        class="bi-star-fill"></span></span><span
                                                                    class="star" title="Four Stars"><span
                                                                        class="bi-star-fill"></span></span><span
                                                                    class="star" title="Five Stars"><span
                                                                        class="bi-star-fill"></span></span></span></div>
                                                    </div>
                                                    <p class="mb-4 font-secondary"
                                                        style="font-size: 1.125rem; line-height: 1.65;">Asik dan
                                                        menyenangkan sekali menggunakan produk tourism card, bisa
                                                        menggunakannya dengan fleksibel mau ke kuliner, wisata ataupun
                                                        oleh-oleh. Sangat membantu, terima kasih.</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 fw-medium">Arnold</h4>
                                                        <small class="text-muted">arnold22@gmail.com</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-icon bi-star-fill op-02"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                class="uil uil-angle-left-b"></i></button><button type="button" role="presentation"
                            class="owl-next disabled"><i class="uil uil-angle-right-b"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="section" style="margin-bottom:0px">
        <h3 class="text-center">{{ __("home.supported_by") }}</h3>
        <div class="container text-center">
            <div id="oc-clients" class="owl-carousel image-carousel carousel-widget justify-content-center"
                data-margin="30" data-nav="true" data-pagi="true" data-autoplay="5000" data-items-xs="3"
                data-items-sm="3" data-items-md="6" data-items-lg="6" data-items-xl="6">
                <div class="oc-item align-items-center"><a href="#"><img src="{{ url('assets/sponsor/bi.png') }}"
                            height="150px"></a></div>
                <div class="oc-item align-items-center"><a href="#" class="align-items-center"><img
                            src="{{ url('assets/sponsor/disbudpar.png') }}" height="150px"
                            style="width:663px !important;"></a></div>
                <div class="oc-item align-items-center"><a href="#"><img
                            src="{{ url('assets/sponsor/indo.png') }}" height="150px"></a></div>
                <div class="oc-item align-items-center"><a href="#"><img
                            src="{{ url('assets/sponsor/jagat.png') }}" height="150px"></a></div>
                <div class="oc-item align-items-center"><a href="#"><img
                            src="{{ url('assets/sponsor/multiverse.png') }}" height="150px"></a></div>
                <div class="oc-item"><a href="#"><img src="{{ url('assets/sponsor/pesona.png') }}"
                            height="150px"></a></div>
            </div>
        </div>
    </div>
    @endsection

    @section('script')
        <!-- Swiper JS -->
        <script src="{{ url('swiperjs/swiper-bundle.min.js') }}"></script>

        <!-- Initialize Swiper -->
        <script>


            var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 3,
                loop: true,
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: false,

                },

            });
        </script>
    @endsection
