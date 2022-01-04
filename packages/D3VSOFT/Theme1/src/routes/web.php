<?php

use D3VSOFT\Theme1\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('/shop/{slug}', [HomeController::class, 'product']);
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/success', [HomeController::class, 'success'])->name('success');
    Route::get('/cancel', [HomeController::class, 'cancel'])->name('cancel');
    Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
    Route::post('/cart/add', [HomeController::class, 'cart_add'])->name('cart.add');
    Route::post('/cart/update', [HomeController::class, 'cart_update'])->name('cart.update');
    Route::post('/cart/delete', [HomeController::class, 'cart_delete'])->name('cart.delete');
});
