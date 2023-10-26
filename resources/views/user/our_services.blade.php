@extends("user.template")

@section("title")
Layanan Jasa
@endsection

@section("cover")
<?= url('assets/layanan-jasa/bg.png') ?>
@endsection

@section("content")
<div class="container-lg mt-5">
    <h1 class="text-center mb-5">
        <b>Kami Memiliki Jasa Profesional</b>
        <br>
        <b class="text-warning">Siap untuk mengubah ide anda menjadi kenyataan</b>
    </h1>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body p-5">
                <h1 class="text-center mb-5">
                    <b>Jasa Apa Yang Kami Tawarkan</b>
                </h1>
                <div class="row justify-content-center pb-5 mb-5 border-bottom">
                    <div class="col-md-12 col-lg-4 align-items-center">
                        <img src="{{ url('assets/layanan-jasa/konsultan.png') }}" width="95%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-12 col-lg-8 align-self-center">
                        <p class="h3">KONSULTAN BISNIS PARIWISATA</p>
                        <p class="h4 text-warning">
                            <i class="fa-solid fa-user-friends"></i>
                            Global Qualification
                        </p>
                        <p>
                        Tim konsultan kami terdiri dari berbagai macam bidang yang mempunyai kualifikasi dan sertifikasi global. Bidang keahlian kami beragam mulai dari ahli pariwisata berkelanjutan, pemasaran, keuangan, pendampingan komunitas, lingkungan, sampai dengan keahlian khusus seperti ahli interpretasi, pengembangan wisata sepeda, homestay,  digital marketing, dan sebagainya. Hal ini juga dibuktikan dengan sertifikat keahlian yang berskala nasional dan internasional sehingga kemampuannya dapat dipertanggungjawabkan.
                        </p>
                        <p>
                            <a href="{{ url('layanan-jasa/konsultan') }}" class="text-warning">
                                Baca Lebih
                            </a>
                        </p>
                    </div>
                </div>                
                <div class="row justify-content-center pb-5 mb-5 border-bottom">
                    <div class="col-md-12 col-lg-4 align-items-center">
                        <img src="{{ url('assets/layanan-jasa/konseptor.png') }}" width="95%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-12 col-lg-8 align-self-center">
                        <p class="h3">KONSEPTOR PARIWISATA</p>
                        <p class="h4 text-warning">
                            <i class="fa-solid fa-user-friends"></i>
                            Global Qualification
                        </p>
                        <p>
                        Tim konsultan kami terdiri dari berbagai macam bidang yang mempunyai kualifikasi dan sertifikasi global. Bidang keahlian kami beragam mulai dari ahli pariwisata berkelanjutan, pemasaran, keuangan, pendampingan komunitas, lingkungan, sampai dengan keahlian khusus seperti ahli interpretasi, pengembangan wisata sepeda, homestay,  digital marketing, dan sebagainya. Hal ini juga dibuktikan dengan sertifikat keahlian yang berskala nasional dan internasional sehingga kemampuannya dapat dipertanggungjawabkan.
                        </p>
                        <p>
                            <a href="{{ url('layanan-jasa/konseptor') }}" class="text-warning">
                                Baca Lebih
                            </a>
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center pb-5 mb-5 border-bottom">
                    <div class="col-md-12 col-lg-4 align-items-center">
                        <img src="{{ url('assets/layanan-jasa/pemasaran.png') }}" width="95%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-12 col-lg-8 align-self-center">
                        <p class="h3">PEMASARAN</p>
                        <p class="h4 text-warning">
                            <i class="fa-solid fa-user-friends"></i>
                            Fasilitator/Trainer/Narasumber Manajemen Pemasaran Destinasi Pariwisata
                        </p>
                        <p>
                        Tourism Digital/Internet Marketing <br>
                        Strategi Pemasaran Destinasi Pariwisata <br>
                        Branding Destinasi Pariwisata <br>
                        Komunikasi pemasaran (Promosi) Destinasi Pariwisata
                        </p>
                        <p>
                            <a href="{{ url('layanan-jasa/pemasaran') }}" class="text-warning">
                                Baca Lebih
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5"></div>
    <div class="clearfix"></div>
    <div class="mt-5 mb-5"></div>
</div>
@endsection