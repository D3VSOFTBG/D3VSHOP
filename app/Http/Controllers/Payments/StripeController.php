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
            'full_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'quantity' => 'required|integer',
        ]);

        Stripe\Stripe::setApiKey(stripe_secret_key());

        $customer = \Stripe\Customer::create([
            'phone' => $request->phone,
            'name' => $request->full_name,
            'email' => $request->email,
        ]);

        $session = \Stripe\Checkout\Session::create([
            'customer' => $customer['id'],

            'line_items' => [
                [
                    'price_data' => [
                        'currency' => get_currency_code((int) env('DEFAULT_CURRENCY_ID')),
                        'product_data' => [
                            'name' => $request->product_name,
                        ],
                        'unit_amount' => $request->price*100,
                    ],
                    'quantity' => $request->quantity,
                ]
            ],

            'payment_intent_data' => [
                'description' => $request->phone,
            ],

            'billing_address_collection' => 'required',

            'phone_number_collection' => [
                'enabled' => true,
            ],

            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
        ]);

        //Log::info($session);

        //Log::info($customer['id']);

        return redirect($session->url)->withStatus(303);
    }
}
