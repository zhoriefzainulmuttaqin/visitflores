@extends("user.template")

@section("title")
Layanan Produk
@endsection

@section("cover")
<?= url('assets/layanan-produk/bg.png') ?>
@endsection

@section("content")
<div class="container-lg mt-5">
    <h1 class="text-center mb-5">
        <b>Tourism Card</b>
    </h1>
    <div class="container mt-5">
        <div class="card shadow" id="BuyTourismCard">
            <div class="card-body p-5">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-5 align-items-center">
                        <img src="{{ url('assets/layanan-produk/TOURISM_CARD_1.png') }}" width="95%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-12 col-lg-7 align-self-center">
                        <p class="h3">
                        <b>Tourism Card</b> adalah kartu member <span class="text-warning">VISITCIREBON.ID</span> yang bisa digunakan di berbagai destinasi wisata di wilayah Ciayumajakuning. Termasuk dengan kuliner dan oleh-olehnya.
                        </p>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-md-12 col-lg-5 align-items-center">
                        <img src="{{ url('assets/layanan-produk/TOURISM_CARD_2.png') }}" width="95%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-12 col-lg-7 align-self-center">
                        <p class="h3">
                        <b>Kegunaan Kartu :</b> Kartu member yang bisa digunakan wisatawan untuk mendapatkan potongan harga dan promo spesial lainnya dari mitra yang bekerja sama dengan <span class="text-warning">VISITCIREBON.ID.</span>
                        </p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row mt-5">
                    <div class="col-md-12 d-grid gap-2">
                        <a href="{{ url('layanan-produk/tourism-card') }}" class="btn btn-success btn-lg">
                            Beli Tourism Card
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5"></div>
    <div class="clearfix"></div>
    <h1 class="text-center mb-3">
        <b>Tour Package</b>
    </h1>
    <div class="clearfix"></div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 p-5">
            <div class="card rounded shadow">
                <div class="card-body">
                    <img src="{{ url('assets/layanan-produk/tour.png') }}" class="img-fluid rounded" width="100%">
                    <h4 class="text-center mt-5">
                        <b>
                            Paket A
                        </b>
                    </h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-5">
                                <p class="text-warning h4">Destinasi</p>
                                <p class='h4'>
                                    <i class='bi-check'></i>
                                    Cibulan <br>
                                    <i class='bi-check'></i>
                                    Buper Ipukan <br>
                                    <i class='bi-check'></i>
                                    Sangkan Park <br>
                                </p>
                            </div>
                            <div class="col-md-12 col-lg-5">
                                <p class="text-warning h4">Fasilitas</p>
                                <p class='h4'>
                                    <i class='bi-check'></i>
                                    Transportasi <br>
                                    <i class='bi-check'></i>
                                    Makan <br>
                                    <i class='bi-check'></i>
                                    Tiket Wisata <br>
                                    <i class='bi-check'></i>
                                    Dokumentasi <br>
                                    <i class='bi-check'></i>
                                    Tol & Parkir
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 p-5">
            <div class="card rounded shadow">
                <div class="card-body">
                    <img src="{{ url('assets/layanan-produk/tour.png') }}" class="img-fluid rounded" width="100%">
                    <h4 class="text-center mt-5">
                        <b>
                            Paket B
                        </b>
                    </h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-5">
                                <p class="text-warning h4">Destinasi</p>
                                <p class='h4'>
                                    <i class='bi-check'></i>
                                    Cibulan <br>
                                    <i class='bi-check'></i>
                                    Buper Ipukan <br>
                                    <i class='bi-check'></i>
                                    Sangkan Park <br>
                                </p>
                            </div>
                            <div class="col-md-12 col-lg-5">
                                <p class="text-warning h4">Fasilitas</p>
                                <p class='h4'>
                                    <i class='bi-check'></i>
                                    Transportasi <br>
                                    <i class='bi-check'></i>
                                    Tiket Wisata <br>
                                    <i class='bi-check'></i>
                                    Tol & Parkir <br>
                                    <i class='bi-check'></i>
                                    Guide Lokal <br>
                                    <i class='bi-check'></i>
                                    Tour Leader
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 p-5">
            <div class="card rounded shadow">
                <div class="card-body">
                    <img src="{{ url('assets/layanan-produk/tour.png') }}" class="img-fluid rounded" width="100%">
                    <h4 class="text-center mt-5">
                        <b>
                            Paket C
                        </b>
                    </h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-5">
                                <p class="text-warning h4">Destinasi</p>
                                <p class='h4'>
                                    <i class='bi-check'></i>
                                    Cibulan <br>
                                    <i class='bi-check'></i>
                                    Buper Ipukan <br>
                                    <i class='bi-check'></i>
                                    Sangkan Park <br>
                                </p>
                            </div>
                            <div class="col-md-12 col-lg-5">
                                <p class="text-warning h4">Fasilitas</p>
                                <p class='h4'>
                                    <i class='bi-check'></i>
                                    Transportasi <br>
                                    <i class='bi-check'></i>
                                    Makan <br>
                                    <i class='bi-check'></i>
                                    Tiket Wisata <br>
                                    <i class='bi-check'></i>
                                    Dokumentasi <br>
                                    <i class='bi-check'></i>
                                    Tol & Parkir <br>
                                    <i class='bi-check'></i>
                                    Asuransi <br>
                                    <i class='bi-check'></i>
                                    Hotel <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 p-5">
            <div class="card rounded shadow">
                <div class="card-body">
                    <img src="{{ url('assets/layanan-produk/tour.png') }}" class="img-fluid rounded" width="100%">
                    <h4 class="text-center mt-5">
                        <b>
                            Paket D
                        </b>
                    </h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-5">
                                <p class="text-warning h4">Destinasi</p>
                                <p class='h4'>
                                    <i class='bi-check'></i>
                                    Cibulan <br>
                                    <i class='bi-check'></i>
                                    Buper Ipukan <br>
                                    <i class='bi-check'></i>
                                    Sangkan Park <br>
                                </p>
                            </div>
                            <div class="col-md-12 col-lg-5">
                                <p class="text-warning h4">Fasilitas</p>
                                <p class='h4'>
                                    <i class='bi-check'></i>
                                    Transportasi <br>
                                    <i class='bi-check'></i>
                                    Makan <br>
                                    <i class='bi-check'></i>
                                    Tiket Wisata <br>
                                    <i class='bi-check'></i>
                                    Dokumentasi <br>
                                    <i class='bi-check'></i>
                                    Tol & Parkir <br>
                                    <i class='bi-check'></i>
                                    Guide Lokal <br>
                                    <i class='bi-check'></i>
                                    Tour Leader <br>
                                    <i class='bi-check'></i>
                                    Asuransi <br>
                                    <i class='bi-check'></i>
                                    Hotel <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <h1 class="text-center mt-5 mb-3">
        <b>Oleh - oleh</b>
    </h1>
    <div class="clearfix"></div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 p-5">
            <div class="card rounded shadow">
                <div class="card-body">
                    <img src="{{ url('assets/layanan-produk/oleh.png') }}" class="img-fluid rounded" width="100%">
                    <h4 class="text-center mt-5">
                        <b>
                            Paket A
                        </b>
                    </h4>
                    <div class="container">
                        <p class='h4'>
                            <b>
                            Rp. 175.000 ,- <br>
                            Berat Paket 1250 gram <br>
                            Isi Paket (10 Produk)
                            </b>
                            <br>
                            1 pc Blackthins <br>
                            1 pc Blackmond <br>
                            1 pc Kurma Tunisia 250 gram <br>
                            1 pc Chia Seed <br>
                            2 pcs Veggie Noodles <br>
                            2 pcs Wedang Uwuh <br>
                            1 ps Habbats Drink <br>
                            1 pc Himsalt <br>
                            Box Hampers Ekslusive
                        </p>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 p-5">
            <div class="card rounded shadow">
                <div class="card-body">
                    <img src="{{ url('assets/layanan-produk/oleh.png') }}" class="img-fluid rounded" width="100%">
                    <h4 class="text-center mt-5">
                        <b>
                            Paket B
                        </b>
                    </h4>
                    <div class="container">
                        <p class='h4'>
                            <b>
                            Rp. 175.000 ,- <br>
                            Berat Paket 1250 gram <br>
                            Isi Paket (10 Produk)
                            </b>
                            <br>
                            1 pc Blackthins <br>
                            1 pc Blackmond <br>
                            1 pc Kurma Tunisia 250 gram <br>
                            1 pc Chia Seed <br>
                            2 pcs Veggie Noodles <br>
                            2 pcs Wedang Uwuh <br>
                            1 ps Habbats Drink <br>
                            1 pc Himsalt <br>
                            Box Hampers Ekslusive
                        </p>                        
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
<div class="clearfix mb-5"></div>
@endsection