<?php

use App\Models\buku;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Top_PengarangController;

Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login-post')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register', [AuthController::class, 'regis'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register-post');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('', [BukuController::class, 'index'])->name('buku');
    Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
    Route::get('/vote', [VoteController::class, 'index'])->name('vote.index');
    Route::get('/top_pengarang', [Top_PengarangController::class, 'index'])->name('top_pengarang.index');
});
Route::group(['prefix' => 'user'], function () {
    Route::get('/dftr_buku', [BukuController::class, 'indexUser'])->name('dftr_buku');
    Route::post('/buku/rating-submit', [BukuController::class, 'submitRating'])->name('buku.rating.submit');
    
});

