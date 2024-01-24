@extends('user.template_no_cover')

@section('title')
    {{ __('services.purchase_confirmation') }} Tourism Card
@endsection

@section('content')
    <div class="container-lg mt-5">
        <h1 class="text-center mb-5">
            <b>{{ __('services.tourism_card_purchase_success') }}</b>
        </h1>
        <div class="container mt-5" style="width: 70% !important;">
            <form id="generateDiscountCardForm" method="post" action="{{ url('checkout/generatecard') }}">
                @csrf
                <input type="hidden" name="sale_id" value="{{ $transaction->id }}" />
                <div class="form-group" style="display: none;">
                    <button type="submit" class="btn btn-block btn-primary">
                        <i class="fa fa-sync"></i>
                        Generate Discount Card
                    </button>
                </div>            </form>

            <div class="card shadow" id="BuyTourismCard">
                <div class="card-body p-5">
                    <div class="alert alert-info">
                        <b>{{ __('services.success') }}</b> <br>
                        {{ __('services.buy_tourism_card_confirm_message') }}
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <img src="{{ url('assets/layanan-produk/mockup-tourism-card.png') }}" class="img-fluid mb-4 mb-lg-0">
                        </div>
                    </div>
                    <div class="col-md-8 pt-5 text-center m-auto">
                        <p>
                            <b class="h3 text-center"> {{ __('services.payment_text_confirmation') }}  Rp. {{ $products->first()->price }}</b>
                            <br>
                        </p>

                        <div class="d-grid gap-2">
                            <button class="btn btn-info bg-btn-visit text-white" id="pay-button">
                                {{ __('services.payment_confirmation') }}
                            </button>
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
            // SnapToken acquired from the previous step
            snap.pay('{{ $transaction->snap_token }}', {
                // Optional
                onSuccess: function(result) {
                    // Submit the form when payment is successful
                    document.getElementById('generateDiscountCardForm').submit();
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just an example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just an example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
@endsection
