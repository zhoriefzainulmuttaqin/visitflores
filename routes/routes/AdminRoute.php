<?php

use App\Http\Controllers\AuthAdminController;
use Illuminate\Support\Facades\Route;



Route::get('/app-admin', [AuthAdminController::class, 'login'])->middleware('GuestAdmin');
Route::post('/app-admin/proses-masuk', [AuthAdminController::class, 'proses_masuk']);
Route::get('/app-admin/keluar', [AuthAdminController::class, 'keluar'])->middleware('admin');

Route::group(["middleware" => "admin"], function () {
});
