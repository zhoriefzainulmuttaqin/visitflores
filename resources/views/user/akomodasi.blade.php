@extends('user.template')

@section('title')
    Akomodasi
@endsection

@section('cover')
    <?= url('assets/hotel/bg.png') ?>
@endsection
@section('style')
    <link rel="stylesheet" href="{{ url('canvas') }}/css/components/bs-rating.css">
@endsection

@section('content')
    <div class="container-lg mt-5">
        <form action="{{ url('akomodasi') }}" method="get">
            <div class="row">
                <div class="col-md-5">
                    <div class="card my-5 shadow border-0">
                        <div class="card-body">
                            <div class="input-group">
                                <input type="search" class="form-control"
                                    value="{{ isset($_GET['keyword']) ? $_GET['keyword'] : '' }}" name="keyword"
                                    id="cari" placeholder="Ketik nama daerah, nama hotel, atau landmark">
                                <button class="btn btn-light" type="submit" id="button-addon2">
                                    <i class="bi-search fs-3"></i>
                                </button>
                            </div>
                            @if (isset($_GET['keyword']))
                                <a href="{{ url('akomodasi') }}" class="text-primary"><span>Tampilkan semua
                                        data..</span></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-8 mb-3 mb-sm-0">
                    @foreach ($accomodations as $accomodation)
                        <div class="card shadow h-shadow-sm mb-5 overflow-hidden" style="border-radius: 40px">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src='{{ url("assets/hotel/$accomodation->picture") }}'
                                        class="img-fluid w-100 h-100" alt="...">
                                </div>
                                <div class="col-md-9 ps-3 pe-1">
                                    <h4 class="card-title fs-3">
                                        <a href='{{ url("/detail-akomodasi/$accomodation->slug") }}'
                                            class="link-underline-opacity-0 link-info text-dark">
                                            {{ $accomodation->name }}
                                        </a>
                                        <br>
                                        <div class="rating-container theme-krajee-svg rating-sm rating-animate">
                                            <small class="p-2 rounded text-white me-2" style="background-color: #0F304F">
                                                {{ $accomodation->city }}
                                            </small>
                                            <div class="rating-stars" tabindex="0"><span class="empty-stars"><span
                                                        class="star" title="One Star"><span
                                                            class="bi-star"></span></span><span class="star"
                                                        title="Two Stars"><span class="bi-star"></span></span><span
                                                        class="star" title="Three Stars"><span
                                                            class="bi-star"></span></span><span class="star"
                                                        title="Four Stars"><span class="bi-star"></span></span><span
                                                        class="star" title="Five Stars"><span
                                                            class="bi-star"></span></span></span><span class="filled-stars"
                                                    style="width: {{ $accomodation->star }}%;"><span class="star"
                                                        title="One Star"><span class="bi-star-fill"></span></span><span
                                                        class="star" title="Two Stars"><span
                                                            class="bi-star-fill"></span></span><span class="star"
                                                        title="Three Stars"><span class="bi-star-fill"></span></span><span
                                                        class="star" title="Four Stars"><span
                                                            class="bi-star-fill"></span></span><span class="star"
                                                        title="Five Stars"><span class="bi-star-fill"></span></span></span>
                                            </div>
                                        </div>
                                        <div class="text-lg fw-normal fs-5">
                                            <i class="uil fs-3 text-warning uil-map-marker"></i>
                                            {{ $accomodation->address }}
                                        </div>
                                    </h4>
                                    <div class="row mt-6 justify-content-between my-3">
                                        <div class="col-md-6">
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
                                                                        class="uil uil-youtube"></i>
                                                                </a></li>
                                                        @endif
                                                        @if ($accomodation->link_instagram != null)
                                                            <li><a href="{{ $accomodation->link_instagram }}"
                                                                    class="fw-normal text-dark"><i
                                                                        class="uil bi-instagram"></i>
                                                                </a></li>
                                                        @endif
                                                        @if ($accomodation->link_facebook != null)
                                                            <li><a href="{{ $accomodation->link_facebook }}"
                                                                    class="fw-normal text-dark"><i
                                                                        class="uil uil-facebook"></i>
                                                                </a></li>
                                                        @endif
                                                        @if ($accomodation->link_tiktok != null)
                                                            <li><a href="{{ $accomodation->link_tiktok }}"
                                                                    class="fw-normal text-dark"><i
                                                                        class="uil fa-brands fa-tiktok"></i> </a></li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            @else
                                                <div class="entry-meta no-separator mb-3">
                                                    <ul>
                                                        <li class="fw-normal text-white"><i
                                                                class="uil fa-brands bi-dot"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            @endif
                                            <p class="card-text">
                                                <strong class="fs-4 text-danger">Rp.
                                                    <?= number_format($accomodation->price_start_from, 0, ',', '.') ?>
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $accomodations->links('vendor.pagination.canvas') }}
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <strong class="fs-3">
                                Bintang
                            </strong>
                            <div class="col-12">
                                <div class="rating-container theme-krajee-svg rating-md rating-animate">
                                    <div class="clear-rating clear-rating-active ">
                                        <input class="form-check-input fs-3"
                                            type="checkbox"{{ !empty($star_list['100']) ? 'checked' : '' }}
                                            name="star_list[]" onchange="submit()" id="checkboxNoLabel" value="100"
                                            aria-label="...">
                                    </div>
                                    <div class="rating-stars" tabindex="0"><span class="empty-stars"><span
                                                class="star" title="One Star"><span class="bi-star"></span></span><span
                                                class="star" title="Two Stars"><span
                                                    class="bi-star"></span></span><span class="star"
                                                title="Three Stars"><span class="bi-star"></span></span><span
                                                class="star" title="Four Stars"><span
                                                    class="bi-star"></span></span><span class="star"
                                                title="Five Stars"><span class="bi-star"></span></span></span><span
                                            class="filled-stars" style="width: 100%;"><span class="star"
                                                title="One Star"><span class="bi-star-fill"></span></span><span
                                                class="star" title="Two Stars"><span
                                                    class="bi-star-fill"></span></span><span class="star"
                                                title="Three Stars"><span class="bi-star-fill"></span></span><span
                                                class="star" title="Four Stars"><span
                                                    class="bi-star-fill"></span></span><span class="star"
                                                title="Five Stars"><span class="bi-star-fill"></span></span></span></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="rating-container theme-krajee-svg rating-md rating-animate">
                                    <div class="clear-rating clear-rating-active ">
                                        <input class="form-check-input fs-3"
                                            type="checkbox"{{ !empty($star_list['80']) ? 'checked' : '' }}
                                            name="star_list[]" onchange="submit()" id="checkboxNoLabel" value="80"
                                            aria-label="...">
                                    </div>
                                    <div class="rating-stars" tabindex="0"><span class="empty-stars"><span
                                                class="star" title="One Star"><span class="bi-star"></span></span><span
                                                class="star" title="Two Stars"><span
                                                    class="bi-star"></span></span><span class="star"
                                                title="Three Stars"><span class="bi-star"></span></span><span
                                                class="star" title="Four Stars"><span
                                                    class="bi-star"></span></span></span><span class="filled-stars"
                                            style="width: 100%;"><span class="star" title="One Star"><span
                                                    class="bi-star-fill"></span></span><span class="star"
                                                title="Two Stars"><span class="bi-star-fill"></span></span><span
                                                class="star" title="Three Stars"><span
                                                    class="bi-star-fill"></span></span><span class="star"
                                                title="Four Stars"><span class="bi-star-fill"></span></span></span></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="rating-container theme-krajee-svg rating-md rating-animate">
                                    <div class="clear-rating clear-rating-active ">
                                        <input class="form-check-input fs-3"
                                            type="checkbox"{{ !empty($star_list['60']) ? 'checked' : '' }}
                                            name="star_list[]" onchange="submit()" id="checkboxNoLabel" value="60"
                                            aria-label="...">
                                    </div>
                                    <div class="rating-stars" tabindex="0"><span class="empty-stars"><span
                                                class="star" title="One Star"><span class="bi-star"></span></span><span
                                                class="star" title="Two Stars"><span
                                                    class="bi-star"></span></span><span class="star"
                                                title="Three Stars"><span class="bi-star"></span></span></span><span
                                            class="filled-stars" style="width: 100%;"><span class="star"
                                                title="One Star"><span class="bi-star-fill"></span></span><span
                                                class="star" title="Two Stars"><span
                                                    class="bi-star-fill"></span></span><span class="star"
                                                title="Three Stars"><span class="bi-star-fill"></span></span></span></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="rating-container theme-krajee-svg rating-md rating-animate">
                                    <div class="clear-rating clear-rating-active ">
                                        <input class="form-check-input fs-3"
                                            type="checkbox"{{ !empty($star_list['40']) ? 'checked' : '' }}
                                            name="star_list[]" onchange="submit()" id="checkboxNoLabel" value="40"
                                            aria-label="...">
                                    </div>
                                    <div class="rating-stars" tabindex="0"><span class="empty-stars"><span
                                                class="star" title="One Star"><span class="bi-star"></span></span><span
                                                class="star" title="Two Stars"><span
                                                    class="bi-star"></span></span></span><span class="filled-stars"
                                            style="width: 100%;"><span class="star" title="One Star"><span
                                                    class="bi-star-fill"></span></span><span class="star"
                                                title="Two Stars"><span class="bi-star-fill"></span></span></span></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="rating-container theme-krajee-svg rating-md rating-animate">
                                    <div class="clear-rating clear-rating-active ">
                                        <input class="form-check-input fs-3"
                                            type="checkbox"{{ !empty($star_list['20']) ? 'checked' : '' }}
                                            name="star_list[]" onchange="submit()" id="checkboxNoLabel" value="20"
                                            aria-label="...">
                                    </div>
                                    <div class="rating-stars" tabindex="0"><span class="empty-stars"><span
                                                class="star" title="One Star"><span
                                                    class="bi-star"></span></span></span><span class="filled-stars"
                                            style="width: 100%;"><span class="star" title="One Star"><span
                                                    class="bi-star-fill"></span></span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    </div>
    <div class="clearfix mb-5"></div>
@endsection
