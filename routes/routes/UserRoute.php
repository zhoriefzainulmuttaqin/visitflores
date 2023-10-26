<?php

use App\Http\Controllers\AuthPartnerController;
use Illuminate\Support\Facades\Route;



Route::get('/masuk', [AuthPartnerController::class, 'masuk'])->name('login')->middleware('guest');
Route::post('/proses-masuk', [AuthPartnerController::class, 'proses_masuk']);
Route::get('/keluar', [AuthPartnerController::class, 'keluar'])->middleware('auth');


Route::group(["middleware" => "auth"], function () {
});
