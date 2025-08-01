<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportManagementController;
use App\Http\Controllers\GalleryManagementController;

Route::get('/', [GuestController::class, 'index'])->name('galeri.index');
Route::post('/', [GuestController::class, 'store'])->name('pengaduan.store');

Route::get('/admin', [AuthController::class, 'index'])->name('login');
Route::post('/admin', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('reports')->name('reports.')->group(function () {
        Route::get('/', [ReportManagementController::class, 'index'])->name('index');
        Route::get('/{id}/edit', [ReportManagementController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ReportManagementController::class, 'update'])->name('update');
    });

    Route::prefix('galleries')->name('galleries.')->group(function () {
        Route::get('/', [GalleryManagementController::class, 'index'])->name('index');
        Route::get('/create', [GalleryManagementController::class, 'create'])->name('create');
        Route::post('/', [GalleryManagementController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [GalleryManagementController::class, 'edit'])->name('edit');
        Route::put('/{id}', [GalleryManagementController::class, 'update'])->name('update');
        Route::delete('/{id}', [GalleryManagementController::class, 'destroy'])->name('destroy');
    });
});
