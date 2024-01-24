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
                            <th class="text-center">Kode Referral</th>
                            <th class="text-center">Jumlah</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Total</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $transaction)
                        <?php
                        $saleKode = saleKode("TC",$transaction);
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
                                {{ $transaction->code_reff }}
                            </td>
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
                                <a href="{{ url('app-admin/transaksi/tourism-card/'.$transaction->id.'/discount-card') }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-tag"></i>
                                    Discount Card
                                    ({{ count($transaction->cards) }})
                                </a>
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
