<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;

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
})->name('home');

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('blogs', BlogController::class);
    Route::resource('profiles', ProfileController::class);
    Route::resource('comments', CommentController::class);
});

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/penyebab', 'penyebab')->name('penyebab');
    Route::get('/gejala', 'gejala')->name('gejala');
    Route::get('/pencegahan', 'pencegahan')->name('pencegahan');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{blog}', 'show')->name('blog.show')->middleware('auth');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'doLogin')->name('doLogin');
    Route::get('/logout', 'doLogout')->name('doLogout');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'doRegister')->name('doRegister');
});
