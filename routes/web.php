<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;

Route::get('/', function () {
    return redirect('/qr-form');
});

Route::get('/generate-qr', [QRCodeController::class, 'generate']);
Route::get('/qr-form', [QRCodeController::class, 'form']);
Route::post('/generate-qr', [QRCodeController::class, 'generateFromInput']);
