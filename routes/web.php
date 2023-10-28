<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AuthUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.home');
});

Route::get("login",[AuthUserController::class,"masuk"]);
Route::post("proses-login",[AuthUserController::class,"proses_masuk"]);

Route::get("layanan-produk",[ServiceController::class,"product_services"]);
Route::get("layanan-produk/tourism-card",[ServiceController::class,"tourism_card"]);
Route::get("beli/tourism-card",[ServiceController::class,"beli_tourism_card"]);
Route::post("proses-beli/tourism-card",[ServiceController::class,"proses_beli_tourism_card"]);
Route::get("konfirmasi-beli/{id}/tourism-card",[ServiceController::class,"konfirmasi_beli_tourism_card"]);
Route::get("layanan-jasa",[ServiceController::class,"our_services"]);
Route::get("layanan-jasa/konsultan",[ServiceController::class,"service_consultant"]);
Route::get("layanan-jasa/konseptor",[ServiceController::class,"service_conceptor"]);
Route::get("layanan-jasa/pemasaran",[ServiceController::class,"service_marketing"]);
