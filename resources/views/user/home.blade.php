@extends("user.template")

@section("title")
Home
@endsection

@section("style")
<link rel="stylesheet" href="{{ url('swiperjs/swiper-bundle.min.css') }}" />
<style>
#home-event-container{
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

@section("cover")
<?= url('images/gedung.png') ?>
@endsection

@section("content")

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
        <p class='text-center h2 mt-5'>
            Kalender Event
        </p>
        <div id="oc-events" class="owl-carousel events-carousel carousel-widget" data-margin="0" data-pagi="true" data-items="1" data-items-md="2" data-items-lg="3" data-items-xl="3">
            @foreach($events as $event)
            <div class="oc-item">
                <article class="entry event p-3">
                    <div class="grid-inner bg-contrast-0 row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-12 mb-md-0">
                            <a href="{{ url('event') }}" class="entry-image">
                                <img src="{{ url('assets/event/'.$event->cover_picture) }}" class="rounded-2">
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
                                    <b>{{ tglIndo($event->start_date,"d/m/Y") }}</b>
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
            <a href="{{ url('event') }}" class="btn btn-primary text-white bg-btn-visit">
                Lihat Semua Event
                <i class="bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<div class="section">
    <div class="container mt-4">
        <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        @foreach($culiners as $culiner)
        <div class="col-md-4 px-3">
            <article class="portfolio-item">
                <div class="portfolio-image">
                    <a href="{{ url('kuliner') }}">
                        <img src="{{ url('assets/resto/resto.jpg') }}">
                    </a>
                    <div class="bg-overlay">
                        <div class="bg-overlay-content text-overlay-mask dark align-items-end justify-content-start">
                            <h4 class="mb-0">{{ $culiner->name }}</h4>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        @endforeach
    </div>
</div>
<div class="section">
    <h3 class="text-center">Didukung Oleh</h3>
    <div class="container text-center">
        <div id="oc-clients" class="owl-carousel image-carousel carousel-widget justify-content-center" data-margin="30" data-nav="true" data-pagi="true" data-autoplay="5000" data-items-xs="3" data-items-sm="3" data-items-md="5" data-items-lg="5" data-items-xl="5">
            <div class="oc-item align-items-center"><a href="#"><img src="{{ url('assets/sponsor/bi.png') }}" height="150px"></a></div>
            <div class="oc-item align-items-center"><a href="#" class="align-items-center"><img src="{{ url('assets/sponsor/disbudpar.png') }}" height="150px" style="width:663px !important;"></a></div>
            <div class="oc-item align-items-center"><a href="#"><img src="{{ url('assets/sponsor/indo.png') }}" height="150px"></a></div>
            <div class="oc-item align-items-center"><a href="#"><img src="{{ url('assets/sponsor/jagat.png') }}" height="150px"></a></div>
            <div class="oc-item align-items-center"><a href="#"><img src="{{ url('assets/sponsor/multiverse.png') }}" height="150px"></a></div>
            <div class="oc-item"><a href="#"><img src="{{ url('assets/sponsor/pesona.png') }}" height="150px"></a></div>
        </div>
    </div>
</div>
<div class="section" style="margin-bottom:-10px; margin-top: -70px">

</div>


@endsection

@section("script")
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