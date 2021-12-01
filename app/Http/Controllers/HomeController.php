<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Log;
//use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    public function home()
    {
        //Log::info('wut?');
        $product = Product::first();
        return view('themes.'.env('THEME_NAME').'.home', ['product' => $product]);
    }
    function success()
    {
        return redirect(route('home'))->with('success', 'Thanks for your order!');
    }
    function cancel()
    {
        return redirect(route('home'))->withErrors('Error!');
    }
}
