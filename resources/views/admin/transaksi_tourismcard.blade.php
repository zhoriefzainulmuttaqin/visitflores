@extends("admin.template")

@section("title")
Transaksi Tourism Card
@endsection

@section("content")

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped" id="datatable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nama Pembeli</th>
                            <th class="text-center">Kontak Pembeli</th>
                            <th class="text-center">Alamat Pembeli</th>
                            <th class="text-center">Jumlah</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Total</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $transaction)
                        <?php
                        if($transaction->id < 10){
                            $saleNo = "0000".$transaction->id;
                        }elseif($sale->id < 100){
                            $saleNo = "000".$transaction->id;
                        }elseif($sale->id < 1000){
                            $saleNo = "00".$transaction->id;
                        }else{
                            $saleNo = "0".$transaction->id;                        
                        }
                        $saleKode = date("ymd",strtotime($transaction->date_carted)).$transaction->user_id.$saleNo;
                        ?>
                        <tr>
                            <td class="text-center">#{{ $saleKode }}</td>
                            <td>{{ $transaction->user->name }}</td>
                            <td class="text-center">
                                <a href="https://wa.me/{{ convertWANumber($transaction->user->phone) }}" target="_blank" class="btn btn-success btn-sm">
                                    <i class="fab fa-whatsapp"></i>
                                    {{ $transaction->user->phone }}
                                </a>
                            </td>
                            <td>{{ $transaction->user->address }}</td>
                            <td class="text-center">
                                {{ $transaction->quantity }}
                            </td>
                            <td class="text-right">
                                Rp. {{ number_format($transaction->price,0,",",".") }}
                            </td>
                            <td class="text-right">
                                <?php
                                $total = $transaction->price * $transaction->quantity;
                                ?>
                                Rp. {{ number_format($total,0,",",".") }}
                            </td>
                            <td class="text-center">

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection