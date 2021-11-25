<?php

namespace App\Http\Controllers;

use App\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\App;


class HomeController extends Controller
{
    public function home()
    {
        $product = ProductModel::first();
        return view('themes.'.Cache::get('theme_name').'.home', ['product' => $product]);
    }
    public function locale($locale)
    {
        App::setLocale($locale);

        $product = ProductModel::first();
        return view('themes.'.Cache::get('theme_name').'.home', ['product' => $product]);
    }
}
