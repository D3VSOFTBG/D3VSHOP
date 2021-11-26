<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Product;
use Stripe;

class StripeController extends Controller
{
    function post(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'address' => 'required',
            'full_name' => 'required',
            'phone' => 'required',
            'quantity' => 'required|integer',
        ]);

        Stripe\Stripe::setApiKey(stripe_secret_key());

        \Stripe\Customer::create([
            'email' => 'asd@gmail.com',
        ]);

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => Cache::get('default_currency'),
                        'product_data' => [
                            'name' => $request->name,
                        ],
                        'unit_amount' => $request->price*100,
                    ],
                    'quantity' => $request->quantity,
                ]
            ],

            'billing_address_collection' => 'required',

            'phone_number_collection' => [
                'enabled' => true,
            ],

            'customer_email' => 'ad@gmail.com',
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
          ]);

          Log::info($session);

          return redirect($session->url)->withStatus(303);
    }
}
