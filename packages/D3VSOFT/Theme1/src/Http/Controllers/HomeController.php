<?php

namespace D3VSOFT\Theme1\Http\Controllers;

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

        return view('theme1::home', $data);
    }
    public function about()
    {
        $data = [

        ];

        return view('theme1::about', $data);
    }
    public function shop()
    {
        $products = Product::paginate(env('PAGINATION_ADMIN'));
        $default_currency_code = Currency::where('id', (int) env('DEFAULT_CURRENCY_ID'))->pluck('code')->first();

        $data = [
            'products' => $products,
            'default_currency_code' => $default_currency_code,
        ];

        return view('theme1::shop', $data);
    }
    public function product($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        if(!empty($product))
        {
            $default_currency_code = Currency::where('id', (int) env('DEFAULT_CURRENCY_ID'))->pluck('code')->first();

            $data = [
                'product' => $product,
                'default_currency_code' => $default_currency_code,
            ];

            return view('theme1::product', $data);
        }
    }
    public function contact()
    {
        $data = [

        ];

        return view('theme1::contact', $data);
    }
    public function cart()
    {
        return view('theme1::cart');
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
