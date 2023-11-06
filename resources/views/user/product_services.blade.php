@extends("user.template")

<?php
use Illuminate\Support\Facades\App;
?>

@section("title")
{{ __("services.product_services") }}
@endsection

@section("style")
<style>
#service-floating-card{
}
.fixed-height{
    height: 700px !important;
}
</style>
@endsection

@section("cover")
<?= url('assets/layanan-produk/bg.png') ?>
@endsection

@section("content")
<div class="container mt-4 text-center" id="service-floating-card">
    <div class="card shadow">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-4 text-center p-4 p-md-0">
                    <img src="{{ url('assets/layanan-produk/tourism-card.png') }}" class="img-fluid" width="100px">
                    <br>
                    <div class="d-none d-md-block">
                        <b>Tourism Card</b>
                    </div>
                    <div class="d-block d-md-none">
                        <b style="font-size:12px">Tourism Card</b>
                    </div>
                </div>
                <div class="col-4 text-center p-4 p-md-0">
                    <img src="{{ url('assets/layanan-produk/ticket.png') }}" class="img-fluid" width="100px">
                    <br>
                    <div class="d-none d-md-block">
                        <b>{{ __("services.tour_packages") }}</b>
                    </div>
                    <div class="d-block d-md-none">
                        <b style="font-size:12px">{{ __("services.tour_packages") }}</b>
                    </div>
                </div>
                <div class="col-4 text-center p-4 p-md-0">
                    <img src="{{ url('assets/layanan-produk/collectible.png') }}" class="img-fluid" width="100px">
                    <br>
                    <div class="d-none d-md-block">
                        <b>{{ __("services.souvenirs") }}</b>
                    </div>
                    <div class="d-block d-md-none">
                        <b style="font-size:12px">{{ __("services.souvenirs") }}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="container-lg">
    <h1 class="text-center mb-5">
        <b>Tourism Card</b>
    </h1>
    <div class="container mt-5">
        <div class="card shadow" id="BuyTourismCard">
            <div class="card-body p-5">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-5 align-items-center">
                        <img src="{{ url('assets/layanan-produk/mockup-tourism-card.png') }}" width="95%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-12 col-lg-7 align-self-center">
                        <p class="h3">
                        {!! __("services.tourism_card_detail_one") !!}
                        </p>
                        <p class="h3">
                            {!! __("services.tourism_card_detail_two") !!}

                        </p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row mt-5">
                    <div class="col-md-12 d-grid gap-2">
                        <a href="{{ url('layanan-produk/tourism-card') }}" class="btn btn-success btn-lg">
                            {{ __("services.buy") }} Tourism Card
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5"></div>
    <div class="clearfix"></div>
    <h1 class="text-center mb-3">
        <b>{{ __("services.tour_packages") }}</b>
    </h1>
    <div class="clearfix"></div>
    <div class="row justify-content-center">
        @foreach($patterns as $pattern)
        <div class="col-sm-12 col-md-6 p-5">
            <div class="card rounded shadow fixed-height">
                <img src="{{ url('assets/patterns/'.$pattern->cover_picture) }}" class="card-img-top">
                <div class="card-body">
                    @if(App::isLocale("id"))
                    <b class="h3">{{ $pattern->name }}</b>
                    <p>
                        {!! $pattern->details !!}
                    </p>
                    @else
                    <b class="h3">{{ $pattern->name_en }}</b>
                    <p>
                        {!! $pattern->details_en !!}
                    </p>
                    @endif
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2">
                        <a href="{{ url('paket-wisata/'.$pattern->slug) }}" class="btn btn-info bg-btn-visit text-white">
                            {{ __("services.show_details") }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach        
    </div>
    <div class="clearfix"></div>
    <h1 class="text-center mt-5 mb-3">
        <b>{{ __("services.souvenirs") }}</b>
    </h1>
    <div class="clearfix"></div>
    <div class="row justify-content-center">
        @foreach($gifts as $gift)
        <div class="col-sm-12 col-md-6 p-5">
            <div class="card rounded shadow">
                <div class="card-body">
                    <img src="{{ url('assets/layanan-produk/'.$gift->picture) }}" class="img-fluid rounded" width="100%">
                    <h4 class="text-center mt-5">
                        <b>
                            @if(App::isLocale("id"))
                            {{ $gift->name }}
                            @else
                            {{ $gift->name_en }}
                            @endif
                        </b>
                    </h4>
                    <div class="container">
                        <p class='h4'>
                            <b>
                            Rp. {{ number_format($gift->price,0,",",".") }} ,- <br>
                            {{ __("services.package_weight") }} {{ $gift->weight }} gram <br>
                            {{ __("services.package_contents") }} ({{ $gift->contents_count }} {{ __("services.products") }})
                            </b>
                            <br>
                            @if(App::isLocale("id"))
                            {!! nl2br($gift->contents) !!}
                            @else
                            {!! nl2br($gift->contents_en) !!}
                            @endif
                        </p>
                        <div class="row mt-5">
                            <div class="col-md-12 d-grid gap-2">
                                <a href="{{ url('beli-layanan-produk/'.$gift->slug) }}" class="btn btn-success btn-lg">
                                    {{ __("services.buy_package") }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach             
    </div>
</div>
<div class="clearfix mb-5"></div>
@endsection