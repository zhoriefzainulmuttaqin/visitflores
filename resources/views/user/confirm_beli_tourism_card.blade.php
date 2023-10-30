@extends("user.template_no_cover")

@section("title")
Konfirmasi Pembelian Tourism Card
@endsection

@section("content")
<div class="container-lg mt-5">
    <h1 class="text-center mb-5">
        <b>Pembelian Tourism Card Berhasil</b>
    </h1>
    <div class="container mt-5">
        <div class="card shadow" id="BuyTourismCard">
            <div class="card-body p-5">
                <div class="alert alert-info">
                    <b>Berhasil</b> <br>
                    Pemesanan Tourism Card berhasil, silahkan lakukan pembayaran kemudian konfirmasi pembayaran melalui chat admin dengan klik tombol di bawah.
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <img src="{{ url('assets/layanan-produk/TOURISM_CARD_1.png') }}" width="80%" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ url('assets/layanan-produk/TOURISM_CARD_2.png') }}" width="80%" class="img-fluid mb-4 mb-lg-0">                
                    </div>
                </div>
                <div class="clearfix mb-5"></div>
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
                    $saleKode = "#".date("ymd",strtotime($sale->date_carted)).$sale->user_id.$saleNo;
                    ?>
                    <b class="h2">{{ $saleKode }}</b>
                    <br>
                </p>
                <p>
                    <b class="h3">Rp. {{ number_format(($sale->quantity * $sale->price),0,",",".") }}</b> <br>
                    Jumlah : {{ $sale->quantity }}
                </p>
                <p>
                    <b>Metode Pembayaran</b> <br>
                    <b>{{ $sale->payment->name }}</b> <br>
                    {{ $sale->payment->account_name }} <br>
                    {{ $sale->payment->account_number }}
                </p>
                <div class="d-grid gap-2">
                    <a href="https://wa.me/<?= str_replace("+","",getOption('cs_phone')) ?>?text=Halo, saya *<?= Auth()->user()->name ?>* ingin konfirmasi pembayaran untuk pembelian Tourism Card *No.<?= str_replace('#','',$saleKode) ?>*." target="_blank" class="btn btn-info bg-btn-visit text-white">
                        <i class="bi-whatsapp"></i>
                        Konfirmasi Pembayaran
                    </a>
                </div>
            </div>
        </div>
    </div>    
</div>
<div class="clearfix mb-5"></div>
@endsection