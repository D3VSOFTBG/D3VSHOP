<?php

namespace App\Http\Controllers;

use App\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    public function home()
    {
        $product = ProductModel::first();
        return view('themes.'.Cache::get('theme_name').'.home', ['product' => $product]);
    }
}
