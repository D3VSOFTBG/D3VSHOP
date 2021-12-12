<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Product;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Log;
//use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function home()
    {
        $product = Product::first();
        $default_currency_code = Currency::where('id', (int) env('DEFAULT_CURRENCY_ID'))->pluck('code')->first();

        $data = [
            'product' => $product,
            'default_currency_code' => $default_currency_code,
        ];

        return view('themes.'.env('THEME_NAME').'.home', $data);
    }
    public function about()
    {
        $data = [

        ];

        return view('themes.'.env('THEME_NAME').'.about', $data);
    }
    public function shop()
    {

        $data = [

        ];

        return view('themes.'.env('THEME_NAME').'.shop', $data);
    }
    public function contact()
    {
        $data = [

        ];

        return view('themes.'.env('THEME_NAME').'.contact', $data);
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
