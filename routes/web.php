<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'welcome'])->name('welcome');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('shop', [HomeController::class, 'shop'])->name('shop');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('send', [PesananController::class, 'send_wa'])->name('send.wa');
    Route::get('cart', [PesananController::class, 'cart'])->name('cart');
    Route::get('cart/{pesanan}', [PesananController::class, 'cart_proses'])->name('cart.proses'); // Masih ada masalah
    Route::post('cart/reset', [PesananController::class, 'cart_reset'])->name('cart.reset');
    Route::apiResource('produk', ProductController::class);
    Route::apiResource('kategori', CategoryController::class);
    Route::apiResource('pesanan', PesananController::class);
});
