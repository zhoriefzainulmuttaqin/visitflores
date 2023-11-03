@extends('layout.app')
@section('title', 'home')
{{-- @section('css') --}}
{{-- @endsection --}}
@section('content')
    <link rel="stylesheet" href="{{ assets('assets/css/mobile.css') }}">

    <div class="hero-wrap js-fullheight" style="background-image: url('/assets/gedung.png');">

    </div>

    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="mt-5 col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="block mt-5 text-center media services d-block">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><img src="/assets/phone.png"></div>
                        </div>
                        <div class="p-2 mt-2 media-body">
                            <h3 class="mb-3 heading font-weight-bold">Visit Cirebon Website</h3>
                            <p class="" style="font-weight: 600;">Dapatkan semua fitur dalam satu genggaman.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="block mt-5 text-center media services d-block">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><img src="/assets/event.png"></div>
                        </div>
                        <div class="p-2 mt-2 media-body">
                            <h3 class="mb-3 heading font-weight-bold">Majestic Event</h3>
                            <p class="" style="font-weight: 600;">The Pioneer of Attractions. Saksikan keseruannya di
                                Cirebon Aja.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="block mt-5 text-center media services d-block">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><img src="/assets/360.png"></div>
                        </div>
                        <div class="p-2 mt-2 media-body">
                            <h3 class="mb-3 heading font-weight-bold">Destinasi 360°</h3>
                            <p class="" style="font-weight: 600;">Melihat destinasi Wisata dengan view 360°.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="shape-background">
        <section class="ftco-section ftco-destination">
            <div class="container">
                <div class="pb-3 mb-5 row justify-content-start">
                    <div class="col-md-12 heading-section ftco-animate">
                        <!-- <span class="subheading">Featured</span> -->
                        <h2 class="mb-4 text-center"><strong>Majestic Event</strong></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="destination-slider owl-carousel ftco-animate">
                            <div class="item">
                                <div class="destination">
                                    <a href="#" class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/lokasi/festival-kuningan.png);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="p-3 text">
                                        <h3>Festival IPPMK Kuningan</h3>
                                        Cimahi, Kuningan<br>
                                        <b style="font-weight: bold;">23 Juli - 6 Agustus 2023</b><br>
                                        Pendaftaran Online<br>
                                        <a href="#" class="listing">See Details ❯</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a href="#" class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url(/assets/lokasi/pesona-gaman.png);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="p-3 text">
                                        <h3>Pesona Gaman Cirebon</h3>
                                        Taman Parkir Sumber, Cirebon<br>
                                        <b style="font-weight: bold;">18 - 20 Agustus 2023</b><br>
                                        Mulai Pukul 09:00<br>
                                        <a href="#" class="listing">See Details ❯</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a href="#" class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url(/assets/lokasi/pentas-seni.png);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="p-3 text">
                                        <h3>Pentas Seni & Festival</h3>
                                        Kantor Bupati, Cirebon<br>
                                        <b style="font-weight: bold;">Senin, 14 Agustus 2023</b><br>
                                        Mulai Pukul 08:00<br>
                                        <a href="#" class="listing">See Details ❯</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a href="#" class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url(/assets/lokasi/stasiun-kejaksan.png);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="p-3 text">
                                        <h3>Stasiun Kejaksan</h3>
                                        Kejaksan, Cirebon<br>
                                        <b style="font-weight: bold;">Senin, 7 Agustus 2023</b><br>
                                        Mulai Pukul 09:00<br>
                                        <a href="#" class="listing">See Details ❯</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a href="#" class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url(/assets/lokasi/alun-alun.png);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="p-3 text">
                                        <h3>Alun-Alun Kejaksan</h3>
                                        Kejaksan, Cirebon<br>
                                        <b style="font-weight: bold;">Senin, 7 Agustus 2023</b><br>
                                        Mulai Pukul 09:00<br>
                                        <a href="#" class="listing">See Details ❯</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a href="#" class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url(/assets/lokasi/gua-sunyaragi.png);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="p-3 text">
                                        <h3>Gua Sunyaragi</h3>
                                        Kejaksan, Cirebon<br>
                                        <b style="font-weight: bold;">Senin, 7 Agustus 2023</b><br>
                                        Mulai Pukul 09:00<br>
                                        <a href="#" class="listing">See Details ❯</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a href="#" class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url(/assets/lokasi/gedung-bat.png);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="p-3 text">
                                        <h3>Gedung BAT</h3>
                                        Lemahwungkuk, Cirebon<br>
                                        <b style="font-weight: bold;">Senin, 7 Agustus 2023</b><br>
                                        Mulai Pukul 09:00<br>
                                        <a href="#" class="listing">See Details ❯</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a href="#" class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url(/assets/lokasi/masjid-raya.png);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="p-3 text">
                                        <h3>Masjid Raya At-Taqwa</h3>
                                        Kejaksan, Cirebon<br>
                                        <b style="font-weight: bold;">Senin, 7 Agustus 2023</b><br>
                                        Mulai Pukul 09:00<br>
                                        <a href="#" class="listing">See Details ❯</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a href="#" class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url(/assets/lokasi/balai-kota.png);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="p-3 text">
                                        <h3>Balai Kota Cirebon</h3>
                                        Kejaksan, Cirebon<br>
                                        <b style="font-weight: bold;">Senin, 7 Agustus 2023</b><br>
                                        Mulai Pukul 09:00<br>
                                        <a href="#" class="listing">See Details ❯</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="destination">
                                    <a href="#" class="img d-flex justify-content-center align-items-center"
                                        style="background-image: url(/assets/lokasi/danau-setu.png);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="p-3 text">
                                        <h3>Danau Setu Patok</h3>
                                        Lemahwungkuk, Cirebon<br>
                                        <b style="font-weight: bold;">Senin, 7 Agustus 2023</b><br>
                                        Mulai Pukul 09:00<br>
                                        <a href="#" class="listing">See Details ❯</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-5 row">
                    <div class="col"></div>
                    <div class="col-4 ftco-animate">
                        <h6 class="text-center" href="#"
                            style="background-color: #122f4d; color: #ddd; padding: 20px; border-radius: 10px;">Lihat Semua
                            Event <strong>&nbsp;-❯</strong></h6>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </section>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="pb-3 mb-5 row justify-content-start">
                <div class="col-md-9 heading-section ftco-animate">
                    <h2 class="mb-4"><strong>TOP Wisata</strong></h2>
                    <b class="subheading">Berikut ini daftar wisata yang sering dikunjungi wisatawan.</b>
                </div>
                <div class="col-md-3 ftco-animate">
                    <h6 class="text-center" href="#"
                        style="background-color: #122f4d; color: #ddd; padding: 20px; border-radius: 10px;">Eksplor Semua
                        <strong>&nbsp;-❯</strong>
                    </h6>
                </div>
            </div>
        </div>
        <div class="container-fluid ftco-animate">
            <div class="row">
                <swiper-container class="mySwiper" effect="coverflow" grab-cursor="true" centered-slides="true"
                    slides-per-view="4" coverflow-effect-rotate="50" coverflow-effect-stretch="0"
                    coverflow-effect-depth="100" coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true"
                    loop="true">
                    <swiper-slide class="card">
                        <img src="/assets/kotak/alun-alun.png" />
                        <div class="image-caption">
                            <b style="font-weight: 800;">Alun-Alun Kejaksan</b><br>
                            Kejaksan, Kota Cirebon
                        </div>
                    </swiper-slide>
                    <swiper-slide class="card">
                        <img src="/assets/kotak/pantai.png" />
                        <div class="image-caption">
                            <b style="font-weight: 800;">Pantai Kejawanan</b><br>
                            Lemahwungkuk, Kota Cirebon
                        </div>
                    </swiper-slide>
                    <swiper-slide class="card">
                        <img src="/assets/kotak/batu-lawang.png" />
                        <div class="image-caption">
                            <b style="font-weight: 800;">Batu Lawang</b><br>
                            Gempol, Kota Cirebon
                        </div>
                    </swiper-slide>
                    <swiper-slide class="card">
                        <img src="/assets/kotak/stasiun-kejaksan.png" />
                        <div class="image-caption">
                            <b style="font-weight: 800;">Stasiun Kejaksan</b><br>
                            Kejaksan, Kota Cirebon
                        </div>
                    </swiper-slide>
                    <swiper-slide class="card">
                        <img src="/assets/kotak/gua-sunyaragi.png" />
                        <div class="image-caption">
                            <b style="font-weight: 800;">Gua Sunyaragi</b><br>
                            Kejaksan, Kota Cirebon
                        </div>
                    </swiper-slide>
                    <swiper-slide class="card">
                        <img src="/assets/kotak/gedung-bat.png" />
                        <div class="image-caption">
                            <b style="font-weight: 800;">Gedung BAT</b><br>
                            Lemahwungkuk, Kota Cirebon
                        </div>
                    </swiper-slide>
                    <swiper-slide class="card">
                        <img src="/assets/kotak/masjid-raya.png" />
                        <div class="image-caption">
                            <b style="font-weight: 800;">Masjid Raya At-Taqwa</b><br>
                            Lemahwungkuk, Kota Cirebon
                        </div>
                    </swiper-slide>
                    <swiper-slide class="card">
                        <img src="/assets/kotak/balai-kota.png" />
                        <div class="image-caption">
                            <b style="font-weight: 800;">Balai Kota</b><br>
                            Kejaksan, Kota Cirebon
                        </div>
                    </swiper-slide>
                    <swiper-slide class="card">
                        <img src="/assets/kotak/danau-setu.png" />
                        <div class="image-caption">
                            <b style="font-weight: 800;">Danau Setu Patok</b><br>
                            Lemahwungkuk, Kota Cirebon
                        </div>
                    </swiper-slide>
                </swiper-container>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="pb-3 mb-5 row justify-content-start">
                <div class="col-md-9 heading-section ftco-animate">
                    <h2 class="mb-4"><strong>TOP Kuliner</strong></h2>
                    <b class="subheading">Berikut ini daftar kuliner yang sering dinikmati wisatawan.</b>
                </div>
                <div class="col-md-3 ftco-animate">
                    <h6 class="text-center" href="#"
                        style="background-color: #122f4d; color: #ddd; padding: 20px; border-radius: 10px;">Eksplor Semua
                        <strong>&nbsp;-❯</strong>
                    </h6>
                </div>
            </div>
        </div>
        <div class="container-fluid ftco-animate">
            <div class="row">
                <div class="image-container">
                    <div class="image">
                        <img src="/assets/makanan/nasi.png" alt="Nasi Jamblang">
                        <div class="text-center image-caption"
                            style="background: transparent; color: #ddd; border-radius: 0px 0px 35px 35px;">
                            <b style="font-weight: 800;">Nasi Jamblang</b><br>
                        </div>
                    </div>
                    <div class="image">
                        <img src="/assets/makanan/empal.png" alt="Empal Gentong">
                        <div class="text-center image-caption"
                            style="background: transparent; color: #ddd; border-radius: 0px 0px 35px 35px;">
                            <b style="font-weight: 800;">Empal Gentong</b><br>
                        </div>
                    </div>
                    <div class="image">
                        <img src="/assets/makanan/mie.png" alt="Mie Koclok">
                        <div class="text-center image-caption"
                            style="background: transparent; color: #ddd; border-radius: 0px 0px 35px 35px;">
                            <b style="font-weight: 800;">Mie Koclok</b><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-destination">
        <div class="container">
            <div class="pb-3 mb-5 row justify-content-start">
                <div class="col-md-12 heading-section ftco-animate">
                    <!-- <span class="subheading">Featured</span> -->
                    <h2 class="mb-4 text-center"><strong>Berita Terkini</strong></h2>
                </div>
            </div>
            <div class="row ftco-animate" style="padding-bottom: 100px;">
                <div class="col">
                    <img src="/assets/lokasi/waduk.png" alt="Waduk Darma" width="95%">
                </div>
                <div class="col" style="font-size: large;">
                    <h5 style="font-weight: bold; font-size: xx-large;">Waduk Darma</h5>
                    Waduk Darma merupakan salah satu tempat wisata di Kabupaten Kuningan, tepatnya di Desa Jagara, Kecamatan
                    Darma. Waduk ini mulai dibangun sejak tahun 1920an. Waduk ini terutama dimanfaatkan untuk mengairi lahan
                    pertanian seluas sekitar 22.600 hektar di Kuningan dan Cirebon. Selain itu, waduk ini juga dimanfaatkan
                    untuk menyediakan air bersih bagi masyarakat Luragung, Ciawigebang, Garawangi, dan sebagian
                    Kuningan.<br>
                    Waduk ini pun dimanfaatkan sebagai sarana perikanan darat oleh masyarakat sekitar dengan menggunakan
                    jala terapung. Waduk ini juga dapat dijadikan sarana rekreasi dan olahraga, terutama di sore hari.
                    Fasilitas yang tersedia di waduk ini antara lain kawasan perkemahan, perahu wisata, penginapan, panggung
                    hiburan, wahana permainan anak, aula, spot foto, dan sebagainya.
                </div>
            </div>
            <div class="row ftco-animate" style="padding-bottom: 100px;">
                <div class="col" style="font-size: large;">
                    <h5 style="font-weight: bold; font-size: xx-large;">Cibulan</h5>
                    Menurut cerita yang berkembang di kalangan masyarakat Desa Maniskidul dan masayarakat kuningan pada
                    umumnya, ikan dewa yang ada di kolam Cibulan ini konon merupakan prajurit-prajutir yang membangkan dan
                    tidak setia pada masa pemerintahan Prabu Siliwangi. Singkat cerita, prajurit-prajurit tersebut dikutuk
                    oleh Prabu Siliwangi menjadi ikan. Ikan-ikan dewa ini dari dulu hingga sekarang jumlahnya tidak
                    berkurang ataupun bertambah. Apabila kolam dikuras, ikan-ikan ini akan hilang entah kemana namun saat
                    kolam diisi air, mereka akan kembali lagi dengan jumlah seperti semula. Terlepas dari benar atau
                    tidaknya legenda itu sampai saat ini tidak ada yang berani mengambil ikan ini karena ada kepercayaan
                    bahwa barang siapa yang berani mengganggu ikan-ikan tersebut akan mendapatkan kemalangan.<br>
                    Di dalam objek wisata ini terdapat dua kolam besar. Selain kolan ikan dewa yang jinak, di sudut barat
                    pemandian ini juga terdapat tujuh sumber mata air yang dikeramatkan yang bernama Tujuh Sumur, yang
                    meliputi Sumur Kejayaan, Sumur Kemulyaan, Sumur Pengabulan, Sumur CIrancana, Sumur Cisandane, Sumur
                    Kemudahan, dan Sumur Keselamatan.
                </div>
                <div class="col">
                    <img src="/assets/lokasi/cibulan.png" alt="Cibulan" width="95%">
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col">
                    <img src="/assets/lokasi/curug.png" alt="Curug Bangkong" width="95%">
                </div>
                <div class="col" style="font-size: large;">
                    <h5 style="font-weight: bold; font-size: xx-large;">Curug Bangkong</h5>
                    Destinasi wisata alam Curug Bangkong sendiri berjarak kurang lebih 9km dari pusat kota Kuningan. Lokasi
                    ini bisa diakses menggunakan mobil dengan rute jalan yang sudah bagus. Lokasinya di Kertawirama,
                    Nuaherang, Kabupaten Kuningan.<br>
                    Sajian air terjun mempesona dengan air jernih, alam hijau dan suasana yang menenangkan. Tempat yang
                    cocok untuk refresing pikiran dan kepenatan jiwa. Rasa jenuh suasana perkotaan, akan hilang seketika
                    ketika tiba di Curug Bangkong.<br>
                    Curug Bangkong merupakan salah satu destinasi wisata yang sangat populer. Air terjun ini menawarkan
                    keindahan alam luar biasa yang menjadi daya tarik utamanya. Dikelilingi oleh perbukitan dan persawahan
                    hijau serta pepohonan rimbun di sekitarnya. Terdapat cukup banyak fasilitas pelengkap di sana seperti
                    gazebo dan warung-warung makan, kolam mandi, toilet dan kamar mandi, juga tempat parkir. Untuk ketinggan
                    Curug Bangkon kurang lebih 15-20 meter dengan lebar 3 meter. Pada area bawah air terjun terdapat kolam
                    alami dan buatan yang cukup luas. Penamaan Bangkong tersebut berasal dari banyaknya hewan kodok yang
                    sering berbunyi dan bersaut-sautan seperti paduan suara. Namun, ada pula certa mitos yaitu konon
                    terdapat seekor kodok raksasa, yang mana bunyinya bisa didengar seluruh pelosok desa. Dipercaya bahwa
                    kodok tersebut merupakan jelmaan topi caping milik sesepuh Dewa Kertawirama yang bernama Abah wira.
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-md-5 heading-section ftco-animate">
                    <span class="subheading">Best Traveling Website</span>
                    <h2 class="pb-3 mb-4"><strong>Mengapa</strong> Cirebon?</h2>
                    <p>Anda perlu mengunjungi Cirebon karena kota ini adalah sebuah permata budaya yang kaya. Salah satu
                        daya tarik utama adalah Keraton Kasepuhan, sebuah istana kerajaan yang berusia ratusan tahun dan
                        merupakan contoh indah arsitektur Jawa klasik.</p>
                    <p>Keseluruhan, Cirebon adalah tempat yang sempurna untuk merasakan perpaduan antara budaya tradisional
                        yang kaya dan pesona alam yang menawan.</p>
                    <p><a href="#" class="px-4 py-3 mt-4 btn btn-primary btn-outline-primary">Read more</a></p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 heading-section ftco-animate">
                    <span class="subheading">Testimoni</span>
                    <h2 class="pb-3 mb-4"><strong>Customers</strong> Kami Mengatakan</h2>
                    <div class="row ftco-animate">
                        <div class="col-md-12">
                            <div class="carousel-testimony owl-carousel">
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="mb-5 user-img"
                                            style="background-image: url(/template/images/person_1.jpg)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text ml-md-4">
                                            <p class="mb-5">Interfacenya sederhana dan user-friendly sehingga mudah
                                                digunakan bagi saya wisatawan dari luar jawa yang ingin menikmati kebudayaan
                                                disini.</p>
                                            <p class="name">Cecil Harvey</p>
                                            <span class="position">Pengunjung dari Kalimantan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="mb-5 user-img"
                                            style="background-image: url(/template/images/person_2.jpg)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text ml-md-4">
                                            <p class="mb-5">Asik sekali menggunakan produk tourism card, bisa
                                                menggunakannya dengan fleksibel mau ke kuliner, wisata ataupun oleh-oleh.
                                            </p>
                                            <p class="name">Bartz Klauser</p>
                                            <span class="position">Pengunjung dari Sumatra</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="mb-5 user-img"
                                            style="background-image: url(/template/images/person_3.jpg)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text ml-md-4">
                                            <p class="mb-5">Proses memesan tiketnya sangat cepat, saya bahkan dapat
                                                melihat pilihan tanggal yang tersedia dan harga tiket secara langsung.</p>
                                            <p class="name">Zidane Tribal</p>
                                            <span class="position">Pengunjung dari Singapura</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .ftco-section-parallax {
            text-align: center;
            margin-top: 30px;
            /* Pusatkan teks secara horizontal */
        }

        /* Atur margin pada layar besar */
        @media (min-width: 768px) {
            .ftco-section-parallax h5 {
                padding: 200px 0;
                /* Tetapkan padding atas dan bawah, tanpa padding pada sisi kiri dan kanan */
            }
        }

        /* Atur margin pada layar kecil (mobile) */
        @media (max-width: 767px) {
            .ftco-section-parallax h5 {
                padding: 20px 0;
            }
        }
    </style>

    <section class="ftco-section-parallax">
        <div class="d-flex align-items-center" style="background-color: #dcdcdc;">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <h5 class="text-center">Advertisement</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-parallax">
        <div class="d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <h2 style="font-weight: 800; padding-top: 150px; padding-bottom: 100px;">Supported by</h2>
                </div>
                <div class="row" style="padding-bottom: 150px;">
                    <div class="col">
                        <img src="/assets/sponsor/disbudpar.png">
                    </div>
                    <div class="col">
                        <img src="/assets/sponsor/pesona.png">
                    </div>
                    <div class="col">
                        <img src="/assets/sponsor/multiverse.png">
                    </div>
                    <div class="col">
                        <img src="/assets/sponsor/jagat.png">
                    </div>
                    <div class="col">
                        <img src="/assets/sponsor/bi.png">
                    </div>
                    <div class="col">
                        <img src="/assets/sponsor/indo.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
