<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CarriersController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DetailsController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\StripeController;
use App\Http\Controllers\Admin\TosController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LocalizationController;
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
Route::post('/stripe', [StripeController::class, 'pay'])->name('stripe');
Route::get('/stripe', function () {
    return redirect(route('home'));
});

Route::middleware(['auth', 'admin'])->group(function ()
{
    // GET
    Route::get('/admin', [DashboardController::class, 'dashboard'])->name('admin');
    Route::get('/admin/shop/users', [UsersController::class, 'users'])->name('admin.shop.users');
    Route::get('/admin/shop/details', [DetailsController::class, 'details'])->name('admin.shop.details');
    Route::get('/admin/shop/settings', [SettingsController::class, 'get'])->name('admin.shop.settings');
    Route::get('/admin/shop/packages', [PackagesController::class, 'packages'])->name('admin.shop.packages');
    Route::get('/admin/shop/products', [ProductsController::class, 'products'])->name('admin.shop.products');
    Route::get('/admin/shop/orders', [OrdersController::class, 'orders'])->name('admin.shop.orders');
    Route::get('/admin/shop/carriers', [CarriersController::class, 'carriers'])->name('admin.shop.carriers');
    Route::get('/admin/info/about', [AboutController::class, 'get'])->name('admin.info.about');
    Route::get('/admin/info/tos', [TosController::class, 'get'])->name('admin.info.tos');
    Route::get('/admin/info/privacy', [PrivacyController::class, 'get'])->name('admin.info.privacy');
    Route::get('/admin/payments/stripe', [StripeController::class, 'admin_get'])->name('admin.payments.stripe');
    Route::get('/invoice/{id}', [InvoiceController::class, 'download']);

    // POST
    Route::post('/admin/shop/settings', [SettingsController::class, 'post'])->name('admin.shop.settings');
    Route::post('/admin/shop/products/delete', [ProductsController::class, 'delete'])->name('admin.shop.products.delete');
    Route::post('/admin/shop/products/edit', [ProductsController::class, 'edit'])->name('admin.shop.products.edit');
    Route::post('/admin/shop/products/create', [ProductsController::class, 'create'])->name('admin.shop.products.create');
    Route::post('/admin/shop/carriers/delete', [CarriersController::class, 'delete'])->name('admin.shop.carriers.delete');
    Route::post('/admin/shop/carriers/edit', [CarriersController::class, 'edit'])->name('admin.shop.carriers.edit');
    Route::post('/admin/shop/carriers/create', [CarriersController::class, 'create'])->name('admin.shop.carriers.create');
    Route::post('/admin/shop/users/delete', [UsersController::class, 'delete'])->name('admin.shop.users.delete');
    Route::post('/admin/shop/users/edit', [UsersController::class, 'edit'])->name('admin.shop.users.edit');
    Route::post('/admin/shop/users/create', [UsersController::class, 'create'])->name('admin.shop.users.create');
    Route::post('/admin/info/about', [AboutController::class, 'post'])->name('admin.info.about');
    Route::post('/admin/info/tos', [TosController::class, 'post'])->name('admin.info.tos');
    Route::post('/admin/info/privacy', [PrivacyController::class, 'post'])->name('admin.info.privacy');
    Route::post('/admin/payments/stripe', [StripeController::class, 'admin_post'])->name('admin.payments.stripe');
});

Auth::routes(['verify' => true]);

// Webhooks
Route::stripeWebhooks('/stripe-webhook')->name('stripe-webhook');
Route::get('/stripe-webhook', function () {
    return redirect(route('home'));
});
