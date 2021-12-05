<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Product;
use App\Stripe_Logs;
use App\Stripe_Sessions;
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

        // // create invoice items
        // \Stripe\InvoiceItem::create(
        //     array(
        //     "customer" => $customer->id,
        //     "amount" => $request->price*100,
        //     "currency" => "usd",
        //     "description" => "One-time fee"
        //     )
        // );

        // // pulls in invoice items
        // $invoice = \Stripe\Invoice::create(array(
        //     "customer" => $customer->id
        // ));

        $stripe = new \Stripe\StripeClient(stripe_secret_key());
        $invoice = $stripe->invoiceItems->all(['customer' => 'cus_Kieve5no1Liwga'], ['limit' => 1]);


        // $stripe_sessions = new Stripe_Logs();
        // $stripe_sessions->customer_id = $customer['id'];
        // //currency_id
        // $stripe_sessions->save();

        // $payment_intents = \Stripe\PaymentIntent::create([
        //     'customer' => $customer['id'],
        //     'amount' => $request->price*100,
        //     'currency' => strtolower(get_currency_code(env('DEFAULT_CURRENCY_ID'))),
        // ]);

        // $stripe = new \Stripe\StripeClient(stripe_secret_key());

        // $stripe->paymentIntents->create([
        //     'amount' => $request->price*100,
        //     'currency' => get_currency_code(env('DEFAULT_CURRENCY_ID')),
        //   ]);

        // Log::info($invoice);

        return redirect($session->url)->withStatus(303);
    }
}
