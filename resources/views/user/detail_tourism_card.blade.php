@extends("user.template_no_cover")

@section("title")
Tourism Card
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
                    <div class="col-md-12">
                        <p class="h2 text-center">
                            <b>Harga : Rp. {{ number_format(getOption('tourism_card_price'),0,",",".") }}</b>
                        </p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12 d-grid gap-2">
                        <a href="{{ url('beli/tourism-card') }}" class="btn btn-success btn-lg">
                            Beli Tourism Card
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
<div class="clearfix mb-5"></div>
@endsection