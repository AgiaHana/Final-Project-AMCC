<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('produk', [LandingController::class, 'produk'])->name('produk');
Route::get('detail', [LandingController::class, 'detail'])->name('detail');

Route::middleware('auth')->group(function () {
    Route::get('cart', [CartController::class, 'index'])->name('cart');
});

Route::get('login', [UserController::class, 'showlogin'])->name('login');
Route::get('register', [UserController::class, 'showRegister'])->name('register');
Route::post('login', [UserController::class, 'loginProcess']);
Route::post('register', [UserController::class, 'registerProcess']);


Route::middleware('auth')->group(function () {
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});
