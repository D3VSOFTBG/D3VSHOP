<?php

namespace App\Http\Controllers;

use App\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $product = ProductModel::first();
        return view('themes.'.Cache::get('theme_name').'.home', ['product' => $product]);
    }
}
