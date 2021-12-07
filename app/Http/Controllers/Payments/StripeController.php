<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
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

        // $product = Product::where('id', $request->id)->get();

        $session = \Stripe\Checkout\Session::create([
            'customer' => $customer['id'],

            ['expand' => ['line_items', 'line_items.data.price.product']],

            'line_items' => [
                [
                    'price_data' => [
                        'currency' => get_currency_code((int) env('DEFAULT_CURRENCY_ID')),
                        'product_data' => [
                            'name' => $request->product_name,
                            "metadata" => ['product_id' => $request->product_id, 'discount' => 123],
                        ],
                        'unit_amount' => $request->price*100,
                    ],
                    'quantity' => $request->quantity,
                ],
            ],

            'billing_address_collection' => 'required',

            'phone_number_collection' => [
                'enabled' => true,
            ],

            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
        ]);

        foreach($session['line_items']['data'] as $item){
            // create invoice items
            \Stripe\InvoiceItem::create(
                array(
                    "customer" => $customer['id'],
                    "amount" => $item['amount_total'],
                    "currency" => $item['currency'],
                    "description" => $item['description'],
                    // "metadata" => ['lesh' => 666, 'lesh1' => 6656],
                    "metadata" => json_decode(json_encode($item['price']->product['metadata']), true),
                )
            );
        }

        // pulls in invoice items
        \Stripe\Invoice::create(array(
            "customer" => $customer['id'],
        ));

        // Log::info($session);

        // Log::info($session['line_items']['data'][0]['price']->product['metadata']);

        // Log::info(json_decode(json_encode($session['line_items']['data'][0]['price']->product['metadata']), true));

        return redirect($session->url)->withStatus(303);
    }
}
