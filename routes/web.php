<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.list');

    Route::middleware('auth')->group(function () {
        Route::get('/create', [BlogPostController::class, 'edit'])->name('blog.create');
        Route::post('/save', [BlogPostController::class, 'update'])->name('blog.save');
        Route::post('/update/{Post}', [BlogPostController::class, 'update'])->name('blog.update');
        // Route::delete('/destroy', [BlogPostController::class, 'destroy'])->name('blog.destroy');
    });

    Route::get('/{blog}', [BlogController::class, 'show'])->name('blog.show');
});
