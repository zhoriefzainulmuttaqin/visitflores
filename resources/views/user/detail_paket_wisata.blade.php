@extends('user.template')

@section('title')
Paket Wisata {{ $pattern->name }}
@endsection

@section('cover')
    <?= url('assets/patterns/'.$pattern->cover_picture) ?>
@endsection

@section("content")
<div class="container-lg mt-5 mb-5">
    <h1 class="text-center mb-5">
        <b>Paket Wisata {{ $pattern->name }}</b>
    </h1>
</div>
<?= view("user.pattern.".$pattern->view_file) ?>
<div class="clearfix mt-5 mb-5"></div>
@endsection