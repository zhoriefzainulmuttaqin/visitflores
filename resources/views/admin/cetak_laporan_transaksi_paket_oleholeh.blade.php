<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cetak Laporan Transaksi Paket Oleh - Oleh | {{ config("app.name") }}</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{ url('adminlte') }}/dist/css/adminlte.min.css?v=3.2.0">

<script>
    window.print();
</script>

</head>
<body class="p-3">
    <h1 class="text-center">
        <?= strtoupper("Laporan Transaksi Paket Oleh - Oleh") ?>
    </h1>
    <h2 class="text-center">
        <?= strtoupper($title) ?>
    </h2>
    <hr>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">#</th>
                <th class="text-center">Nama Pembeli</th>
                <th class="text-center">Kontak Pembeli</th>
                <th class="text-center">Alamat Pembeli</th>
                <th class="text-center">Paket</th>
                <th class="text-center">Jumlah</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            <?php $grandTotal = 0; ?>
            @foreach($rows as $transaction)
            <tr>
                <?php
                $no++;
                $saleKode = saleKode("P",$transaction);
                ?>
                <td class="text-center">{{ $no }}</td>
                <td class="text-center">#{{ $saleKode }}</td>
                <td>{{ $transaction->buyer_name }}</td>
                <td class="text-center">
                    {{ $transaction->buyer_phone }}
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
                    $grandTotal += $total;
                    ?>
                    Rp. {{ number_format($total,0,",",".") }}
                </td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td class="text-right" colspan="8">
                    <b>TOTAL</b>
                </td>
                <td class="text-right">
                    <b>Rp. {{  number_format($grandTotal,0,",",".") }}</b>
                </td>
            </tr>
        </tfoot>
    </table>

</body>