@extends('user.template_no_cover')

@section('title')
    Detail Akomodasi
@endsection

@section('cover')
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('canvas') }}/css/components/bs-rating.css">
@endsection
@section('content')
    <div class="container-lg mt-5">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1 class="fs-2 fw-bold">
                    {{ $accomodation->name }}
                    <br>
                    <div class="rating-container theme-krajee-svg rating-sm rating-animate">
                        <small class="p-2 rounded text-white me-2" style="background-color: #0F304F">
                            {{ $accomodation->city }}
                        </small>
                        <div class="rating-stars" tabindex="0"><span class="empty-stars"><span class="star"
                                    title="One Star"><span class="bi-star"></span></span><span class="star"
                                    title="Two Stars"><span class="bi-star"></span></span><span class="star"
                                    title="Three Stars"><span class="bi-star"></span></span><span class="star"
                                    title="Four Stars"><span class="bi-star"></span></span><span class="star"
                                    title="Five Stars"><span class="bi-star"></span></span></span><span class="filled-stars"
                                style="width: {{ $accomodation->star }}%;"><span class="star" title="One Star"><span
                                        class="bi-star-fill"></span></span><span class="star" title="Two Stars"><span
                                        class="bi-star-fill"></span></span><span class="star" title="Three Stars"><span
                                        class="bi-star-fill"></span></span><span class="star" title="Four Stars"><span
                                        class="bi-star-fill"></span></span><span class="star" title="Five Stars"><span
                                        class="bi-star-fill"></span></span></span></div>
                    </div>
                    <div class="text-lg fw-normal fs-5">
                        <i class="uil fs-3 text-warning fa-solid fa-phone"></i>
                        {{ $accomodation->phone }}
                        <br>
                        <i class="uil fs-3 text-warning uil-map-marker"></i>
                        {{ $accomodation->address }}
                    </div>
                </h1>
            </div>
            <div class="col-md-4 my-2">
                <font class="fw-bold fs-5 float-end ">
                    Harga/kamar/malam mulai dari
                    <br>
                    <font class="text-danger fs-3 float-end">
                        Rp.<?= number_format($accomodation->price_start_from, 0, ',', '.') ?>
                    </font>
                    <br>
                    <div class="d-grid gap-2 mt-3 w-100">
                        <button class="btn btn-warning text-dark" type="button">
                            <i class="uil fs-5 uil-ticket text-dark"></i> Disc. Card</button>
                    </div>
                </font>
            </div>
            <img src="{{ url('assets/hotel/bg.png') }}" class="img-fluid w-100 h-100" alt="...">
        </div>
        <div class="row my-5">
            <div class="col-md-4 d-flex mb-3 mb-sm-0">
                <div class="card w-100 border-1 mb-5 overflow-hidden">
                    <div class="card-body">
                        <h5 class="card-title fs-4">
                            Fasilitas
                        </h5>
                        {{ nl2br($accomodation->facilities) }}
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3 mb-sm-0">
                <div class="card border-1 mb-5 overflow-hidden">
                    <div class="card-body">
                        <h5 class="card-title fs-4">
                            Tentang Akomodasi
                            <div class="text-lg fw-normal mt-2 fs-5">
                                {{ nl2br($accomodation->details) }}
                            </div>
                            <div class="fs-3 text-lg">
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
                        </h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="clearfix mb-5"></div>
@endsection
