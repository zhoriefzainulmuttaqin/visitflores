@extends('user.template_no_cover')

@section('title')
    {{ __('accomodation_detail.title') }} - {{ App::isLocale('id') ? $accomodation->name : $accomodation->name_en }}
@endsection

@section('cover')
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('canvas') }}/css/components/bs-rating.css">
@endsection

@section('content')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-26YC4R3P36"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-26YC4R3P36');
    </script>

    <div class="container-lg mt-5 akomodasi">
        <div class="row ">
            <div class="col-md-8">
                <h1 class="fs-2 fw-bold">
                    {{ App::isLocale('id') ? $accomodation->name : $accomodation->name_en }}
                    <br>
                    <div class="rating-container theme-krajee-svg rating-sm rating-animate">
                        <small class="p-2 rounded text-white me-2" style="background-color: #0F304F">
                            {{ $accomodation->city }}
                        </small>
                        @if ($accomodation->star)
                            <div class="rating-stars" tabindex="0">
                                <span class="empty-stars">
                                    <span class="star" title="One Star"><span class="bi-star"></span></span>
                                    <span class="star" title="Two Stars"><span class="bi-star"></span></span>
                                    <span class="star" title="Three Stars"><span class="bi-star"></span></span>
                                    <span class="star" title="Four Stars"><span class="bi-star"></span></span>
                                    <span class="star" title="Five Stars"><span class="bi-star"></span></span>
                                </span>
                                <span class="filled-stars" style="width: {{ $accomodation->star }}%;">
                                    <span class="star" title="One Star"><span class="bi-star-fill"></span></span>
                                    <span class="star" title="Two Stars"><span class="bi-star-fill"></span></span>
                                    <span class="star" title="Three Stars"><span class="bi-star-fill"></span></span>
                                    <span class="star" title="Four Stars"><span class="bi-star-fill"></span></span>
                                    <span class="star" title="Five Stars"><span class="bi-star-fill"></span></span>
                                </span>
                            </div>
                        @endif
                    </div>
                    <div class="text-lg fw-normal fs-5">
                        <i class="uil fs-3 text-warning fa-solid fa-phone"></i>
                        {{ $accomodation->phone }}
                        <br>
                        <i class="uil fs-3 text-warning uil-map-marker"></i>
                        {{ $accomodation->address }}.<a href="{{ $accomodation->link_maps }}" class="text-warning fw-bold">
                            {{ __('accomodation_detail.see_maps') }}</a>
                    </div>
                </h1>
            </div>
            <div class="col-md-4 my-2 mb-4">
                <font class="fw-bold fs-5 float-end ">

                    {{ __('accomodation_detail.start_from') }}
                    <br>
                    <font class="text-danger fs-3 float-end">
                        <?php
                        if ($accomodation->id == 6) {
                            echo 'Rp. ' . number_format($accomodation->price_start_from, 0, ',', '.');
                        } else {
                            echo '-';
                        }
                        ?>
                    </font>
                    <br>
                    <div class="d-grid gap-2 mt-3 w-100">

                        <a href="{{ url('layanan-produk/tourism-card') }}" class="btn btn-warning text-dark">
                            <i class="uil fs-5 uil-ticket text-dark"></i> Disc. Card
                        </a>
                    </div>
                </font>
            </div>
        </div>
        <div class="masonry-thumbs grid-container row row-cols-4 has-init-isotope" data-big="1" data-lightbox="gallery"
            style="position: relative; height: 585.564px;">
            <a class="grid-item grid-item-big" href='{{ url("assets/akomodasi/$accomodation->cover_picture") }}'
                data-lightbox="gallery-item" style="position: absolute; left: 0%; top: 0px; width: 519.188px;"><img
                    src="{{ url("assets/akomodasi/$accomodation->cover_picture") }}" alt="{{ $accomodation->name }}"></a>
            @foreach ($accomodation->accomodation_galleries as $item)
                <a class="grid-item" href="{{ url("assets/akomodasi/$item->picture") }}" data-lightbox="gallery-item"
                    style="position: absolute; left: 39.9991%; top: 0px;"><img
                        src="{{ url("assets/akomodasi/$item->picture") }}" alt="{{ $item->name }}"></a>
            @endforeach
        </div>
        <div class="row my-5">
            <div class="col-md-4 mb-3 mb-sm-0">
                <div class="card w-100 border-1 overflow-hidden">
                    <div class="card-body">
                        <h5 class="card-title fs-4">
                            {{ __('accomodation_detail.facilities') }}
                        </h5>
                        @if (App::isLocale('id'))
                            {{ nl2br($accomodation->facilities) }}
                        @else
                            {{ nl2br($accomodation->facilities_en) }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-sm-0">
                <div class="card border-1  overflow-hidden">
                    <div class="card-body">
                        <h5 class="card-title fs-4">
                            {{ __('accomodation_detail.about_accomodation') }}
                            <div class="text-lg fw-normal mt-2 fs-5">
                                @if (App::isLocale('id'))
                                    {!! nl2br($accomodation->details) !!}
                                @else
                                    {!! nl2br($accomodation->details_en) !!}
                                @endif
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="fs-5 text-left float-start text-lg">
                                        <font class="fs-4">
                                            {{ __('accomodation_detail.order_now') }}
                                        </font>
                                        <div class="entry-meta no-separator mb-3">
                                            <ul>
                                                @if (count($accomodation->accomodation_links) > 0)
                                                    @foreach ($accomodation->accomodation_links as $item)
                                                        <li>
                                                            @auth
                                                                <a href="{{ $item->url }}"
                                                                    class="fw-normal link-primary text-primary">
                                                                    <i class='fa fa-link'></i>
                                                                    {{ $item->source_name }}
                                                                </a>
                                                            @else
                                                                <a href="{{ route('login') }}"
                                                                    class="fw-normal link-primary text-primary">
                                                                    <i class='fa fa-link'></i>
                                                                    Login untuk akses
                                                                </a>
                                                            @endauth
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li class="fw-normal text-white">
                                                        @auth
                                                            <i class="uil fs-2 link-info text-dark fa-brands bi-dot"></i>
                                                        @else
                                                            <a href="{{ route('login') }}"
                                                                class="fw-normal link-info text-dark">
                                                                <i class="uil fs-2 fa-brands bi-dot"></i>
                                                                Login untuk akses
                                                            </a>
                                                        @endauth
                                                    </li>
                                                @endif

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="fs-3 text-right float-end text-lg">
                                        <font class="fs-4">
                                            {{ __('accomodation_detail.visit') }}
                                        </font>
                                        @if (
                                            $accomodation->link_youtube != null ||
                                                $accomodation->link_instagram != null ||
                                                $accomodation->link_facebook != null ||
                                                $accomodation->link_tiktok != null)
                                            <div class="entry-meta no-separator mb-3">
                                                <ul>
                                                    @if ($accomodation->link_youtube != null)
                                                        <li><a href="{{ $accomodation->link_youtube }}"
                                                                class="fw-normal text-dark"><i
                                                                    class="uil fs-2 link-warning text-dark uil-youtube"></i>
                                                            </a></li>
                                                    @endif
                                                    @if ($accomodation->link_instagram != null)
                                                        <li><a href="{{ $accomodation->link_instagram }}"
                                                                class="fw-normal text-dark"><i
                                                                    class="uil fs-2 link-warning text-dark bi-instagram"></i>
                                                            </a></li>
                                                    @endif
                                                    @if ($accomodation->link_facebook != null)
                                                        <li><a href="{{ $accomodation->link_facebook }}"
                                                                class="fw-normal text-dark"><i
                                                                    class="uil fs-2 link-warning text-dark uil-facebook"></i>
                                                            </a></li>
                                                    @endif
                                                    @if ($accomodation->link_tiktok != null)
                                                        <li><a href="{{ $accomodation->link_tiktok }}"
                                                                class="fw-normal text-dark"><i
                                                                    class="uil fs-2 link-warning text-dark fa-brands fa-tiktok"></i>
                                                            </a></li>
                                                    @endif
                                                </ul>
                                            </div>
                                        @else
                                            <div class="entry-meta no-separator mb-3">
                                                <ul>
                                                    <li class="fw-normal text-white"><i
                                                            class="uil fs-2 link-info text-dark fa-brands bi-dot"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="clearfix mb-5"></div>
@endsection
