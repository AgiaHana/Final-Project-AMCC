<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
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
    return view('landing');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/reg', function () {
    return view('register');
});


Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('produk', [LandingController::class, 'produk'])->name('produk');
Route::get('detail', [LandingController::class, 'detail'])->name('detail');
Route::get('cart', [LandingController::class, 'cart'])->name('cart');

Route::get('login', [UserController::class, 'showlogin'])->name('login');
Route::get('reg', [UserController::class, 'showRegister'])->name('register');