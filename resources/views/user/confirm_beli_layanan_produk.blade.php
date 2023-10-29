@extends("user.template_no_cover")

@section("title")
Konfirmasi Pembelian Layanan Paket Oleh - oleh
@endsection

@section("content")
<div class="container-lg mt-5">
    <h1 class="text-center mb-5">
        <b>Pembelian Layanan Paket Oleh - oleh Berhasil</b>
    </h1>
    <div class="container mt-5">
        <div class="card shadow" id="BuyTourismCard">
            <div class="card-body p-5">
                <div class="alert alert-info">
                    <b>Berhasil</b> <br>
                    Pemesanan Produk Paket Oleh - oleh berhasil, silahkan lakukan pembayaran kemudian konfirmasi pembayaran melalui chat admin dengan klik tombol di bawah.
                </div>
                <div class="row justify-content-center">
                    @foreach($sale->items as $item)
                    <?php $gift = $item->gift; ?>
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
                    @endforeach
                    <div class="col-md-7 mt-5 mt-md-0">
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
                            @foreach($sale->items as $item)
                            <b class="h3">Rp. {{ number_format(($item->quantity * $item->snapshot_price),0,",",".") }}</b> <br>
                            Jumlah : {{ $item->quantity }}
                            @endforeach
                        </p>
                        <p>
                            <b>Metode Pembayaran</b> <br>
                            <b>{{ $sale->payment->name }}</b> <br>
                            {{ $sale->payment->account_name }} <br>
                            {{ $sale->payment->account_number }}
                        </p>
                        <div class="d-grid gap-2">
                            <a href="https://wa.me/<?= str_replace("+","",getOption('cs_phone')) ?>?text=Halo, saya *<?= Auth()->user()->name ?>* ingin konfirmasi pembayaran untuk pembelian Layanan Produk Paket Oleh - oleh *No.<?= str_replace('#','',$saleKode) ?>*." target="_blank" class="btn btn-info text-white">
                                Konfirmasi Pembayaran
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