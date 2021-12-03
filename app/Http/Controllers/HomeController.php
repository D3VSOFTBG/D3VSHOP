<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Log;
//use Illuminate\Support\Facades\Cache;
use RexShijaku\SQLToLaravelBuilder\SQLToLaravelBuilder;



class HomeController extends Controller
{
    public function home()
    {
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
    function c()
    {

        //require_once dirname(__FILE__) . './vendor/autoload.php';

        $options = array('facade' => 'DB::');
        $converter = new SQLToLaravelBuilder($options);

        $sql = "SELECT orders.*, (SELECT IF(coalesce(sum(ordered_products.price), '') = '', '0', sum(ordered_products.price)) FROM ordered_products ordered_products WHERE ordered_products.order_id = orders.id) as total FROM orders";
        echo $converter->convert($sql);
    }
}
