<?php

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/shop/{slug}', [HomeController::class, 'product']);
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/success', [HomeController::class, 'success'])->name('success');
Route::get('/cancel', [HomeController::class, 'cancel'])->name('cancel');
Route::get('/lang/{locale}', [LocalizationController::class, 'index']);
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::post('/cart/add', [HomeController::class, 'cart_add'])->name('cart.add');
Route::post('/cart/update', [HomeController::class, 'cart_update'])->name('cart.update');
Route::post('/cart/delete', [HomeController::class, 'cart_delete'])->name('cart.delete');
Route::post('/stripe', [StripeController::class, 'post'])->name('stripe');
Route::get('/stripe', function () {
    return redirect(route('home'));
});

Route::middleware(['auth', 'admin'])->group(function ()
{
    // GET
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');
    Route::get('/admin/other/users', [AdminController::class, 'users'])->name('admin.other.users');
    Route::get('/admin/other/information', [AdminController::class, 'information'])->name('admin.other.information');
    Route::get('/admin/other/settings', [AdminController::class, 'settings_get'])->name('admin.other.settings');
    Route::get('/admin/shop/products', [AdminController::class, 'products'])->name('admin.shop.products');
    Route::get('/admin/shop/orders', [AdminController::class, 'orders'])->name('admin.shop.orders');
    Route::get('/admin/shop/carriers', [AdminController::class, 'carriers'])->name('admin.shop.carriers');
    Route::get('/admin/payments/stripe', [AdminController::class, 'payments_stripe_get'])->name('admin.payments.stripe');
    Route::get('/invoice/{id}', [InvoiceController::class, 'download']);

    // POST
    Route::post('/admin/other/settings', [AdminController::class, 'settings_post'])->name('admin.other.settings');
    Route::post('/admin/shop/products/delete', [AdminController::class, 'product_delete'])->name('admin.shop.products.delete');
    Route::post('/admin/shop/products/edit', [AdminController::class, 'product_edit'])->name('admin.shop.products.edit');
    Route::post('/admin/shop/products/create', [AdminController::class, 'product_create'])->name('admin.shop.products.create');

    Route::post('/admin/shop/carriers/delete', [AdminController::class, 'carrier_delete'])->name('admin.shop.carriers.delete');
    Route::post('/admin/shop/carriers/edit', [AdminController::class, 'carrier_edit'])->name('admin.shop.carriers.edit');
    Route::post('/admin/shop/carriers/create', [AdminController::class, 'carrier_create'])->name('admin.shop.carriers.create');

    Route::post('/admin/other/users/delete', [AdminController::class, 'user_delete'])->name('admin.other.users.delete');
    Route::post('/admin/other/users/edit', [AdminController::class, 'user_edit'])->name('admin.other.users.edit');
    Route::post('/admin/other/users/create', [AdminController::class, 'user_create'])->name('admin.other.users.create');
    Route::post('/admin/payments/stripe', [AdminController::class, 'payments_stripe_post'])->name('admin.payments.stripe');
});

Auth::routes(['verify' => true]);

// Webhooks
Route::stripeWebhooks('/stripe-webhook')->name('stripe-webhook');
Route::get('/stripe-webhook', function () {
    return redirect(route('home'));
});
