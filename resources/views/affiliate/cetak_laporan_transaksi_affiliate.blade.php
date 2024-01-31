<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Laporan Transaksi Tourism Card | {{ config('app.name') }}</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ url('adminlte') }}/dist/css/adminlte.min.css?v=3.2.0">

    <script>
        window.print();
    </script>

</head>
@if (Auth::guard('affiliators')->user()->status == 1)
<body class="p-3">
    <h1 class="text-center">
        <?= strtoupper('Laporan Transaksi Tourism Card') ?>
    </h1>
    <h2 class="text-center">
        <?= strtoupper($title) ?>
    </h2>
    <hr>
    <table class="table table-striped table-bordered">
        <tr>
            <td class="text-left" colspan="4">
                <b>Laporan Anda</b>
            </td>
        </tr>
    </table>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Tanggal Transaksi</th>
                <th class="text-center">Kode Referral</th>
                <th class="text-center">Persentase Komisi</th>
                <th class="text-center">Nominal Komisi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            <?php $grandTotal = 0; ?>
            @foreach ($rows as $transaction)
                <tr>
                    <?php
                    $no++;
                    ?>
                    <td class="text-center">{{ $no }}</td>
                    <td class="text-center">{{ $transaction->time_paid }}</td>
                    <td>{{ $transaction->code_reff }}</td>
                    <td class="text-center">
                        {{ $anggota->commission_percent }}%
                    </td>

                    <td class="text-right">
                        Rp. {{ number_format($commission_idr, 0, ',', '.') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td class="text-right" colspan="4">
                    <b>TOTAL</b>
                </td>
                <td class="text-right">
                    <b>Rp. {{ number_format($total_commission, 0, ',', '.') }}</b>
                </td>
            </tr>
        </tfoot>
    </table>

    <table class="table table-striped table-bordered">
        <table class="table table-striped table-bordered">
            <tr>
                <td class="text-left" colspan="4">
                    <b>Laporan Anggota</b>
                </td>
            </tr>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Nama Anggota</th>
                        <th class="text-center">Kode Referral</th>
                        <th class="text-center">Persentase Komisi</th>
                        <th class="text-center">Pendapatan Komisi</th>
                        <th class="text-center">Pendapatan Komisi Anda</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php $grandTotal = 0; ?>
                    @php
                        $totalCommissions = [];
                        $yourCommissions = [];
                    @endphp
                    @foreach ($anggotaAff as $aff)
                        @php
                            $total_commission = 0;
                            $total_your_commission = 0;
                        @endphp
                        <tr>
                            <?php $no++; ?>
                            <td class="text-center">{{ $no }}</td>
                            <td class="text-center">{{ $aff->name }}</td>
                            <td>{{ $aff->code_reff }}</td>
                            <td class="text-center">{{ $aff->commission_percent }}%</td>

                            <td class="text-right">
                                @foreach ($tourismSale as $card)
                                    @php
                                        if ($card->code_reff == $aff->code_reff) {
                                            $commission_idr = ($aff->commission_percent / 100) * $card->price;
                                            $total_commission += $commission_idr;

                                            $share_commission = 20 / 100 - $aff->commission_percent / 100;
                                            $your_commission_idr = $share_commission * $card->price;
                                            $total_your_commission += $your_commission_idr;

                                            // Store the your_commission_idr in the associative array
                                            $yourCommissions[$aff->code_reff] = $total_your_commission;
                                        }
                                    @endphp
                                @endforeach
                                Rp. {{ number_format($total_commission, 0, ',', '.') }}
                            </td>

                            <td class="text-right">
                                Rp. {{ number_format($total_your_commission, 0, ',', '.') }}
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
                        <td class="text-right" colspan="5">
                            <b>TOTAL KOMISI ANDA</b>
                        </td>
                        <td class="text-right">
                            <b>Rp. {{ number_format(array_sum($yourCommissions), 0, ',', '.') }}</b>
                        </td>
                    </tr>
                </tfoot>
                <tfoot>
                    <tr>
                        <td class="text-right" colspan="4">
                            <b>TOTAL</b>
                        </td>
                        <td class="text-right">
                            <b>Rp. {{ number_format(array_sum($totalCommissions), 0, ',', '.') }}</b>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </table>
    </table>
</body>
@else
<body class="p-3">
    <h1 class="text-center">
        <?= strtoupper('Laporan Transaksi Tourism Card') ?>
    </h1>
    <h2 class="text-center">
        <?= strtoupper($title) ?>
    </h2>
    <hr>
    <table class="table table-striped table-bordered">
        <tr>
            <td class="text-left" colspan="4">
                <b>Laporan Anda</b>
            </td>
        </tr>
    </table>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Tanggal Transaksi</th>
                <th class="text-center">Kode Referral</th>
                <th class="text-center">Persentase Komisi</th>
                <th class="text-center">Nominal Komisi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            <?php $grandTotal = 0; ?>
            @foreach ($rows as $transaction)
                <tr>
                    <?php
                    $no++;
                    ?>
                    <td class="text-center">{{ $no }}</td>
                    <td class="text-center">{{ $transaction->time_paid }}</td>
                    <td>{{ $transaction->code_reff }}</td>
                    <td class="text-center">
                        {{ $anggota->commission_percent }}%
                    </td>

                    <td class="text-right">
                        Rp. {{ number_format($commission_idr, 0, ',', '.') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td class="text-right" colspan="4">
                    <b>TOTAL</b>
                </td>
                <td class="text-right">
                    <b>Rp. {{ number_format($total_commission, 0, ',', '.') }}</b>
                </td>
            </tr>
        </tfoot>
    </table>
</body>
@endif
