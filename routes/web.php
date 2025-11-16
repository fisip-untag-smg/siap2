<?php

use App\Http\Controllers\LihatKartuTandaPendudukController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/lihat-ktp/{kartuTandaPenduduk}', [LihatKartuTandaPendudukController::class, 'lihatKtpHtml'])->name('ktp.view');
