<?php

use App\Http\Controllers\AuthAdminController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AuthAdminController::class, 'login'])->name('login')->middleware('GuestAdmin');
Route::get('/app-admin', [AuthAdminController::class, 'login'])->name('login')->middleware('GuestAdmin');
Route::post('/app-admin/authenticate', [AuthAdminController::class, 'authenticate']);
Route::get('/app-admin/logout', [AuthAdminController::class, 'logout'])->middleware('admin');


Route::group(["middleware" => "admin"], function () {
});
