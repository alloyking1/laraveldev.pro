<?php

use App\Http\Controllers\AgencyController;
use Illuminate\Support\Facades\Route;
use App\Livewire\LivewireCreateJob;

Route::prefix('/jobs')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/list', LivewireCreateJob::class)->name('jobs.list');
    });
});
