<?php

use App\Http\Controllers\AgencyController;
use Illuminate\Support\Facades\Route;
use App\Livewire\LivewireCreateJob;
use App\Livewire\LivewireEditJob;

Route::prefix('/jobs')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/list', LivewireCreateJob::class)->name('jobs.list');
        Route::get('/update/{id?}', LivewireEditJob::class)->name('jobs.update');
    });
});
