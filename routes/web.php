<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoardController;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::prefix('/pages')->group(function () {
    Route::get('/blog', [PagesController::class, 'blog'])->name('pages.blog');
    Route::get('/tutorial', [PagesController::class, 'tutorial'])->name('pages.tutorial');
    Route::get('/packages', [PagesController::class, 'packages'])->name('pages.packages');
});



Route::get('/dashboard', DashBoardController::class)->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.list');

    Route::middleware('auth')->group(function () {
        Route::get('/create', [BlogPostController::class, 'show'])->name('blog.create');
        Route::post('/save', [BlogPostController::class, 'create'])->name('blog.save');
        Route::get('/edit/{Post}', [BlogPostController::class, 'edit'])->name('blog.edit');
        Route::post('/save/{Post}', [BlogPostController::class, 'update'])->name('blog.update');
        Route::post('/destroy/{Post}', [BlogPostController::class, 'destroy'])->name('blog.destroy');
    });

    Route::get('/{blog}', [BlogPostController::class, 'index'])->name('blog.show');
});

Route::prefix('/category')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/list', [CategoryController::class, 'index'])->name('category.show');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/create', [CategoryController::class, 'save'])->name('category.create');
        Route::get('/update', [CategoryController::class, 'edit'])->name('category.update');
        Route::get('/delete', [CategoryController::class, 'destroy'])->name('category.delete');
    });
});
