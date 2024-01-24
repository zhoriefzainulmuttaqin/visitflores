@extends('user.template_no_cover')

@section('title')
    {{ __('services.buy') }} Tourism Card
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
            <b>{{ __('services.buy') }} Tourism Card</b>
        </h1>
        <div class="container mt-5" style="width: 70% !important;">
            <div class="card shadow" id="BuyTourismCard">
                <div class="card-body" >
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <img src="{{ url('assets/layanan-produk/mockup-tourism-card.png') }}"
                                class="img-fluid mb-4 mb-lg-0">
                        </div>
                    </div>
                    <div class="col-md-8 m-auto">
                        <form method="post" action="{{ route('checkout-process') }}" class="mt-5">
                            @csrf
                            {{-- <input type="hidden" name="quantity" id="CardQuantity" value="1"> --}}

                            <div class="mb-3">
                                <label>Referral</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" name="code_reff" placeholder="Kode Referral"
                                        id="CardQuantityInput">

                                </div>
                            </div>
                            <div style="display: none">
                                @foreach ($products as $product)
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="discountcardsales_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="{{ $product->quantity }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">

                                    <div class="mb-2 d-grid gap-2">
                                        <button type="submit" class="btn btn-success"
                                            data-product-id="{{ $product->id }}"
                                            data-product-price="{{ $product->price }}">
                                            {{ __('services.buy') }} Tourism Card - {{ $product->id }}
                                        </button>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mb-2 d-grid gap-2">
                                <button type="submit" class="btn btn-success">
                                    {{ __('services.buy') }} Tourism Card
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix mb-5"></div>
@endsection

@section('script')
    <script>
        function minQuantity() {
            let cardQuantity = parseInt($("#CardQuantityInput").val());
            if (cardQuantity > 1) {
                cardQuantity -= 1;
                updatePriceAndQuantity(cardQuantity);
            }
        }

        function plusQuantity() {
            let cardQuantity = parseInt($("#CardQuantityInput").val());
            cardQuantity += 1;
            updatePriceAndQuantity(cardQuantity);
        }

        function updatePriceAndQuantity(cardQuantity) {
            let cardPrice = parseInt($('[data-product-id]:checked').data('product-price'));
            let cardTotalPrice = cardQuantity * cardPrice;
            let cardValuePrice = new Intl.NumberFormat('en-DE').format(cardTotalPrice);

            $("#cardPrice").html(`<?= __('services.price') ?> : Rp. ${cardValuePrice}`);
            $("#CardQuantity").val(cardQuantity);
            $("#CardQuantityInput").val(cardQuantity);
        }

        $('[data-product-id]').on('click', function() {
            let cardPrice = parseInt($(this).data('product-price'));
            let cardQuantity = parseInt($("#CardQuantityInput").val());
            let cardTotalPrice = cardQuantity * cardPrice;
            let cardValuePrice = new Intl.NumberFormat('en-DE').format(cardTotalPrice);

            $("#cardPrice").html(`<?= __('services.price') ?> : Rp. ${cardValuePrice}`);
        });
    </script>
@endsection
