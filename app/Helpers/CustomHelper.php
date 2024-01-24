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

function convertWANumber($number){
    $number = str_replace(" ","",$number);
    $number = str_replace("+","",$number);

    $length = strlen($number);

    if($number[0] === "0"){
        $number = "62".substr($number,1,$length);
    }

    return $number;
}

function saleKode($type,$transaction){
    if($transaction->id < 10){
        $saleNo = "0000".$transaction->id;
    }elseif($transaction->id < 100){
        $saleNo = "000".$transaction->id;
    }elseif($transaction->id < 1000){
        $saleNo = "00".$transaction->id;
    }else{
        $saleNo = "0".$transaction->id;
    }
    $saleKode = $type.date("ymd",strtotime($transaction->date_carted)).$transaction->user_id.$saleNo;

    return $saleKode;
}

function getBulanIndo(){
    $bulanIndonesia = ([
        'Januari', 'Februari', 'Maret', 'April',
        'Mei', 'Juni', 'Juli', 'Agustus',
        'September', 'Oktober', 'November', 'Desember'
    ]);

    $bulanIndonesia = json_decode(json_encode($bulanIndonesia), FALSE);

    return $bulanIndonesia;
}
