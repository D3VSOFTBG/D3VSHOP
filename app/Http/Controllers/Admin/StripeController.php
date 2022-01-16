<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Stripe;

class StripeController extends Controller
{
    function pay(Request $request)
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

        $product = Product::where('id', $request->product_id)->first();

        $session = \Stripe\Checkout\Session::create([
            'customer' => $customer['id'],

            ['expand' => ['line_items', 'line_items.data.price.product']],

            'line_items' => [
                [
                    'price_data' => [
                        'currency' => get_currency_code((int) env('DEFAULT_CURRENCY_ID')),
                        'product_data' => [
                            'name' => $product->name,
                            "metadata" => [
                                'product_id' => $product->id,
                                'discount_by_percent' => $product->discount_by_percent,
                                'serial_number' => $product->serial_number,
                                'sku' => $product->sku,
                            ],
                        ],
                        'unit_amount' => discounted_price($product->price, $product->discount_by_percent)*100,
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
                    'customer' => $customer['id'],
                    'unit_amount' => $item['amount_total'],
                    'currency' => $item['currency'],
                    'description' => $item['description'],
                    'metadata' => json_decode(json_encode($item['price']->product['metadata']), true),
                    'quantity' => $item['quantity'],
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
    function admin_get()
    {
        $data = [];

        return view('admin.payments.stripe', $data);
    }
    function admin_post(Request $request)
    {
        $request->validate([
            'stripe_environment' => 'required',
            'stripe_test_webhook_secret' => 'required',
            'stripe_test_publishable_key' => 'required',
            'stripe_test_secret_key' => 'required',
            'stripe_live_webhook_secret' => 'required',
            'stripe_live_publishable_key' => 'required',
            'stripe_live_secret_key' => 'required',
        ]);

        if($request->stripe_environment != env('STRIPE_ENVIRONMENT'))
        {
            env_update('STRIPE_ENVIRONMENT', $request->stripe_environment);
        }
        if($request->stripe_test_webhook_secret != env('STRIPE_TEST_WEBHOOK_SECRET'))
        {
            env_update('STRIPE_TEST_WEBHOOK_SECRET', $request->stripe_test_webhook_secret);
        }
        if($request->stripe_test_publishable_key != env('STRIPE_TEST_PUBLISHABLE_KEY'))
        {
            env_update('STRIPE_TEST_PUBLISHABLE_KEY', $request->stripe_test_publishable_key);
        }
        if($request->stripe_test_secret_key != env('STRIPE_TEST_SECRET_KEY'))
        {
            env_update('STRIPE_TEST_SECRET_KEY', $request->stripe_test_secret_key);
        }
        if($request->stripe_live_webhook_secret != env('STRIPE_LIVE_WEBHOOK_SECRET'))
        {
            env_update('STRIPE_LIVE_WEBHOOK_SECRET', $request->stripe_live_webhook_secret);
        }
        if($request->stripe_live_publishable_key != env('STRIPE_LIVE_PUBLISHABLE_KEY'))
        {
            env_update('STRIPE_LIVE_PUBLISHABLE_KEY', $request->stripe_live_publishable_key);
        }
        if($request->stripe_live_secret_key != env('STRIPE_LIVE_SECRET_KEY'))
        {
            env_update('STRIPE_LIVE_SECRET_KEY', $request->stripe_live_secret_key);
        }

        Artisan::call('cache:clear');

        return back();
    }
}
