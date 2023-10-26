@extends("user.template")

@section("title")
Layanan Jasa Konsultan Bisnis Pariwisata
@endsection

@section("cover")
<?= url('assets/layanan-jasa/konsultan/bg.png') ?>
@endsection

@section("content")
<div class="container-lg mt-5">
    <img src="{{ url('assets/layanan-jasa/konsultan/konsultan.png') }}" class="img-fluid" width="100%">
    <h1 class="text-center mt-5 mb-5">
        <b>Konsultan Bisnis Pariwisata</b>
    </h1>
    <div class="container mt-5">
        <div class="row justify-items-center">
            <div class="col-12 col-md-6 border-end border-bottom p-5">
                <p class="h4 text-center">
                    <i class="text-warning fa-solid fa-user-friends"></i>
                    Global Qualification
                </p>
                <p>
                Tim konsultan kami terdiri dari berbagai macam bidang yang mempunyai kualifikasi dan sertifikasi global. Bidang keahlian kami beragam mulai dari ahli pariwisata berkelanjutan, pemasaran, keuangan, pendampingan komunitas, lingkungan, sampai dengan keahlian khusus seperti ahli interpretasi, pengembangan wisata sepeda, homestay, digital marketing, dan sebagainya. Hal ini juga dibuktikan dengan sertifikat keahlian yang berskala nasional dan internasional sehingga kemampuannya dapat dipertanggungjawabkan.
                </p>
            </div>
            <div class="col-12 col-md-6 border-start border-bottom p-5">
                <p class="h4 text-center">
                    <i class="text-warning bi-headphones"></i>
                    Practicioner
                </p>
                <p>
                Tim konsultan kami juga merupakan praktisi industri yang berpengalaman sebagai owner dan pengelola sektor usaha di industri pariwisata, seperti general manager di hotel berbintang dan travel expert di perusahaan travel agent. Implikasinya adalah kami menggunakan teori akademik hanya sebatas sebagai kerangka berpikir, namun rekomendasi yang diberikan akan lebih banyak dari sisi praktis industri.
                </p>
            </div>
            <div class="col-12 col-md-6 border-end border-top p-5">
                <p class="h4 text-center">
                    <i class="text-warning uil-file-check-alt"></i>
                    Experience
                </p>
                <p>
                Pengalaman pengerjaan proyek serta klien kami tidak hanya berskala daerah, namun juga nasional. Selain itu tenaga ahli individu kami beragam, mulai dari 10 tahun hingga 40 tahun pengalaman kerja.
                </p>
            </div>
            <div class="col-12 col-md-6 border-start border-top p-5">
                <p class="h4 text-center">
                    <i class="text-warning fa-solid fa-user-cog"></i>
                    Sustainability
                </p>
                <p>
                Kami mempunyai visi bahwa pariwisata berkelanjutan merupakan masa depan pariwisata global. Untuk iitu setiap pekerjaan yang kami lakukan mempertimbangkan segala aspek dan dampak pariwisata yang ditimbulkannya. Mulai dari aspek lingkungan, sosial ekonomi masyarakat, budaya, dan sistem pengelolaan yang berkelanjutan.
                </p>
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