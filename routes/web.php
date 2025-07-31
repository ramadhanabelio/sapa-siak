<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportManagementController;
use App\Http\Controllers\GalleryManagementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ReportController::class, 'index'])->name('galeri.index');

Route::post('/pengaduan', [ReportController::class, 'store'])->name('report.store');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('admin/reports')->name('admin.reports.')->group(function () {
        Route::get('/', [ReportManagementController::class, 'index'])->name('index');
        Route::get('/{id}/edit', [ReportManagementController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ReportManagementController::class, 'update'])->name('update');
    });
});

Route::middleware(['auth'])->prefix('admin/galleries')->name('admin.galleries.')->group(function () {
    Route::get('/', [GalleryManagementController::class, 'index'])->name('index');
    Route::get('/create', [GalleryManagementController::class, 'create'])->name('create');
    Route::post('/', [GalleryManagementController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [GalleryManagementController::class, 'edit'])->name('edit');
    Route::put('/{id}', [GalleryManagementController::class, 'update'])->name('update');
    Route::delete('/{id}', [GalleryManagementController::class, 'destroy'])->name('destroy');
});
