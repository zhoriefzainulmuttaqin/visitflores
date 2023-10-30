@extends("user.template_no_cover")

@section("title")
Beli Layanan Produk Paket Oleh - oleh
@endsection

@section("content")
<div class="container-lg mt-5">
    <h1 class="text-center mb-5">
        <b>Beli Layanan Produk Paket Oleh - oleh</b>
    </h1>
    <div class="container mt-5">
        <div class="card shadow" id="BuyTourismCard">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card rounded shadow">
                            <div class="card-body">
                                <img src="{{ url('assets/layanan-produk/'.$gift->picture) }}" class="img-fluid rounded" width="100%">
                                <h4 class="text-center mt-5">
                                    <b>
                                        {{ $gift->name }}
                                    </b>
                                </h4>
                                <div class="container">
                                    <p class='h4'>
                                        <b>
                                        Rp. {{ number_format($gift->price,0,",",".") }} ,- <br>
                                        Berat Paket {{ $gift->weight }} gram <br>
                                        Isi Paket ({{ $gift->contents_count }} Produk)
                                        </b>
                                        <br>
                                        {!! nl2br($gift->contents) !!}
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
                                        <label>Jumlah</label>
                                        <div class="input-group input-group-lg">
                                            <button class="btn btn-info bg-btn-visit text-white" onclick="minQuantity()" type="button">-</button>
                                            <input type="number" class="form-control" name="quantity" min="1" value="1" placeholder="Jumlah Tourism Card Yang Dibeli" id="CardQuantity">
                                            <button class="btn btn-info bg-btn-visit text-white" onclick="plusQuantity()" type="button">+</button>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <label>Metode Pembayaran</label>
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
                                                <b id="cardPrice">Harga : Rp. {{ number_format($gift->price,0,",",".") }}</b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mb-2 d-grid gap-2">
                                        <button type="submit" class="btn btn-success">
                                            Beli Paket
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

@section("script")

<script>

function minQuantity(){
    let cardPrice = parseInt(<?= $gift->price ?>);
    let cardQuantity = parseInt($("#CardQuantity").val());
    let cardTotalPrice = 0;

    if(cardQuantity > 1){
        cardQuantity -= 1;
    }

    cardTotalPrice = cardQuantity * cardPrice;
    let cardValuePrice = Intl.NumberFormat('en-DE').format(cardTotalPrice);

    $("#cardPrice").html(`Harga : Rp. ${cardValuePrice}`);
    $("#CardQuantity").val(cardQuantity);
}

function plusQuantity(){
    let cardPrice = parseInt(<?= $gift->price ?>);
    let cardQuantity = parseInt($("#CardQuantity").val());
    let cardTotalPrice = 0;

    cardQuantity += 1;

    cardTotalPrice = cardQuantity * cardPrice;
    let cardValuePrice = Intl.NumberFormat('en-DE').format(cardTotalPrice);

    $("#cardPrice").html(`Harga : Rp. ${cardValuePrice}`);
    $("#CardQuantity").val(cardQuantity);
}

</script>

@endsection