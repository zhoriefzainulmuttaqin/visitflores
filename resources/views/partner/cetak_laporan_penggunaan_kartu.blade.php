<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cetak Laporan Penggunaan Kartu (Discount Card) | {{ config("app.name") }}</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{ url('adminlte') }}/dist/css/adminlte.min.css?v=3.2.0">

<script>
    window.print();
</script>

</head>
<body class="p-3">
    <h1 class="text-center">
        <?= strtoupper("Laporan Penggunaan Kartu (Discount Card)") ?>
    </h1>
    <h2 class="text-center">
        <?= strtoupper("Pada ".$name) ?>
    </h2>
    <h2 class="text-center">
        <?= strtoupper($title) ?>
    </h2>
    <hr>
    <table class="table table-striped table-bordered" id="datatable">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">No. Kartu</th>
                <th>Nama Pengguna</th>
                <th class="text-center">Tanggal Penggunaan</th>
                <th class="text-center">Waktu Penggunaan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $uno = 0;
            ?>
            @foreach($rows as $use)
                <?php $uno++; ?>
                <tr>
                    <td class="text-center">{{ $uno }}</td>
                    <td class="text-center">{{ $use->card->code }}</td>
                    <td class="text-center">{{ $use->user->name }}</td>
                    <td class="text-center">{{ tglIndo($use->date_used) }}</td>
                    <td class="text-center">{{ date("H:i",strtotime($use->time_used)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>