<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Product;
use App\Stripe_Model;
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

            ['expand' => ['line_items']],

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

            'billing_address_collection' => 'required',

            'phone_number_collection' => [
                'enabled' => true,
            ],

            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
        ]);

        $stripe = new Stripe_Model();

        $stripe->customer_id = $customer['id'];
        $stripe->session_id = $session['id'];

        $stripe->save();

        // $payment_intends = \Stripe\PaymentIntent::create([
        //     'customer' => $customer['id'],
        //     'description' => $session->id,
        //     'amount' => $request->price*100,
        //     'currency' => strtolower(get_currency_code(env('DEFAULT_CURRENCY_ID'))),
        // ]);

        // $stripe = new \Stripe\StripeClient(stripe_secret_key());

        // $stripe->paymentIntents->create([
        //     'description' => $session->id,
        //     'amount' => $request->price*100,
        //     'currency' => get_currency_code(env('DEFAULT_CURRENCY_ID')),
        //   ]);

        // Log::info($payment_intends);

        return redirect($session->url)->withStatus(303);
    }
}
