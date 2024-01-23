@extends('user.template_no_cover')

@section('title')
    {{ __('services.purchase_confirmation') }} Tourism Card
@endsection

@section('content')
    <div class="container-lg mt-5">
        <h1 class="text-center mb-5">
            <b>{{ __('services.tourism_card_purchase_success') }}</b>
        </h1>
        <div class="container mt-5">
            <div class="card shadow" id="BuyTourismCard">
                <div class="card-body p-5">
                    <div class="alert alert-info">
                        <b>{{ __('services.success') }}</b> <br>
                        {{ __('services.buy_tourism_card_confirm_message') }}
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <img src="{{ url('assets/layanan-produk/mockup-tourism-card.png') }}"
                                class="img-fluid mb-4 mb-lg-0">
                        </div>
                        <div class="col-md-8 pt-5">
                            {{-- <p>
                                {{-- <?php
                                $saleKode = saleKode('TC', $sale);
                                ?> --}}
                            {{-- <b class="h2">#{{ $saleKode }}</b> --}}
                            <br>
                            </p>

                            {{-- <p>
                                <b class="h3">Rp.
                                    {{ number_format($item->quantity * $item->price, 0, ',', '.') }}</b>
                                <br>
                                {{ __('services.quantity') }} : {{ $item->quantity }}
                            </p> --}}
                            <p>
                                <b class="h3">Rp.
                                    {{ $products->first()->price }}</b>
                                <br>
                                {{-- {{ __('services.quantity') }} : {{ $products->first()->quantity }} --}}
                            </p>

                            {{-- <p>
                                <b>{{ __('services.payment_method') }}</b> <br>
                                <b>{{ $sale->payment->name }}</b> <br>
                                {{ $sale->payment->account_name }} <br>
                                {{ $sale->payment->account_number }}
                            </p> --}}
                            <div class="d-grid gap-2">
                                {{-- <a href="https://wa.me/<?= str_replace('+', '', getOption('cs_phone')) ?>?text=<?= __('services.wa_message_payment_confirmation', [
    'name' => Auth()->user()->name,
    'product' => 'Tourism Card',
    'no' => $saleKode,
]) ?>"
                                    target="_blank" class="btn btn-info bg-btn-visit text-white">
                                    <i class="bi-whatsapp"></i>
                                    {{ __('services.payment_confirmation') }}
                                </a> --}}
                                <button class="btn btn-info bg-btn-visit text-white" id="pay-button">
                                    {{ __('services.payment_confirmation') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix mb-5"></div>
@endsection
@section('script')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // SnapToken acquired from previous step
            snap.pay('{{ $transaction->snap_token }}', {
                // Optional
                onSuccess: function(result) {
                    window.location.href = "{{ route('checkout-success', $transaction->id) }}";
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
@endsection
