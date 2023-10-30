@extends('user.template')

@section('title')
Paket Wisata {{ $pattern->name }}
@endsection

@section('cover')
    <?= url('assets/patterns/'.$pattern->cover_picture) ?>
@endsection

@section("content")
<div class="section" style="margin-top:0px;margin-bottom:0px;">
    <div class="container-lg mt-5 mb-5">
        <h1 class="text-center mb-5">
            <b>Paket Wisata {{ $pattern->name }}</b>
        </h1>
    </div>
</div>
<?= view("user.pattern.".$pattern->view_file) ?>
<div class="section" style="margin-top:0px;margin-bottom:0px;">
    <div class="d-grid gap-2 px-5">
        <a href="https://wa.me/<?= str_replace("+","",getOption('cs_phone')) ?>?text=Halo, saya ingin bertanya tentang Paket Wisata <?= $pattern->name ?>." target="_blank" class="btn btn-lg btn-info bg-btn-visit text-white">
            <i class="bi-whatsapp"></i>
            Mari Diskusi
        </a>
    </div>
</div>
@endsection