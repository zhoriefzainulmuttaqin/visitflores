<?php

use App\Models\Option;

function getOption($code){
    $option = Option::get_option($code);
    return $option;
}
function tglIndo($tanggal, $format = 'd/m/Y')
{
    // Daftar nama bulan dalam bahasa Indonesia
    $bulanIndonesia = array(
        'Januari', 'Februari', 'Maret', 'April',
        'Mei', 'Juni', 'Juli', 'Agustus',
        'September', 'Oktober', 'November', 'Desember'
    );

    // Pisahkan tanggal menjadi bagian-bagian
    $tahun = date('Y', strtotime($tanggal));
    $bulan = $bulanIndonesia[date('n', strtotime($tanggal)) - 1];
    $hari = date('d', strtotime($tanggal));

    // Format sesuai kebutuhan
    if ($format == 'd/m/Y') {
        return "$hari $bulan $tahun";
    } elseif ($format == 'd/m/Y H:i:s') {
        $jam = date('H:i:s', strtotime($tanggal));
        return "$hari $bulan $tahun $jam";
    } else {
        // Format lainnya jika diperlukan
        return date($format, strtotime($tanggal));
    }
}