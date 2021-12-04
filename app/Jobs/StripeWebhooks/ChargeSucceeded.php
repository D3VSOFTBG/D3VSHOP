<?php

namespace App\Jobs\StripeWebhooks;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\WebhookClient\Models\WebhookCall;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ChargeSucceeded implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /** @var \Spatie\WebhookClient\Models\WebhookCall */
    public $webhookCall;

    public function __construct(WebhookCall $webhookCall)
    {
        $this->webhookCall = $webhookCall;
    }

    public function handle()
    {
        $charge = $this->webhookCall->payload['data']['object'];

        // Log::info($charge);

        // do your work here


        $order = new Order();

        $order->currency_id = get_currency_id($charge['currency']);
        $order->customer = $charge['billing_details']['name'];
        $order->phone = $charge['description'];
        $order->email = $charge['billing_details']['email'];
        $order->country = $charge['billing_details']['address']['country'];
        $order->city = $charge['billing_details']['address']['city'];
        $order->address_1 = $charge['billing_details']['address']['line1'];
        $order->address_2 = $charge['billing_details']['address']['line2'];
        $order->postal_code = $charge['billing_details']['address']['postal_code'];
        $order->tax_rate = (float) env('TAX_RATE');
        $order->shipping_price = (float) env('SHIPPING_PRICE');

        $order->save();

        // DB::table('orders')->insert(
        //     [
        //         'currency_id' => get_currency_id($charge['currency']),
        //         'customer' => $charge['billing_details']['name'],
        //         'phone' => $charge['description'],
        //         'email' => $charge['billing_details']['email'],
        //         'country' => $charge['billing_details']['address']['country'],
        //         'city' => $charge['billing_details']['address']['city'],
        //         'address_1' => $charge['billing_details']['address']['line1'],
        //         'address_2' => $charge['billing_details']['address']['line2'],
        //         'postal_code' => $charge['billing_details']['address']['postal_code'],
        //         'tax_rate' => (float) env('TAX_RATE'),
        //         'shipping_price' => (float) env('SHIPPING_PRICE'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // );

        // you can access the payload of the webhook call with `$this->webhookCall->payload`
    }
}
