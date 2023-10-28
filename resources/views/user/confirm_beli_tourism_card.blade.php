@extends("user.template_no_cover")

@section("title")
Pembelian Tourism Card Berhasil
@endsection

@section("content")
<div class="container-lg mt-5">
    <h1 class="text-center mb-5">
        <b>Pembelian Tourism Card Berhasil</b>
    </h1>
    <div class="container mt-5">
        <div class="card shadow" id="BuyTourismCard">
            <div class="card-body p-5">
                <div class="alert alert-success">
                    <b>Berhasil</b> <br>
                    Pembelian Tourism Card berhasil, silahkan lakukan pembayaran kemudian konfirmasi melalui halaman konfirmasi pembayaran.
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
                    ?>
                    <b class="h3">Pembelian#{{ $saleNo }}</b>
                    <br>
                    Jumlah : {{ $sale->quantity }}
                </p>
                <p>
                    <b>Metode Pembayaran</b> <br>
                    <b>{{ $sale->payment->name }}</b> <br>
                    {{ $sale->payment->account_name }} <br>
                    {{ $sale->payment->account_number }}
                </p>
            </div>
        </div>
    </div>    
</div>
<div class="clearfix mb-5"></div>
@endsection