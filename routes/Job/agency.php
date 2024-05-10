<?php

use App\Http\Controllers\AgencyController;
use Illuminate\Support\Facades\Route;

Route::prefix('/laravel-consultants')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/list', [AgencyController::class, 'index'])->name('agency.list');
        Route::get('/create', [AgencyController::class, 'create'])->name('agency.create');
        Route::post('/update/{?id}', [AgencyController::class, 'update'])->name('agency.update');
    });
});
