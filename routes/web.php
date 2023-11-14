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
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocaleController;

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\TransactionAdminController;

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

Route::get("atur-bahasa/{locale}", [LocaleController::class, "atur_bahasa"]);
Route::get("set-bahasa/{locale}", [LocaleController::class, "set_bahasa"]);
// Route::get("get-cookie", [LocaleController::class, "getCookie"]);

Route::get('/wisata', [TourController::class, 'tours']);
Route::get('/detail-wisata/{slug}', [TourController::class, 'detail_tour']);
Route::get('/kuliner', [RestaurantController::class, 'restaurants']);
Route::get('/oleh-oleh', [ShopController::class, 'shops']);

Route::get("event", [EventController::class, "event"]);
Route::get("akomodasi", [AkomodasiController::class, "akomodasi"]);
Route::get("berita", [BeritaController::class, "berita"]);
Route::get("detail-berita/{slug}", [BeritaController::class, "detail_berita"]);
Route::get("detail-akomodasi/{Accomodation:slug}", [AkomodasiController::class, "detail_akomodasi"]);

Route::get("login", [AuthUserController::class, "masuk"])->name("login");
Route::post("proses-login", [AuthUserController::class, "proses_masuk"]);
Route::get("registrasi", [AuthUserController::class, "registrasi"]);
Route::post("proses-registrasi", [AuthUserController::class, "proses_registrasi"]);
Route::get("keluar", [AuthUserController::class, "keluar"]);

Route::get("layanan-produk", [ServiceController::class, "product_services"])->name("layanan-produk");
Route::get("layanan-produk/tourism-card", [ServiceController::class, "tourism_card"]);
Route::get("layanan-jasa", [ServiceController::class, "our_services"]);
Route::get("layanan-jasa/konsultan", [ServiceController::class, "service_consultant"]);
Route::get("layanan-jasa/konseptor", [ServiceController::class, "service_conceptor"]);
Route::get("layanan-jasa/pemasaran", [ServiceController::class, "service_marketing"]);

Route::get("paket-wisata/{slug}", [ServiceController::class, "detail_paket_wisata"]);

Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfileController::class, 'profile']);
    Route::post('/proses-ubah-foto-profil', [ProfileController::class, 'process_change_profile_photo']);
    Route::get('/ubah-biodata-profil', [ProfileController::class, 'change_profile_biodata']);
    Route::post('/proses-ubah-biodata-profil', [ProfileController::class, 'process_change_profile_biodata']);
    Route::get('/ubah-password-profil', [ProfileController::class, 'change_profile_password']);
    Route::post('/proses-ubah-password-profil', [ProfileController::class, 'process_change_profile_password']);

    Route::get("beli/tourism-card", [ServiceController::class, "beli_tourism_card"]);
    Route::post("proses-beli/tourism-card", [ServiceController::class, "proses_beli_tourism_card"]);
    Route::get("konfirmasi-beli/{id}/tourism-card", [ServiceController::class, "konfirmasi_beli_tourism_card"]);
    Route::get("beli-layanan-produk/{slug}", [ServiceController::class, "beli_layanan_produk"]);
    Route::post("proses-beli/layanan-produk", [ServiceController::class, "proses_beli_layanan_produk"]);
    Route::get("konfirmasi-beli/{id}/layanan-produk", [ServiceController::class, "konfirmasi_beli_layanan_produk"]);
});


Route::prefix("app-admin")->group(function () {
    Route::get("/", [AuthAdminController::class, "masuk"]);
    Route::post("proses-login", [AuthAdminController::class, "proses_masuk"]);

    Route::middleware("auth:admin")->group(function () {
        Route::get("dashboard", [DashboardAdminController::class, "dashboard"]);
        Route::get("logout", [AuthAdminController::class, "keluar"]);
        Route::get("data/event", [EventController::class, "admin_event"]);
        Route::get("data/tambah/event", [EventController::class, "tambah_event"]);
        Route::post("data/event/proses-tambah", [EventController::class, "proses_tambah_event"]);
        Route::get('buatSlug', [EventController::class, "buat_slug"]);

        // wisata
        Route::get("data/wisata", [TourController::class, "admin_wisata"]);
        Route::get("data/tambah/wisata", [TourController::class, "tambah_wisata"]);
        Route::post("data/wisata/proses-tambah", [TourController::class, "proses_tambah_wisata"]);
        Route::get("data/ubah/wisata/{slug}", [TourController::class, "ubah_wisata"]);
        Route::post("data/wisata/proses-ubah", [TourController::class, "proses_ubah_wisata"]);
        Route::get("data/wisata/proses-hapus/{slug}", [TourController::class, "proses_hapus_wisata"]);

        // kategori wisata
        Route::get("data/wisata/kategori", [TourController::class, "admin_wisata_kategori"]);
        Route::post("data/wisata/kategori/proses-tambah", [TourController::class, "proses_tambah_kategori_wisata"]);
        Route::post("data/wisata/kategori/proses-ubah", [TourController::class, "proses_ubah_kategori_wisata"]);
        Route::get("data/wisata/kategori/proses-hapus/{id}", [TourController::class, "proses_hapus_kategori_wisata"]);

        Route::get("transaksi/paketoleholeh", [TransactionAdminController::class, "paket_oleholeh"]);
        Route::get("transaksi/tourismcard", [TransactionAdminController::class, "tourismcard"]);
    });
});
