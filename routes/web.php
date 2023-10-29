<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\AkomodasiController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;

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
Route::get('wisata', function () {
    return view('user.wisata');
});

Route::get("layanan-produk", [ServiceController::class, "product_services"]);
Route::get("layanan-jasa", [ServiceController::class, "our_services"]);
Route::get("layanan-jasa/konsultan", [ServiceController::class, "service_consultant"]);
Route::get("layanan-jasa/konseptor", [ServiceController::class, "service_conceptor"]);
Route::get("layanan-jasa/pemasaran", [ServiceController::class, "service_marketing"]);

Route::get("event", [EventController::class, "event"]);
Route::get("akomodasi", [AkomodasiController::class, "akomodasi"]);
Route::get("berita", [BeritaController::class, "berita"]);
Route::get("detail-berita", [BeritaController::class, "detail_berita"]);
Route::get("detail-akomodasi", [AkomodasiController::class, "detail_akomodasi"]);

Route::get("landing", function () {
    return view("landing_2");
});
