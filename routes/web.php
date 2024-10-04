<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\detailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\moreEventController;

Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("/moreEvents", [moreEventController::class, 'index'])->name('moreEvents');
Route::get("/detail", [detailsController::class, 'index'])->name('details');


Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

