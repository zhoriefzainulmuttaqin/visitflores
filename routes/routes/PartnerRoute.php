<?php

use App\Http\Controllers\AuthPartnerController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AuthPartnerController::class, 'login'])->name('login')->middleware('GuestPartner');
Route::get('/app-partner', [AuthPartnerController::class, 'login'])->name('login')->middleware('GuestPartner');
Route::post('/app-partner/authenticate', [AuthPartnerController::class, 'authenticate']);
Route::get('/app-partner/logout', [AuthPartnerController::class, 'logout'])->middleware('partner');


Route::group(["middleware" => "partner"], function () {
});
