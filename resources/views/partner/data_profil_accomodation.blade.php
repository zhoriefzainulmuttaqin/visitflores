@extends("partner.template")

@section("title")
Data Profil Mitra : Akomodasi
@endsection

@section("content")

<link rel="stylesheet" href="{{ url('adminlte/plugins/ekko-lightbox/ekko-lightbox.css') }}">

<div class="row">
    <div class="col-md-4">
        <div class="card p-1">
            <img src="{{ url('assets/akomodasi/'.$profil->picture) }}" class="img-fluid img-card-top">
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <?php
                        $maxStar = floor($profil->star / 20);
                        ?>
                        @for($s = 1; $s <= $maxStar; $s++)
                            <i class="fa fa-star"></i>
                        @endfor
                    </div>
                </div>
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
                        <b>Harga Mulai Dari</b> <br>
                        Rp. {{ number_format($profil->price_start_from,0,",",".") }}
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
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4 class="card-title">Galeri</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($profil->galleries as $item)
                    <div class="col-sm-2">
                        <a href="{{ url('assets/akomodasi/'.$item->picture) }}" data-toggle="lightbox" data-title="{[ $item->name ]}" data-gallery="gallery">
                            <img src="{{ url('assets/akomodasi/'.$item->picture) }}" class="img-fluid mb-2" alt="{[ $item->name ]}" />
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")
<script src="{{ url('adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>

<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

@endsection