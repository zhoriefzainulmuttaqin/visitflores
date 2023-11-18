@extends("admin.template")

@section("title")
Transaksi Paket Oleh - oleh
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
                            <th class="text-center">Paket</th>
                            <th class="text-center">Jumlah</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Sudah Diproses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $transaction)
                        <?php
                        $saleKode = saleKode("P",$transaction);
                        ?>
                        <tr>
                            <td class="text-center">#{{ $saleKode }}</td>
                            <td>{{ $transaction->buyer_name }}</td>
                            <td class="text-center">
                                <a href="https://wa.me/{{ convertWANumber($transaction->buyer_phone) }}" target="_blank" class="btn btn-success btn-sm">
                                    <i class="fab fa-whatsapp"></i>
                                    {{ $transaction->buyer_phone }}
                                </a>
                            </td>
                            <td>{{ $transaction->buyer_address }}</td>
                            @foreach($transaction->items as $item)
                            <td>{{ $item->snapshot_name }}</td>
                            <td class="text-center">
                                {{ $item->quantity }}
                                {{ $item->snapshot_unit }}
                            </td>
                            <td class="text-right">
                                Rp. {{ number_format($item->snapshot_price,0,",",".") }}
                            </td>
                            <td class="text-right">
                                <?php
                                $total = $item->snapshot_price * $item->quantity;
                                ?>
                                Rp. {{ number_format($total,0,",",".") }}
                            </td>
                            @endforeach
                            <td class="text-center">
                                @if($transaction->status == 1)
                                <form method="post" action="{{ url('app-admin/transaksi/paket-oleholeh/tandai') }}">
                                    @csrf
                                    <input type="hidden" name="sale_id" value="{{ $transaction->id }}">
                                    <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Yakin sudah diproses.?')">
                                        <i class="fa fa-check"></i>
                                        Tandai Sudah Diproses
                                    </button>
                                </form>
                                @else
                                <i class="fa fa-check"></i>
                                @endif
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