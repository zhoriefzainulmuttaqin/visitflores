@extends('user.template_no_cover')

@section('title')
    Tourism Card
@endsection

@section('content')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-26YC4R3P36"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-26YC4R3P36');
    </script>

    <div class="container-lg mt-5">
        <h1 class="text-center mb-5">
            <b>Tourism Card</b>
        </h1>
        <div class="container mt-5">
            <div class="card shadow" id="BuyTourismCard">
                <div class="card-body p-5">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-5 align-items-center">
                            <img src="{{ url('assets/layanan-produk/mockup-tourism-card.png') }}" width="95%"
                                class="img-fluid mb-4 mb-lg-0">
                        </div>
                        <div class="col-md-12 col-lg-7 align-self-center">
                            <p class="h3">
                                {!! __('services.tourism_card_detail_one') !!}
                            </p>
                            <p class="h3">
                                {!! __('services.tourism_card_detail_two') !!}

                            </p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <p class="h2 text-center">
                                <b>{{ __('services.price') }} : Rp.
                                    {{ number_format(getOption('tourism_card_price'), 0, ',', '.') }}</b>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 d-grid gap-2">
                            <a href="{{ url('beli/tourism-card') }}" class="btn btn-success btn-lg">
                                {{ __('services.buy') }} Tourism Card
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix mb-5"></div>
@endsection
