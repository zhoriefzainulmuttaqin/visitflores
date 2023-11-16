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
use App\Http\Controllers\AccountController;

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

        // kuliner
        Route::get("data/kuliner", [RestaurantController::class, "admin_kuliner"]);
        Route::get("data/tambah/kuliner", [RestaurantController::class, "tambah_kuliner"]);
        Route::post("data/kuliner/proses-tambah", [RestaurantController::class, "proses_tambah_kuliner"]);
        Route::get("data/ubah/kuliner/{slug}", [RestaurantController::class, "ubah_kuliner"]);
        Route::post("data/kuliner/proses-ubah", [RestaurantController::class, "proses_ubah_kuliner"]);
        Route::get("data/kuliner/proses-hapus/{slug}", [RestaurantController::class, "proses_hapus_kuliner"]);

        // oleholeh
        Route::get("data/oleholeh", [ShopController::class, "admin_oleholeh"]);
        Route::get("data/tambah/oleholeh", [ShopController::class, "tambah_oleholeh"]);
        Route::post("data/oleholeh/proses-tambah", [ShopController::class, "proses_tambah_oleholeh"]);
        Route::get("data/ubah/oleholeh/{slug}", [ShopController::class, "ubah_oleholeh"]);
        Route::post("data/oleholeh/proses-ubah", [ShopController::class, "proses_ubah_oleholeh"]);
        Route::get("data/oleholeh/proses-hapus/{slug}", [ShopController::class, "proses_hapus_oleholeh"]);

        // akun admin
        Route::get("akun/admin", [AccountController::class, "akun_admin"]);
        Route::get("tambah/akun/admin", [AccountController::class, "tambah_akun_admin"]);
        Route::post("akun/admin/proses-tambah", [AccountController::class, "proses_tambah_akun_admin"]);
        Route::get("kelola/akun/admin/{id}", [AccountController::class, "kelola_akun_admin"]);
        Route::post("akun/admin/proses-ubah", [AccountController::class, "proses_ubah_akun_admin"]);
        Route::post("akun/admin/proses-reset-password", [AccountController::class, "proses_reset_password_akun_admin"]);

        // akun mitra
        Route::get("akun/mitra", [AccountController::class, "akun_mitra"]);
        Route::get("tambah/akun/mitra", [AccountController::class, "tambah_akun_mitra"]);
        Route::post("akun/mitra/proses-tambah", [AccountController::class, "proses_tambah_akun_mitra"]);
        Route::get("kelola/akun/mitra/{id}", [AccountController::class, "kelola_akun_mitra"]);
        Route::post("akun/mitra/proses-ubah", [AccountController::class, "proses_ubah_akun_mitra"]);
        Route::post("akun/mitra/proses-reset-password", [AccountController::class, "proses_reset_password_akun_mitra"]);

        // profile
        Route::get("profil", [AccountController::class, "profil"]);
        Route::post("profil/proses-ubah", [AccountController::class, "proses_ubah_profil"]);
        Route::post("profil/proses-reset-password", [AccountController::class, "proses_reset_password_profil"]);

        // akun pengguna
        Route::get("akun/pengguna", [AccountController::class, "akun_pengguna"]);
        Route::get("kelola/akun/pengguna/{id}", [AccountController::class, "kelola_akun_pengguna"]);
        Route::post("akun/pengguna/proses-ubah", [AccountController::class, "proses_ubah_akun_pengguna"]);
        Route::post("akun/pengguna/proses-reset-password", [AccountController::class, "proses_reset_password_akun_pengguna"]);

        Route::get("transaksi/paket-oleholeh", [TransactionAdminController::class, "paket_oleholeh"]);
        Route::get("transaksi/tourism-card", [TransactionAdminController::class, "tourism_card"]);
        Route::get("transaksi/tourism-card/{id}/discount-card", [TransactionAdminController::class, "discount_card"]);
        Route::post("transaksi/tourism-card/discount-card/generate", [TransactionAdminController::class, "generate_discount_card"]);
        Route::get("discount-card/{code}/download", [TransactionAdminController::class, "discount_card_generate_image"]);
    });
});
