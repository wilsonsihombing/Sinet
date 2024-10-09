<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\detailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\moreEventController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\programController;

Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("/moreEvents", [moreEventController::class, 'index'])->name('moreEvents');
Route::get("/detail", [detailsController::class, 'index'])->name('details');
Route::get("/profile", [profileController::class, 'index'])->name('profiles');
Route::get('/kerohanian', [programController::class, 'kerohanian'])->name('program.kerohanian');
Route::get('/humas', [programController::class, 'humas'])->name('program.humas');
Route::get('/kesenian', [programController::class, 'kesenian'])->name('program.kesenian');
Route::get('/pendidikan', [programController::class, 'pendidikan'])->name('program.pendidikan');



Route::prefix('admin')
    ->middleware(['auth', 'isAdmin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

Auth::routes();
