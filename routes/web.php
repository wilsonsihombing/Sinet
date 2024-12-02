<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\detailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CareerInfoController;
use App\Http\Controllers\moreEventController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\programController;
use App\Http\Controllers\qnaController;
use App\Http\Controllers\Admin\EventPackageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\UpcomingEventController;
use App\Http\Controllers\detailNewsController;
use App\Http\Controllers\otherNewsController;
use App\Http\Controllers\Admin\NewsController;

Route::get("/", [HomeController::class, 'index'])->name('home');
Route::get("/moreEvents", [moreEventController::class, 'index'])->name('moreEvents');
Route::get("/detail/{slug}", [detailsController::class, 'index'])->name('details');

Route::get("/profile", [profileController::class, 'index'])->name('profile.index');
Route::get("/profile/edit", [profileController::class, 'edit'])->name('profile.edit');
Route::put("/profile/{id}", [profileController::class, 'update'])->name('profile.update');

Route::get('/kerohanian', [programController::class, 'kerohanian'])->name('program.kerohanian');
Route::get('/humas', [programController::class, 'humas'])->name('program.humas');
Route::get('/kesenian', [programController::class, 'kesenian'])->name('program.kesenian');
Route::get('/pendidikan', [programController::class, 'pendidikan'])->name('program.pendidikan');

//QNA
Route::get('/qna', [qnaController::class, 'index'])
    ->name('qna')
    ->middleware('auth', 'verified');
Route::get('/answerqna', [qnaController::class, 'answer'])->name('answer.qna');
Route::get('/seeanswer', [qnaController::class, 'seeAnswer'])->name('seeAnswer.qna');


//infokarier
// Route::get('/infokarier', [infoKarierController::class, 'index'])
//     ->name('info.karier')
//     ->middleware('auth', 'verified');
// Route::post('/career/store', [infoKarierController::class, 'store'])->name('career.store');
// Route::post('/career/create', [infoKarierController::class, 'create'])->name('career.create');
// Route::post('/career/show', [infoKarierController::class, 'show'])->name('career.show');

// Menampilkan halaman daftar info karir
Route::get('/infokarier', [CareerInfoController::class, 'index'])->name('career.index');
Route::get('/infokarier/create', [CareerInfoController::class, 'create'])->name('career.create');
Route::post('/infokarier/store', [CareerInfoController::class, 'store'])->name('career.store');
Route::get('/infokarier/{id}', [CareerInfoController::class, 'show'])->name('career.show');
Route::get('/infokarier/search', [CareerInfoController::class, 'search'])->name('career.search');


//News
Route::get('/otherNews', [otherNewsController::class, 'index'])->name('otherNews');
Route::get('/detailNews/{slug}', [detailNewsController::class, 'index'])->name('detailNews');

Route::prefix('admin')
    ->middleware(['auth', 'isAdmin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('event-package', EventPackageController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('upcoming-event', UpcomingEventController::class);
        Route::resource('news', NewsController::class);

    });

Auth::routes();
