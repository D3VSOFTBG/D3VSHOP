<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
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
Route::get('/lang/{locale}', [LocalizationController::class, 'index']);
Route::post('/stripe', [StripeController::class, 'post'])->name('stripe');
Route::get('/stripe', function () {
    return redirect(route('home'));
});

Route::middleware(['auth', 'admin'])->group(function ()
{
    // GET
    Route::get('/admin', [DashboardController::class, 'dashboard'])->name('admin');
    Route::get('/admin/shop/users', [UsersController::class, 'users'])->name('admin.shop.users');
    Route::get('/admin/shop/details', [AdminController::class, 'details'])->name('admin.shop.details');
    Route::get('/admin/shop/settings', [AdminController::class, 'settings_get'])->name('admin.shop.settings');
    Route::get('/admin/shop/packages', [AdminController::class, 'packages'])->name('admin.shop.packages');
    Route::get('/admin/shop/products', [AdminController::class, 'products'])->name('admin.shop.products');
    Route::get('/admin/shop/orders', [AdminController::class, 'orders'])->name('admin.shop.orders');
    Route::get('/admin/shop/carriers', [AdminController::class, 'carriers'])->name('admin.shop.carriers');
    Route::get('/admin/info/about', [AdminController::class, 'about_get'])->name('admin.info.about');
    Route::get('/admin/info/tos', [AdminController::class, 'tos_get'])->name('admin.info.tos');
    Route::get('/admin/info/privacy-policy', [AdminController::class, 'privacy_policy_get'])->name('admin.info.privacy-policy');
    Route::get('/admin/payments/stripe', [AdminController::class, 'payments_stripe_get'])->name('admin.payments.stripe');
    Route::get('/invoice/{id}', [InvoiceController::class, 'download']);

    // POST
    Route::post('/admin/shop/settings', [AdminController::class, 'settings_post'])->name('admin.shop.settings');
    Route::post('/admin/shop/packages/delete', [AdminController::class, 'package_delete'])->name('admin.shop.packages.delete');
    Route::post('/admin/shop/products/delete', [AdminController::class, 'product_delete'])->name('admin.shop.products.delete');
    Route::post('/admin/shop/products/edit', [AdminController::class, 'product_edit'])->name('admin.shop.products.edit');
    Route::post('/admin/shop/products/create', [AdminController::class, 'product_create'])->name('admin.shop.products.create');
    Route::post('/admin/shop/carriers/delete', [AdminController::class, 'carrier_delete'])->name('admin.shop.carriers.delete');
    Route::post('/admin/shop/carriers/edit', [AdminController::class, 'carrier_edit'])->name('admin.shop.carriers.edit');
    Route::post('/admin/shop/carriers/create', [AdminController::class, 'carrier_create'])->name('admin.shop.carriers.create');
    Route::post('/admin/shop/users/delete', [UsersController::class, 'delete'])->name('admin.shop.users.delete');
    Route::post('/admin/shop/users/edit', [UsersController::class, 'edit'])->name('admin.shop.users.edit');
    Route::post('/admin/shop/users/create', [UsersController::class, 'create'])->name('admin.shop.users.create');
    Route::post('/admin/info/about', [AdminController::class, 'about_post'])->name('admin.info.about');
    Route::post('/admin/info/tos', [AdminController::class, 'tos_post'])->name('admin.info.tos');
    Route::post('/admin/info/privacy-policy', [AdminController::class, 'privacy_policy_post'])->name('admin.info.privacy-policy');
    Route::post('/admin/payments/stripe', [AdminController::class, 'payments_stripe_post'])->name('admin.payments.stripe');
});

Auth::routes(['verify' => true]);

// Webhooks
Route::stripeWebhooks('/stripe-webhook')->name('stripe-webhook');
Route::get('/stripe-webhook', function () {
    return redirect(route('home'));
});
