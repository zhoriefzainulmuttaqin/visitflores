<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\AkomodasiController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [UserHomeController::class, "home"]);
// Route::get('wisata', function () {
//     return view('user.tours');
// });
Route::get('/wisata', [TourController::class, 'tours']);
Route::get('/kuliner', [RestaurantController::class, 'restaurants']);
Route::get('/oleh-oleh', [ShopController::class, 'shops']);
Route::get('/profil', [ProfileController::class, 'profile']);
Route::post('/proses-ubah-foto-profil', [ProfileController::class, 'process_change_profile_photo']);
Route::get('/ubah-biodata-profil', [ProfileController::class, 'change_profile_biodata']);
Route::post('/proses-ubah-biodata-profil', [ProfileController::class, 'process_change_profile_biodata']);
Route::get('/ubah-password-profil', [ProfileController::class, 'change_profile_password']);
Route::post('/proses-ubah-password-profil', [ProfileController::class, 'process_change_profile_password']);

Route::get("layanan-produk", [ServiceController::class, "product_services"]);
Route::get("layanan-jasa", [ServiceController::class, "our_services"]);
Route::get("layanan-jasa/konsultan", [ServiceController::class, "service_consultant"]);
Route::get("layanan-jasa/konseptor", [ServiceController::class, "service_conceptor"]);
Route::get("layanan-jasa/pemasaran", [ServiceController::class, "service_marketing"]);

Route::get("event", [EventController::class, "event"]);
Route::get("akomodasi", [AkomodasiController::class, "akomodasi"]);
Route::get("berita", [BeritaController::class, "berita"]);
Route::get("detail-berita/{slug}", [BeritaController::class, "detail_berita"]);
Route::get("detail-akomodasi/{Accomodation:slug}", [AkomodasiController::class, "detail_akomodasi"]);

Route::get("landing", function () {
    return view("landing_2");
});

Route::get("login", [AuthUserController::class, "masuk"]);
Route::post("proses-login", [AuthUserController::class, "proses_masuk"]);
Route::get("registrasi", [AuthUserController::class, "registrasi"]);
Route::post("proses-registrasi", [AuthUserController::class, "proses_registrasi"]);
Route::get("keluar", [AuthUserController::class, "keluar"]);

Route::get("layanan-produk", [ServiceController::class, "product_services"]);
Route::get("layanan-produk/tourism-card", [ServiceController::class, "tourism_card"]);
Route::get("beli/tourism-card", [ServiceController::class, "beli_tourism_card"]);
Route::post("proses-beli/tourism-card", [ServiceController::class, "proses_beli_tourism_card"]);
Route::get("konfirmasi-beli/{id}/tourism-card", [ServiceController::class, "konfirmasi_beli_tourism_card"]);
Route::get("layanan-jasa", [ServiceController::class, "our_services"]);
Route::get("layanan-jasa/konsultan", [ServiceController::class, "service_consultant"]);
Route::get("layanan-jasa/konseptor", [ServiceController::class, "service_conceptor"]);
Route::get("layanan-jasa/pemasaran", [ServiceController::class, "service_marketing"]);
Route::get("beli-layanan-produk/{slug}", [ServiceController::class, "beli_layanan_produk"]);
Route::post("proses-beli/layanan-produk", [ServiceController::class, "proses_beli_layanan_produk"]);
Route::get("konfirmasi-beli/{id}/layanan-produk", [ServiceController::class, "konfirmasi_beli_layanan_produk"]);
