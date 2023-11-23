@extends("partner.template")

@section("title")
Data Profil Mitra : Oleh - oleh
@endsection

@section("content")

<div class="row">
    <div class="col-md-4">
        <div class="card p-1">
            <img src="{{ url('assets/oleh-oleh/'.$profil->picture) }}" class="img-fluid img-card-top">
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <b>Nama Tempat Wisata</b> <br>
                        {{ $profil->name }}
                    </div>
                    <div class="col-md-6">
                        <b>Nama Tempat Wisata (Dalam Bahasa Inggris)</b> <br>
                        {{ $profil->name_en }}
                    </div>
                </div>                
                <div class="row mb-2">
                    <div class="col-md-12">
                        <b>Kota / Kabupaten</b> <br>
                        {{ $profil->city }}
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <b>Alamat / Lokasi</b> <br>
                        {{ $profil->address }}
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <b>Fasilitas</b> <br>
                        {{ $profil->facilities }}
                    </div>
                    <div class="col-md-6">
                        <b>Fasilitas (Dalam Bahasa Inggris)</b> <br>
                        {{ $profil->facilities_en }}
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <b>Deskripsi</b> <br>
                        {{ $profil->details }}
                    </div>
                    <div class="col-md-6">
                        <b>Deskripsi (Dalam Bahasa Inggris)</b> <br>
                        {{ $profil->details_en }}
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <b>Telp / Hp</b> <br>
                        {{ $profil->phone }}
                    </div>
                    <div class="col-md-6">
                        <b>Harga / Biaya</b> <br>
                        Rp. {{ number_format($profil->price,0,",",".") }}
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <b>Link</b> <br>
                        <a href="{{ $profil->link_instagram }}" target="_blank">
                            {{ $profil->link_instagram }}
                        </a> <br>
                        <a href="{{ $profil->link_facebook }}" target="_blank">
                            {{ $profil->link_facebook }}
                        </a> <br>
                        <a href="{{ $profil->link_tiktok }}" target="_blank">
                            {{ $profil->link_tiktok }}
                        </a> <br>
                        <a href="{{ $profil->link_youtube }}" target="_blank">
                            {{ $profil->link_youtube }}
                        </a>
                    </div>
                </div>
                <div class="row mt-5 mb-2">
                    <div class="col-md-12">
                        <a href="https://wa.me/<?= str_replace('+', '', getOption('cs_phone')) ?>?text=Halo, saya ingin mengajukan perubahan data untuk Mitra : <?= $profil->name ?>." target="_blank" class="btn btn-success">
                            Ajukan Perubahan Data
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection