@extends('user.template_no_cover')

@section('title')
    {{ __('services.buy_souvenirs') }}
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
            <b>{{ __('services.buy_souvenirs') }}</b>
        </h1>
        <div class="container mt-5">
            <div class="card shadow">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card rounded shadow">
                                <div class="card-body">
                                    <img src="{{ url('assets/layanan-produk/' . $gift->picture) }}" class="img-fluid rounded"
                                        width="100%">
                                    <h4 class="text-center mt-5">
                                        <b>
                                            @if (App::isLocale('id'))
                                                {{ $gift->name }}
                                            @else
                                                {{ $gift->name_en }}
                                            @endif
                                        </b>
                                    </h4>
                                    <div class="container">
                                        <p class='h4'>
                                            <b>
                                                Rp. {{ number_format($gift->price, 0, ',', '.') }} ,- <br>
                                                {{ __('services.package_weight') }} {{ $gift->weight }} gram <br>
                                                {{ __('services.package_contents') }} ({{ $gift->contents_count }}
                                                {{ __('services.products') }})
                                            </b>
                                            <br>
                                            @if (App::isLocale('id'))
                                                {!! nl2br($gift->contents) !!}
                                            @else
                                                {!! nl2br($gift->contents_en) !!}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form method="post" action="{{ url('proses-beli/layanan-produk') }}" class="mt-5 mt-md-0">
                                @csrf
                                <input type="hidden" name="gift_id" value="{{ $gift->id }}">
                                <input type="hidden" name="price" value="{{ $gift->price }}">
                                <div class="row justify-content-center">
                                    <div class="col-md-7">
                                        <div class="mb-3">
                                            <label>{{ __('services.quantity') }}</label>
                                            <div class="input-group input-group-lg">
                                                <button class="btn btn-info bg-btn-visit text-white" onclick="minQuantity()"
                                                    type="button">-</button>
                                                <input type="number" class="form-control" name="quantity" min="1"
                                                    value="1" placeholder="Jumlah Tourism Card Yang Dibeli"
                                                    id="CardQuantity">
                                                <button class="btn btn-info bg-btn-visit text-white"
                                                    onclick="plusQuantity()" type="button">+</button>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label>{{ __('services.payment_method') }}</label>
                                            <?php
                                            $pno = 0;
                                            ?>
                                            @foreach ($payments as $payment)
                                                <?php $pno++; ?>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="payment"
                                                            value="{{ $payment->id }}" <?= $pno == 1 ? 'checked' : '' ?>>
                                                        <b>{{ $payment->name }}</b> <br>
                                                        {{ $payment->account_name }} <br>
                                                        {{ $payment->account_number }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="mb-2">
                                            <div class="row mt-5">
                                                <p class="h3 text-center">
                                                    <b id="cardPrice">{{ __('services.price') }} : Rp.
                                                        {{ number_format($gift->price, 0, ',', '.') }}</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mb-2 d-grid gap-2">
                                            <button type="submit" class="btn btn-success">
                                                {{ __('services.buy_package') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix mb-5"></div>
@endsection

@section('script')
    <script>
        function minQuantity() {
            let cardPrice = parseInt(<?= $gift->price ?>);
            let cardQuantity = parseInt($("#CardQuantity").val());
            let cardTotalPrice = 0;

            if (cardQuantity > 1) {
                cardQuantity -= 1;
            }

            cardTotalPrice = cardQuantity * cardPrice;
            let cardValuePrice = Intl.NumberFormat('en-DE').format(cardTotalPrice);

            $("#cardPrice").html(`<?= __('services.price') ?> : Rp. ${cardValuePrice}`);
            $("#CardQuantity").val(cardQuantity);
        }

        function plusQuantity() {
            let cardPrice = parseInt(<?= $gift->price ?>);
            let cardQuantity = parseInt($("#CardQuantity").val());
            let cardTotalPrice = 0;

            cardQuantity += 1;

            cardTotalPrice = cardQuantity * cardPrice;
            let cardValuePrice = Intl.NumberFormat('en-DE').format(cardTotalPrice);

            $("#cardPrice").html(`<?= __('services.price') ?> : Rp. ${cardValuePrice}`);
            $("#CardQuantity").val(cardQuantity);
        }
    </script>
@endsection
