@extends('user.template')

@section('title')
    Home
@endsection

@section('style')
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
    </style>
@endsection

@section('cover')
    <?= url('images/gedung.png') ?>
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
                        <b>Visit Cirebon Website</b> <br>
                        Dapatkan semua fitur dalam satu genggaman
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center">
                    <div class="col-md-2 align-items-center">
                        <img src="{{ url('assets/event.png') }}" width="95%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-7 align-self-center">
                        <b>Majestic Event</b> <br>
                        The Pioneer Of Attractions. Saksikan keseruan nya di Cirebon Aja.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center">
                    <div class="col-md-2 align-items-center">
                        <img src="{{ url('assets/360.png') }}" width="95%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-7 align-self-center">
                        <b>Majestic Event</b> <br>
                        Melihat destinasi Wisata dengan view 360°
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="home-event-container">
        <div class="container-fluid">
            <h1 class="mb-2 text-center">
                <b>Kalender Event</b>
            </h1>
            <div id="oc-events" class="owl-carousel events-carousel carousel-widget" data-margin="0" data-pagi="true"
                data-items="1" data-items-md="2" data-items-lg="3" data-items-xl="3">
                @foreach ($events as $event)
                    <div class="oc-item">
                        <article class="entry event p-3">
                            <div
                                class="grid-inner bg-contrast-0 row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                <div class="col-12 mb-md-0">
                                    <a href="{{ url('event') }}" class="entry-image">
                                        <img src="{{ url('assets/event/' . $event->cover_picture) }}" class="rounded-2">
                                    </a>
                                </div>
                                <div class="col-12 p-4 pt-0">
                                    <div class="entry-title nott">
                                        <h3><a href="{{ url('event') }}">{{ $event->name }}</a></h3>
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
                                            <b>{{ tglIndo($event->start_date, 'd/m/Y') }}</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
            <div class="clearfix"></div>
            <div class="text-center mt-5">
                <a href="{{ url('event') }}" class="btn btn-lg fs-3 p-4 btn-primary text-white bg-btn-visit">
                    Lihat Semua Event
                    <i class="bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container mt-4">
            <div class="row mb-5">
                <div class="col-md-7">
                    <h1 class="mb-1">
                        <b>TOP Wisata</b>
                    </h1>
                    <div class="text-lg fs-4">
                        Berikut ini daftar wisata yang sering dikunjungi wisatawan.
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="mt-5">
                        <a href="{{ url('wisata') }}"
                            class="btn btn-primary btn-lg fs-4 p-3 float-end text-white bg-btn-visit">
                            Eksplor Semua
                            <i class="bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($tours as $tour)
                        <div class="swiper-slide">
                            <img src='{{ url("assets/wisata/$tour->picture") }}' />
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7">
                <h1 class="mb-1">
                    <b>TOP Kuliner</b>
                </h1>
                <div class="text-lg fs-4">
                    Berikut ini daftar kuliner yang sering dinikmati wisatawan.
                </div>
            </div>
            <div class="col-md-5">
                <div class="mt-5">
                    <a href="{{ url('kuliner') }}"
                        class="btn btn-primary btn-lg fs-4 p-3 float-end text-white bg-btn-visit">
                        Eksplor Semua
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
                                style="border-radius: 50px; width: 360px; height: 560px; object-fit: cover"
                                src='{{ url("assets/resto/$culiner->picture") }}' alt="{{ $culiner->name }}">
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark align-items-end justify-content-start">
                                    <h4 class="mb-0">
                                        {{ $culiner->name }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-lg-6">
        <div class="row mb-lg-6">
            <div class="col-md-12 text-center">
                <h1 class="mb-1">
                    <b>Berita Terkini</b>
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
                                    <h2><a href="{{ url("/detail-berita/{$news[0]->slug}") }}">{{ $news[0]->name }}</a>
                                    </h2>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="uil uil-schedule"></i>
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
                                    <h2><a href="{{ url("/detail-berita/{$news[1]->slug}") }}">{{ $news[1]->name }}</a>
                                    </h2>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="uil uil-schedule"></i>
                                            {{ tglIndo($news[1]->published_date, 'd/m/Y') }}</li>
                                        <li><i class="uil uil-user"></i> {{ $news[1]->admin_name }}</li>
                                        <li><i class="uil uil-folder-open"></i> {{ $news[1]->category_name }}</li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    {!! mb_substr(nl2br($news[1]->content), 0, 50) !!}
                                    <br>
                                    <a href="{{ url("/detail-berita/{$news[1]->slug}") }}" class="more-link">Lanjut
                                        baca</a>
                                </div>
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
                                    <h2><a href="{{ url("/detail-berita/{$news[2]->slug}") }}">{{ $news[2]->name }}</a>
                                    </h2>
                                </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="container mt-lg-6">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-12">
                <div class="owl-carousel carousel-widget owl-loaded owl-drag with-carousel-dots" data-items="2"
                    data-autoplay="5000">
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
                                                    <p class="mb-4 font-secondary"
                                                        style="font-size: 1.125rem; line-height: 1.65;">Pelayanan yang
                                                        bagus, cepat, dan dapat dipercaya. Senang bisa menggunakan produk
                                                        tourism card, membantu segala hal dalam kuliner,wisata, dan oleh
                                                        oleh</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 fw-medium">Yusuf</h4>
                                                        <small class="text-muted">yusuf123</small>
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
                                                    <p class="mb-4 font-secondary"
                                                        style="font-size: 1.125rem; line-height: 1.65;">Antarmukanya
                                                        sederhana dan user-friendly sehingga mudah digunakan bagi saya
                                                        wisatawan dari luar jawa yang ingin menikmati wisata dan kebudayaan
                                                        disini.</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 fw-medium">Nabila</h4>
                                                        <small class="text-muted">nabila1</small>
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
                                                    <p class="mb-4 font-secondary"
                                                        style="font-size: 1.125rem; line-height: 1.65;">Asik dan
                                                        menyenangkan sekali menggunakan produk tourism card, bisa
                                                        menggunakannya dengan fleksibel mau ke kuliner, wisata ataupun
                                                        oleh-oleh. Sangat membantu, terima kasih.</p>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 fw-medium">Nanda</h4>
                                                        <small class="text-muted">nandaganteng</small>
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
                            class="owl-next disabled"><i class="uil uil-angle-right-b"></i></button></div>

                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <h3 class="text-center">Didukung Oleh</h3>
        <div class="container text-center">
            <div id="oc-clients" class="owl-carousel image-carousel carousel-widget justify-content-center"
                data-margin="30" data-nav="true" data-pagi="true" data-autoplay="5000" data-items-xs="3"
                data-items-sm="3" data-items-md="5" data-items-lg="5" data-items-xl="5">
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
    <div class="section" style="margin-bottom:-10px; margin-top: -70px">

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
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
@endsection
