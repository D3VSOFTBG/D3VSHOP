<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware(['auth', 'admin'])->group(function ()
{
    // GET
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');

    // POST
    Route::post('/admin/users/delete', [AdminController::class, 'user_delete'])->name('admin.users.delete');
    Route::post('/admin/users/edit', [AdminController::class, 'user_edit'])->name('admin.users.edit');
    Route::post('/admin/users/create', [AdminController::class, 'user_create'])->name('admin.users.create');
});


Auth::routes(['verify' => true]);
