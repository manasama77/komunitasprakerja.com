<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPanduanController;
use App\Http\Controllers\AdminSliderBannerController;
use App\Http\Controllers\AdminTeamTutorController;
use App\Http\Controllers\AdminTestimoniController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/home', [LandingController::class, 'index'])->name('home');
Route::get('/panduan', [LandingController::class, 'panduan'])->name('panduan');
Route::get('/panduan/detail/{slug}', [LandingController::class, 'panduan_detail'])->name('panduan.detail');

Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/slider-banner', [AdminSliderBannerController::class, 'index'])->name('admin.slider_banner');
    Route::get('/slider-banner/create', [AdminSliderBannerController::class, 'create'])->name('admin.slider_banner.create');
    Route::post('/slider-banner/store', [AdminSliderBannerController::class, 'store'])->name('admin.slider_banner.store');
    Route::get('/slider-banner/edit/{id}', [AdminSliderBannerController::class, 'edit'])->name('admin.slider_banner.edit');
    Route::post('/slider-banner/update/{id}', [AdminSliderBannerController::class, 'update'])->name('admin.slider_banner.update');

    Route::get('/panduan', [AdminPanduanController::class, 'index'])->name('admin.panduan');
    Route::get('/panduan/create', [AdminPanduanController::class, 'create'])->name('admin.panduan.create');
    Route::post('/panduan/store', [AdminPanduanController::class, 'store'])->name('admin.panduan.store');
    Route::get('/panduan/edit/{id}', [AdminPanduanController::class, 'edit'])->name('admin.panduan.edit');
    Route::post('/panduan/update/{id}', [AdminPanduanController::class, 'update'])->name('admin.panduan.update');

    Route::get('/team-tutor', [AdminTeamTutorController::class, 'index'])->name('admin.team_tutor');
    Route::get('/team-tutor/create', [AdminTeamTutorController::class, 'create'])->name('admin.team_tutor.create');
    Route::post('/team-tutor/store', [AdminTeamTutorController::class, 'store'])->name('admin.team_tutor.store');
    Route::get('/team-tutor/edit/{id}', [AdminTeamTutorController::class, 'edit'])->name('admin.team_tutor.edit');
    Route::post('/team-tutor/update/{id}', [AdminTeamTutorController::class, 'update'])->name('admin.team_tutor.update');

    Route::get('/testimoni', [AdminTestimoniController::class, 'index'])->name('admin.testimoni');
    Route::get('/testimoni/create', [AdminTestimoniController::class, 'create'])->name('admin.testimoni.create');
    Route::post('/testimoni/store', [AdminTestimoniController::class, 'store'])->name('admin.testimoni.store');
    Route::get('/testimoni/edit/{id}', [AdminTestimoniController::class, 'edit'])->name('admin.testimoni.edit');
    Route::post('/testimoni/update/{id}', [AdminTestimoniController::class, 'update'])->name('admin.testimoni.update');
});
