@extends("user.template_no_cover")

@section("title")
{{ __("services.purchase_confirmation") }} Tourism Card
@endsection

@section("content")
<div class="container-lg mt-5">
    <h1 class="text-center mb-5">
        <b>{{ __("services.tourism_card_purchase_success") }}</b>
    </h1>
    <div class="container mt-5">
        <div class="card shadow" id="BuyTourismCard">
            <div class="card-body p-5">
                <div class="alert alert-info">
                    <b>{{ __("services.success") }}</b> <br>
                    {{ __("services.buy_tourism_card_confirm_message") }}
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 text-center">
                        <img src="{{ url('assets/layanan-produk/mockup-tourism-card.png') }}" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-8 pt-5">
                        <p>
                            <?php
                            if($sale->id < 10){
                                $saleNo = "0000".$sale->id;
                            }elseif($sale->id < 100){
                                $saleNo = "000".$sale->id;
                            }elseif($sale->id < 1000){
                                $saleNo = "00".$sale->id;
                            }else{
                                $saleNo = "0".$sale->id;                        
                            }
                            $saleKode = date("ymd",strtotime($sale->date_carted)).$sale->user_id.$saleNo;
                            ?>
                            <b class="h2">#{{ $saleKode }}</b>
                            <br>
                        </p>
                        <p>
                            <b class="h3">Rp. {{ number_format(($sale->quantity * $sale->price),0,",",".") }}</b> <br>
                            {{ __("services.quantity") }} : {{ $sale->quantity }}
                        </p>
                        <p>
                            <b>{{ __("services.payment_method") }}</b> <br>
                            <b>{{ $sale->payment->name }}</b> <br>
                            {{ $sale->payment->account_name }} <br>
                            {{ $sale->payment->account_number }}
                        </p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/<?= str_replace("+","",getOption('cs_phone')) ?>?text=<?= __('services.wa_message_payment_confirmation',([
                                "name"=>Auth()->user()->name,
                                "product"=> "Tourism Card",
                                "no" => $saleKode,
                                ])) ?>" target="_blank" class="btn btn-info bg-btn-visit text-white">
                                <i class="bi-whatsapp"></i>
                                {{ __("services.payment_confirmation") }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
<div class="clearfix mb-5"></div>
@endsection