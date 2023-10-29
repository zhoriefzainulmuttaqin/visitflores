@extends('user.template')

@section('title')
    Hotel
@endsection

@section('cover')
    <?= url('assets/hotel/bg.png') ?>
@endsection
@section('style')
    <link rel="stylesheet" href="{{ url('canvas') }}/css/components/bs-rating.css">
@endsection

@section('content')
    <div class="container-lg mt-5">
        <div class="row">
            <div class="col-md-5">
                <div class="card my-5 shadow border-0">
                    <div class="card-body">
                        <form action="" method="">
                            <div class="input-group">
                                <input type="search" class="form-control" id="cari"
                                    placeholder="Ketik nama daerah, nama hotel, atau landmark">
                                <button class="btn btn-light" type="button" id="button-addon2">
                                    <i class="bi-search fs-3"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-8 mb-3 mb-sm-0">
                @for ($i = 0; $i < 10; $i++)
                    <div class="card shadow h-shadow-sm mb-5 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="{{ url('assets/hotel/hotel.png') }}" class="img-fluid w-100 h-100" alt="...">
                            </div>
                            <div class="col-md-9 ps-3 pe-1">
                                <h4 class="card-title fs-3">
                                    The Luxton Cirebon Hotel and Convention
                                    <br>
                                    <div class="rating-container theme-krajee-svg rating-sm rating-animate">
                                        <small class="p-2 rounded text-white me-2" style="background-color: #0F304F">
                                            Hotel
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
                                                style="width: 100%;"><span class="star" title="One Star"><span
                                                        class="bi-star-fill"></span></span><span class="star"
                                                    title="Two Stars"><span class="bi-star-fill"></span></span><span
                                                    class="star" title="Three Stars"><span
                                                        class="bi-star-fill"></span></span><span class="star"
                                                    title="Four Stars"><span class="bi-star-fill"></span></span><span
                                                    class="star" title="Five Stars"><span
                                                        class="bi-star-fill"></span></span></span></div>
                                    </div>
                                    <div class="text-lg fw-normal fs-5">
                                        <i class="uil fs-3 text-warning uil-map-marker"></i>
                                        Jl. RA.Kartini No.60, Kejaksan, Cirebon
                                    </div>
                                </h4>
                                <div class="row mt-6 justify-content-between my-3">
                                    <div class="col-md-6">
                                        <p class="card-text">
                                            <strong class="fs-4 text-danger">Rp. 880.000 </strong>
                                        </p>
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <select class="form-select border-0 fs-5 fw-bold" id="exampleFormControlSelect1">
                                            <option>Termasuk Pajak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
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
                                    <input class="form-check-input fs-3" type="checkbox" id="checkboxNoLabel" value=""
                                        aria-label="...">
                                </div>
                                <div class="rating-stars" tabindex="0"><span class="empty-stars"><span class="star"
                                            title="One Star"><span class="bi-star"></span></span><span class="star"
                                            title="Two Stars"><span class="bi-star"></span></span><span class="star"
                                            title="Three Stars"><span class="bi-star"></span></span><span class="star"
                                            title="Four Stars"><span class="bi-star"></span></span><span class="star"
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
                                    <input class="form-check-input fs-3" type="checkbox" id="checkboxNoLabel"
                                        value="" aria-label="...">
                                </div>
                                <div class="rating-stars" tabindex="0"><span class="empty-stars"><span class="star"
                                            title="One Star"><span class="bi-star"></span></span><span class="star"
                                            title="Two Stars"><span class="bi-star"></span></span><span class="star"
                                            title="Three Stars"><span class="bi-star"></span></span><span class="star"
                                            title="Four Stars"><span class="bi-star"></span></span></span><span
                                        class="filled-stars" style="width: 100%;"><span class="star"
                                            title="One Star"><span class="bi-star-fill"></span></span><span
                                            class="star" title="Two Stars"><span
                                                class="bi-star-fill"></span></span><span class="star"
                                            title="Three Stars"><span class="bi-star-fill"></span></span><span
                                            class="star" title="Four Stars"><span
                                                class="bi-star-fill"></span></span></span></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="rating-container theme-krajee-svg rating-md rating-animate">
                                <div class="clear-rating clear-rating-active ">
                                    <input class="form-check-input fs-3" type="checkbox" id="checkboxNoLabel"
                                        value="" aria-label="...">
                                </div>
                                <div class="rating-stars" tabindex="0"><span class="empty-stars"><span class="star"
                                            title="One Star"><span class="bi-star"></span></span><span class="star"
                                            title="Two Stars"><span class="bi-star"></span></span><span class="star"
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
                                    <input class="form-check-input fs-3" type="checkbox" id="checkboxNoLabel"
                                        value="" aria-label="...">
                                </div>
                                <div class="rating-stars" tabindex="0"><span class="empty-stars"><span class="star"
                                            title="One Star"><span class="bi-star"></span></span><span class="star"
                                            title="Two Stars"><span class="bi-star"></span></span></span><span
                                        class="filled-stars" style="width: 100%;"><span class="star"
                                            title="One Star"><span class="bi-star-fill"></span></span><span
                                            class="star" title="Two Stars"><span
                                                class="bi-star-fill"></span></span></span></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="rating-container theme-krajee-svg rating-md rating-animate">
                                <div class="clear-rating clear-rating-active ">
                                    <input class="form-check-input fs-3" type="checkbox" id="checkboxNoLabel"
                                        value="" aria-label="...">
                                </div>
                                <div class="rating-stars" tabindex="0"><span class="empty-stars"><span class="star"
                                            title="One Star"><span class="bi-star"></span></span></span><span
                                        class="filled-stars" style="width: 100%;"><span class="star"
                                            title="One Star"><span class="bi-star-fill"></span></span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix mb-5"></div>
@endsection
