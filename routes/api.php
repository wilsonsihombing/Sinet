<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\API\UpcomingEventController;
use App\Http\Controllers\API\GalleryController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\EventPackageController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show']);
Route::post('/news', [NewsController::class, 'store']);
Route::put('/news/{id}', [NewsController::class, 'update']);
Route::delete('/news/{id}', [NewsController::class, 'destroy']);

Route::get('upcomingevents', [UpcomingEventController::class, 'index']);
Route::get('upcomingevents/{id}', [UpcomingEventController::class, 'show']);
Route::post('upcomingevents', [UpcomingEventController::class, 'store']);
Route::put('upcomingevents/{id}', [UpcomingEventController::class, 'update']);
Route::delete('upcomingevents/{id}', [UpcomingEventController::class, 'destroy']);

Route::get('galleries', [GalleryController::class, 'index']);
Route::get('galleries/{id}', [GalleryController::class, 'show']);
Route::post('galleries', [GalleryController::class, 'store']);
Route::put('galleries/{id}', [GalleryController::class, 'update']);
Route::delete('galleries/{id}', [GalleryController::class, 'destroy']);

Route::get('event-packages', [EventPackageController::class, 'index']);
Route::get('event-packages/{id}', [EventPackageController::class, 'show']);
Route::post('event-packages', [EventPackageController::class, 'store']);
Route::put('event-packages/{id}', [EventPackageController::class, 'update']);
Route::delete('event-packages/{id}', [EventPackageController::class, 'destroy']);

Route::get('/users', [UserController::class, 'index']); 
Route::get('/users/{id}', [UserController::class, 'show']); 
Route::post('/users', [UserController::class, 'login']); 
Route::put('/users/{id}', [UserController::class, 'update']); 
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

// Protect routes with authentication middleware
Route::middleware('auth:sanctum')->group(function () {
    Route::get('user/profile', [UserController::class, 'fetch']);
    Route::put('user/update-profile', [UserController::class, 'updateProfile']);
    Route::post('logout', [UserController::class, 'logout']);
});






