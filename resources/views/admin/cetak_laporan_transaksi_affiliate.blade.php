<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Laporan Transaksi Affiliate | {{ config('app.name') }}</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ url('adminlte') }}/dist/css/adminlte.min.css?v=3.2.0">

    <script>
        window.print();
    </script>

</head>

<body class="p-3">
    <h1 class="text-center">
        <?= strtoupper('Laporan Transaksi Affiliate') ?>
    </h1>
    <h2 class="text-center">
        <?= strtoupper($title) ?>
    </h2>
    <hr>

    <table class="table table-striped table-bordered">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Wilayah</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Kode Referral</th>
                        <th class="text-center">Persentase Komisi</th>
                        <th class="text-center">Pendapatan Komisi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php $grandTotal = 0; ?>
                    @php
                        $totalCommissions = [];
                    @endphp
                    @foreach ($affiliators as $aff)
                        @php
                            $total_commission = 0;
                        @endphp
                        <tr>
                            <?php $no++; ?>
                            <td class="text-center">{{ $no }}</td>
                            <td class="text-center">{{ $aff->name }}</td>
                            <td class="text-center">{{ $aff->location->name }}</td>
                            <td class="text-center">
                                <?php if($aff->status == 1) : ?>
                                <span class="badge badge-primary">Ketua Wilayah</span>
                                <?php else : ?>
                                <span class="badge badge-success">Anggota</span>
                                <?php endif; ?>
                            </td>                            <td>{{ $aff->code_reff }}</td>
                            <td class="text-center">{{ $aff->commission_percent }}%</td>

                            <td class="text-right">
                                @foreach ($tourismSale as $card)
                                    @php
                                        if ($card->code_reff == $aff->code_reff) {
                                            $commission_idr = ($aff->commission_percent / 100) * $card->price;
                                            $total_commission += $commission_idr;


                                        }
                                    @endphp
                                @endforeach
                                Rp. {{ number_format($total_commission, 0, ',', '.') }}
                            </td>


                        </tr>
                        @php
                            // Store the total_commission in the associative array
                            $totalCommissions[$aff->code_reff] = $total_commission;
                        @endphp
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-right" colspan="6">
                            <b>TOTAL</b>
                        </td>
                        <td class="text-right">
                            <b>Rp. {{ number_format(array_sum($totalCommissions), 0, ',', '.') }}</b>
                        </td>
                    </tr>
                </tfoot>
            </table>

    </table>

</body>
