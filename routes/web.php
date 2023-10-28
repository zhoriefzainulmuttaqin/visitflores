<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ShopController;

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
// Route::get('wisata', function () {
//     return view('user.tours');
// });
Route::get('/wisata', [TourController::class, 'tours']);
Route::get('/kuliner', [RestaurantController::class, 'restaurants']);
Route::get('/oleh-oleh', [ShopController::class, 'shops']);

Route::get("layanan-produk", [ServiceController::class, "product_services"]);
Route::get("layanan-jasa", [ServiceController::class, "our_services"]);
Route::get("layanan-jasa/konsultan", [ServiceController::class, "service_consultant"]);
Route::get("layanan-jasa/konseptor", [ServiceController::class, "service_conceptor"]);
Route::get("layanan-jasa/pemasaran", [ServiceController::class, "service_marketing"]);

Route::get("landing", function () {
    return view("landing_2");
});
