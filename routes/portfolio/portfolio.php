<?php

Route::prefix('/portfolio')->group(function () {
    Route::middleware(['auth','verified'])->group(function () {
        Route::get('/list', App\Livewire\LivewireCreatePortfolioStepOne::class)->name('portfolio.list');
    });
});

// Route::get('/{url}', [App\Http\Controllers\PortfolioController::class, 'show'])->name('portfolio.preview')->middleware('auth');
Route::get('/{url}', [App\Http\Controllers\PortfolioController::class, 'show'])->name('portfolio.live');

