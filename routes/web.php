<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\detailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\infoKarierController;
use App\Http\Controllers\moreEventController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\programController;
use App\Http\Controllers\qnaController;
use App\Http\Controllers\Admin\EventPackageController;
use App\Http\Controllers\Admin\GalleryController;


Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("/moreEvents", [moreEventController::class, 'index'])->name('moreEvents');
Route::get("/detail", [detailsController::class, 'index'])->name('details');

Route::get("/profile", [profileController::class, 'index'])->name('profile.index');
Route::get("/profile/edit", [profileController::class, 'edit'])->name('profile.edit');
Route::put("/profile/{id}", [profileController::class, 'update'])->name('profile.update');

Route::get('/kerohanian', [programController::class, 'kerohanian'])->name('program.kerohanian');
Route::get('/humas', [programController::class, 'humas'])->name('program.humas');
Route::get('/kesenian', [programController::class, 'kesenian'])->name('program.kesenian');
Route::get('/pendidikan', [programController::class, 'pendidikan'])->name('program.pendidikan');
Route::get('/qna', [qnaController::class, 'index'])->name('qna');
Route::get('/answerqna', [qnaController::class, 'answer'])->name('answer.qna');
Route::get('/seeanswer', [qnaController::class, 'seeAnswer'])->name('seeAnswer.qna');
Route::get('/infokarier', [infoKarierController::class, 'index'])->name('info.karier');

Route::prefix('admin')
    ->middleware(['auth', 'isAdmin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('event-package', EventPackageController::class);
        Route::resource('gallery', GalleryController::class);
    });

Auth::routes();
