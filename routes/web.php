<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Payments\StripeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/success', [HomeController::class, 'success'])->name('success');
Route::get('/cancel', [HomeController::class, 'cancel'])->name('cancel');
Route::get('/lang/{locale}', [LocalizationController::class, 'index']);
Route::post('/stripe', [StripeController::class, 'post'])->name('stripe');


Route::middleware(['auth', 'admin'])->group(function ()
{
    // GET
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/information', [AdminController::class, 'information'])->name('admin.information');
    Route::get('/admin/settings', [AdminController::class, 'settings_get'])->name('admin.settings');
    Route::get('/admin/shop/products', [AdminController::class, 'shop_products'])->name('admin.shop.products');
    Route::get('/admin/payments/stripe', [AdminController::class, 'payments_stripe_get'])->name('admin.payments.stripe');

    // POST
    Route::post('/admin/settings', [AdminController::class, 'settings_post'])->name('admin.settings');
    Route::post('/admin/shop/products/delete', [AdminController::class, 'product_delete'])->name('admin.shop.products.delete');
    Route::post('/admin/shop/products/edit', [AdminController::class, 'product_edit'])->name('admin.shop.products.edit');
    Route::post('/admin/shop/products/create', [AdminController::class, 'product_create'])->name('admin.shop.products.create');
    Route::post('/admin/users/delete', [AdminController::class, 'user_delete'])->name('admin.users.delete');
    Route::post('/admin/users/edit', [AdminController::class, 'user_edit'])->name('admin.users.edit');
    Route::post('/admin/users/create', [AdminController::class, 'user_create'])->name('admin.users.create');
    Route::post('/admin/payments/stripe', [AdminController::class, 'payments_stripe_post'])->name('admin.payments.stripe');
});


Auth::routes(['verify' => true]);

// Webhooks
Route::stripeWebhooks('stripe-webhook')->name('stripe-webhook');
