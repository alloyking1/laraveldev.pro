<?php

Route::prefix('/portfolio')->group(function () {
    Route::middleware(['auth','verified'])->group(function () {
        Route::get('/list', App\Livewire\LivewireCreatePortfolioStepOne::class)->name('portfolio.list');
        // Route::post('/update/{id?}', LivewireEditJob::class)->name('jobs.update');
        // Route::delete('/delete/{id?}', LivewireEditJob::class)->name('jobs.update');
    });

    // Route::get('/all', LivewireJobController::class)->name('jobs.all');
});
