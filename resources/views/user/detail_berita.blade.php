@extends('user.template')

@section('title')
    Detail Berita
@endsection

@section('cover')
@endsection

@section('content')
    <div class="container-lg mt-5">
        <div class="row mb-5">
            <small class="rounded fs-5 text-warning me-2">
                Wisata
            </small>
            <br>
            <h1 class="fw-bold">
                26 Wiasata di Cirebon Terbaru yang Lagi Hits, Wajib Banget dikunjungi
            </h1>
            <div class="col-md-12 mb-3 mb-sm-0">
                <div class="card border-0 " style="border-radius: 40px">
                    <div class="card-body">
                        <img src="{{ url('assets/berita/detailberita.png') }}" class="img-fluid w-100 h-100" alt="...">
                        <div class="col-md-12 mt-5">
                            <p class="fs-3">
                                Wisata di Cirebon terbaru yang lagi hits
                                menyuguhkan panorama alam megah,
                                bersejarah, dan pastinya instagramable.
                                Kota Cirebon merupakan pusat penyebaran agama Islam oleh para
                                sunan di masa lampau. Tak heran wisata di Cirebon terbaru yang lagi
                                hits religinya memukau.
                            </p>
                            <p class="fs-3">
                                Panorama alam wisata di Cirebon terbaru yang lagi hits lengkap dari
                                gua, pantai, danau, bukit, gunung, telaga, hingga pantai.
                                Wisata di Cirebon terbaru yang lagi hits purbakala pun ada hutan kera
                                yang wajib banget dikunjungi wisatawan saat baru pertama kali datang
                                ke kota Cirebon.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col col-md-8 mb-3 mb-sm-0">
                @for ($i = 0; $i < 2; $i++)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow h-shadow-sm mb-5 overflow-hidden">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <img src="{{ url('assets/berita/berita1.png') }}" class="img-fluid w-100 h-100"
                                            alt="...">
                                    </div>
                                    <div class="col-md-9 ps-3 pe-1">
                                        <h4 class="card-title fs-3">
                                            <small class="rounded fs-5 text-warning me-2">
                                                Wisata
                                            </small>
                                            <br>
                                            26 Wiasata di Cirebon Terbaru yang Lagi Hits, Wajib Banget dikunjungi
                                            <div class="text-lg fw-normal fs-5">
                                                8 Agustus 2023
                                            </div>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="col col-md-4">
                @for ($i = 0; $i < 2; $i++)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3 shadow h-shadow-sm">
                                <div class="row g-0">
                                    <div class="col-md-12">
                                        <img src="{{ url('assets/berita/berita3.png') }}" alt="...">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <small class="rounded fs-5 text-warning me-2">
                                            Wisata
                                        </small>
                                        <p class="card-text">26 Wiasata di Cirebon Terbaru yang Lagi Hits, Wajib Banget
                                            dikunjungi</p>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="clearfix mb-5"></div>
@endsection
