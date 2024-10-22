<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ContactControler;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MidtransWebhookController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('product', [ProductController::class, 'getAllProducts'])->name('produk');
Route::get('detail', [LandingController::class, 'detail'])->name('detail');

Route::middleware('auth')->group(function () {
    // cart
    Route::get('cart', [CartController::class, 'index'])->name('cart');
    Route::post('cart', [CartController::class, 'add']);
    Route::delete('cart/{id}', [CartController::class, 'destroy']);
    Route::patch('cart/{id}', [CartController::class, 'update']);

    // checkout
    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');

    // logout
    Route::post('logout', [UserController::class, 'logout'])->name('logout');

    // thanks page
    Route::get('thanks', [CheckoutController::class, 'thanks'])->name('thanks');

    // history
    Route::get('history', [CheckoutController::class, 'getTransaction'])->name('history');
});


Route::get('login', [UserController::class, 'showlogin'])->name('login');
Route::get('register', [UserController::class, 'showRegister'])->name('register');
Route::post('login', [UserController::class, 'loginProcess']);
Route::post('register', [UserController::class, 'registerProcess']);

<<<<<<< HEAD
// Route::post('/midtrans/webhook', [MidtransWebhookController::class, 'handleWebhook']);

Route::get('contact', [ContactControler::class, 'index'])->name('contact');
Route::get('chat', [ChatController::class, 'index'])->name('chat');
=======
Route::post('/midtrans/webhook', [MidtransWebhookController::class, 'handleWebhook']);
>>>>>>> f8cb399d5b93788f4fed0ff0ec4fc247e6b0b193
