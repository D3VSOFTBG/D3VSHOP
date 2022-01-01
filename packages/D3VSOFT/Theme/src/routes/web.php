<?php

use D3VSOFT\Theme\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/greeting', [HomeController::class, 'greeting'])->name('greeting');
