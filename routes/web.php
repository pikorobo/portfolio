<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/works', function () {
    return view('works');
});

Route::get('/blog', function () {
    return view('posts/index');
});

Route::get('/create', function () {
    return view('posts/create');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin_index');
    Route::post('/login', [AdminController::class, 'login'])->name('admin_login');
});

Route::prefix('posts')->group(function () {
    Route::get('/create', [AdminController::class,  'showTop'])->name('posts.create');
    Route::post('/store', [PostController::class, 'store'])->name('posts.store');
    Route::post('/upload', [PostController::class, 'upload'])->name('posts.upload');
    Route::get('/index', [PostController::class, 'index'])->name('posts.index');
    Route::get('/show', [PostController::class, 'show'])->name('posts.show');
    Route::post('/comment', [PostController::class, 'storeComment'])->name('posts.storeComment');
});