@extends("user.template")

@section("title")
Layanan Jasa Konseptor Pariwisata
@endsection

@section("cover")
<?= url('assets/layanan-jasa/pemasaran/bg.png') ?>
@endsection

@section("content")
<div class="container-lg mt-5">
    <img src="{{ url('assets/layanan-jasa/pemasaran/pemasaran.png') }}" class="img-fluid" width="100%">
    <h1 class="text-center mt-5 mb-5">
        <b>Pemasaran</b>
    </h1>
    <div class="container mt-5">
        <div class="row justify-items-center">
            <div class="col-12 col-md-6 border-end border-bottom p-5">
                <p class="h4 text-center">
                    <i class="text-warning fa-solid fa-user-friends"></i>
                    Fasiiltator/Trainer/Narasumber Manajemen Pemasaran destinasi Pariwisata
                </p>
                <p>
                Tourism Digital/Internet Marketing <br>
                Strategi Pemasaran Destinasi Pariwisata <br>
                Branding Destinasi Pariwisata <br>
                Komunikasi pemasaran (Promosi) Destinasi Pariwisata.
                </p>
            </div>
            <div class="col-12 col-md-6 border-start border-bottom p-5">
                <p class="h4 text-center">
                    <i class="text-warning bi-headphones"></i>
                    Pemasaran (Promosi)
                </p>
                <p>
                Advertising <br>
                Sosial Media
                </p>
            </div>
            <div class="col-12 col-md-6 border-end border-top p-5">
                <p class="h4 text-center">
                    <i class="text-warning uil-file-check-alt"></i>
                    Jasa Konsultan Pemasaran Pariwisata
                </p>
                <p>
                Jasa Konsultan Pemasaran Pariwisata Konsultasi dalam pembuatan dan pengembangan rencana pemasaran Konsultasi pengembangan identitas destinasi pariwisata (branding) Konsultasi komunikasi pemasaran destinasi pariwisata
                </p>
            </div>
            <div class="col-12 col-md-6 border-start border-top p-5">
                
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="mb-5"></div>
        <a href="{{ url('layanan-jasa') }}" class="btn btn-primary">
            <i class='fa fa-arrow-left'></i>
            Kembali
        </a>
    </div>
    <div class="mt-5 mb-5"></div>
    <div class="clearfix"></div>
    <div class="mt-5 mb-5"></div>
</div>
@endsection