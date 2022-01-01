<?php

namespace D3VSOFT\Theme\Http\Controllers;

use App\Currency;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

        return view('theme::home', $data);
    }
    public function about()
    {
        $data = [

        ];

        return view('theme::about', $data);
    }
    public function shop()
    {
        $products = Product::all();
        $default_currency_code = Currency::where('id', (int) env('DEFAULT_CURRENCY_ID'))->pluck('code')->first();

        $data = [
            'products' => $products,
            'default_currency_code' => $default_currency_code,
        ];

        return view('theme::shop', $data);
    }
    public function product($slug)
    {
        $product = Product::where('slug', $slug)->first();

        if(!empty($product))
        {
            $default_currency_code = Currency::where('id', (int) env('DEFAULT_CURRENCY_ID'))->pluck('code')->first();

            $data = [
                'product' => $product,
                'default_currency_code' => $default_currency_code,
            ];

            return view('theme::product', $data);
        }
        else
        {
            return view('errors.404');
        }
    }
    public function contact()
    {
        $data = [

        ];

        return view('theme::contact', $data);
    }
    public function cart()
    {
        $default_currency_code = Currency::where('id', (int) env('DEFAULT_CURRENCY_ID'))->pluck('code')->first();

        $prices_array = array();

        if(session()->has('cart'))
        {
            foreach(session()->get('cart') as $cart)
            {
                array_push($prices_array, discounted_price($cart['price'], $cart['discount']) * $cart['quantity']);
            }
        }

        $cart_total_sum = array_sum($prices_array);

        $data = [
            'default_currency_code' => $default_currency_code,
            'cart_total_sum' => $cart_total_sum,
        ];

        return view('theme::cart', $data);
    }
    public function cart_add(Request $request)
    {
        $product = Product::findOrFail($request->id);

        $cart = session()->get('cart');

        if(isset($cart[$request->id]))
        {
            $cart[$request->id]['quantity'] = $cart[$request->id]['quantity'] + $request->quantity;
        }
        else
        {
            $cart[$request->id] = [
                "name" => $product->name,
                "quantity" => $request->quantity,
                "discount" => $product->discount,
                "price" => $product->price,
                "image" => $product->image,
            ];
        }

        session()->put('cart', $cart);

        return back();
    }
    function cart_update(Request $request)
    {
        // Log::info($request);

        $cart = session()->get('cart');

        // Log::info($cart);

        if($request->operation == '+')
        {
            $cart[$request->id]['quantity']++;
        }
        else
        {
            if($cart[$request->id]['quantity'] > 1)
            {
                $cart[$request->id]['quantity']--;
            }
        }

        session()->put('cart', $cart);

        return back();
    }
    function cart_delete(Request $request)
    {
        $request->session()->forget('cart.' . $request->id);

        return back();
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
