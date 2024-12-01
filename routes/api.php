<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoKarierController;

// Rute default untuk mengambil user (dengan middleware Sanctum)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Grup route untuk fitur Info Karier
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/info-karier', [InfoKarierController::class, 'index']); // Mendapatkan semua info karier
    Route::post('/info-karier', [InfoKarierController::class, 'store']); // Membuat info karier baru
    Route::get('/info-karier/{id}', [InfoKarierController::class, 'show']); // Mendapatkan info karier berdasarkan ID
    Route::delete('/info-karier/{id}', [InfoKarierController::class, 'destroy']); // Menghapus info karier
});
