<?php

use App\Http\Controllers\AgencyController;
use Illuminate\Support\Facades\Route;
use App\Livewire\LivewireEditAgency;

Route::prefix('/laravel-consultants')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/list', [AgencyController::class, 'index'])->name('agency.list');
        // Route::get('/create', [AgencyController::class, 'create'])->name('agency.create');
        Route::get('/update/{id?}', LivewireEditAgency::class)->name('agency.update');
    });
});
