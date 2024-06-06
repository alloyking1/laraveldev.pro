<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TagController;
use Spatie\Sitemap\SitemapGenerator;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/home', [HomeController::class, 'index'])->name('lander');

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/blog-post', [PagesController::class, 'blog'])->name('blog-post');
Route::get('/tutorial', [PagesController::class, 'tutorial'])->name('tutorial');
Route::get('/packages', [PagesController::class, 'packages'])->name('packages');


Route::get('/dashboard', DashBoardController::class)->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.list');

    // create author middleware
    Route::middleware(['auth','admin'])->group(function () {
        Route::get('/create', [BlogPostController::class, 'show'])->name('blog.create');
        Route::post('/save', [BlogPostController::class, 'create'])->name('blog.save');
        Route::get('/edit/{Post}', [BlogPostController::class, 'edit'])->name('blog.edit');
        Route::post('/save/{Post}', [BlogPostController::class, 'update'])->name('blog.update');
        Route::post('/destroy/{Post}', [BlogPostController::class, 'destroy'])->name('blog.destroy');
    });

    Route::get('/{slog}', [BlogPostController::class, 'index'])->name('blog.show');
});

Route::prefix('job')->group(function () {
    Route::get('/', [JobController::class, 'index'])->name('job.all');
});


//admin routes
Route::prefix('/category')->group(function () {
    Route::middleware(['auth','admin'])->group(function () {
        Route::get('/list', [CategoryController::class, 'index'])->name('category.show');
        Route::get('/create/{id?}', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/save/{id?}', [CategoryController::class, 'save'])->name('category.save');
        Route::get('/delete', [CategoryController::class, 'destroy'])->name('category.delete');
    });
});

Route::prefix('/tag')->group(function () {
    Route::middleware(['auth','admin'])->group(function () {
        Route::get('/list', [TagController::class, 'index'])->name('tag.show');
        Route::get('/create/{id?}', [TagController::class, 'create'])->name('tag.create');
        Route::post('/save/{id?}', [TagController::class, 'save'])->name('tag.save');
        Route::get('/delete', [TagController::class, 'destroy'])->name('tag.delete');
    });
});

Route::prefix('admin')->group(function (){
    Route::middleware(['auth','admin'])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');
        Route::get('/post', [AdminController::class, 'post'])->name('post');
    });
});

/**
 * 
 * site map route
 * generate artisan command for this
 * */
Route::get('/site-map', function () {
    $path = 'public/sitemap.xml';
    SitemapGenerator::create('https://laraveldev.pro')->writeToFile(public_path('sitemap.xml'));
});
