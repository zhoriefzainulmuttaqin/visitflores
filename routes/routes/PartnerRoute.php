<?php

use App\Http\Controllers\AuthPartnerController;
use Illuminate\Support\Facades\Route;



Route::get('/app-mitra', [AuthPartnerController::class, 'masuk'])->middleware('GuestPartner');
Route::post('/app-mitra/proses-masuk', [AuthPartnerController::class, 'proses_masuk']);
Route::get('/app-mitra/keluar', [AuthPartnerController::class, 'keluar'])->middleware('partner');


Route::group(["middleware" => "partner"], function () {
});
