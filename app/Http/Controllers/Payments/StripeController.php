<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Product;
use Stripe;

class StripeController extends Controller
{
    function post(Request $request)
    {

        Stripe\Stripe::setApiKey(stripe_secret_key());

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [[
              'price_data' => [
                'currency' => Cache::get('default_currency'),
                'product_data' => [
                  'name' => $request->name,
                ],
                'unit_amount' => Product::first()->price,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
          ]);

          return redirect($session->url)->withStatus(303);
    }
}
