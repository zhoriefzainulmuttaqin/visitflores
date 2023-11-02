@extends("user.template_no_cover")

@section("title")
{{ __ ("services.buy") }} Tourism Card
@endsection

@section("content")
<div class="container-lg mt-5">
    <h1 class="text-center mb-5">
        <b>{{ __ ("services.buy") }} Tourism Card</b>
    </h1>
    <div class="container mt-5">
        <div class="card shadow" id="BuyTourismCard">
            <div class="card-body p-5">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <img src="{{ url('assets/layanan-produk/TOURISM_CARD_1.png') }}" width="80%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ url('assets/layanan-produk/TOURISM_CARD_2.png') }}" width="80%" class="img-fluid mb-4 mb-lg-0">                
                    </div>
                </div>
                <div class="clearfix"></div>
                <form method="post" action="{{ url('proses-beli/tourism-card') }}" class="mt-5">
                    @csrf
                    <input type="hidden" name="price" value="{{ getOption('tourism_card_price') }}">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label>{{ __("services.quantity") }}</label>
                                <div class="input-group input-group-lg">
                                    <button class="btn btn-info bg-btn-visit text-white" onclick="minQuantity()" type="button">-</button>
                                    <input type="number" class="form-control" name="quantity" min="1" value="1" placeholder="Jumlah Tourism Card Yang Dibeli" id="CardQuantity">
                                    <button class="btn btn-info bg-btn-visit text-white" onclick="plusQuantity()" type="button">+</button>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label>{{ __("services.payment_method") }}</label>
                                <?php
                                $pno = 0;
                                ?>
                                @foreach($payments as $payment)
                                <?php $pno++; ?>                        
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="payment" value="{{ $payment->id }}" <?= ($pno == 1) ? "checked" : "" ?>>
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
                                        <b id="cardPrice">{{ __("services.price") }} : Rp. {{ number_format(getOption('tourism_card_price'),0,",",".") }}</b>
                                    </p>
                                </div>
                            </div>
                            <div class="mb-2 d-grid gap-2">
                                <button type="submit" class="btn btn-success">
                                    {{ __("services.buy") }} Tourism Card
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
<div class="clearfix mb-5"></div>
@endsection

@section("script")

<script>

function minQuantity(){
    let cardPrice = parseInt(<?= getOption('tourism_card_price') ?>);
    let cardQuantity = parseInt($("#CardQuantity").val());
    let cardTotalPrice = 0;

    if(cardQuantity > 1){
        cardQuantity -= 1;
    }

    cardTotalPrice = cardQuantity * cardPrice;
    let cardValuePrice = Intl.NumberFormat('en-DE').format(cardTotalPrice);

    $("#cardPrice").html(`<?= __("services.price") ?> : Rp. ${cardValuePrice}`);
    $("#CardQuantity").val(cardQuantity);
}

function plusQuantity(){
    let cardPrice = parseInt(<?= getOption('tourism_card_price') ?>);
    let cardQuantity = parseInt($("#CardQuantity").val());
    let cardTotalPrice = 0;

    cardQuantity += 1;

    cardTotalPrice = cardQuantity * cardPrice;
    let cardValuePrice = Intl.NumberFormat('en-DE').format(cardTotalPrice);

    $("#cardPrice").html(`<?= __("services.price") ?> : Rp. ${cardValuePrice}`);
    $("#CardQuantity").val(cardQuantity);
}

</script>

@endsection