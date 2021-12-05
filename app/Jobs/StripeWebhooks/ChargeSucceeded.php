<?php

namespace App\Jobs\StripeWebhooks;

use App\Order;
use App\Stripe_Logs;
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
        // $stripe_client = new \Stripe\StripeClient(stripe_secret_key());

        // $stripe_client->invoices->create([
        //     'customer' => $customer['id'],
        // ]);


        // $line_items = $stripe->checkout->sessions->allLineItems('cs_test_a117qWLL1q5hH2xMYvCtoQ3S7qKHJicAnBcAMCgEGtWb1lGEuwolIatiIJ');

        $charge = $this->webhookCall->payload['data']['object'];

        $stripe = new \Stripe\StripeClient(stripe_secret_key());
        $customer = $stripe->customers->retrieve($charge['customer']);
        $invoices = $stripe->invoices->all([
            'customer' => $customer->id,
            'limit' => 1,
        ]);

        // // Last record required!
        // // $session_id = Stripe_Logs::where('customer_id', $customer->id)->orderBy('id', 'DESC')->pluck('session_id')->first();

        Log::info($invoices);

        // // do your work here

        $order = new Order();

        $order->currency_id = get_currency_id($charge['currency']);
        $order->customer = $charge['billing_details']['name'];
        // $order->phone = $customer->phone;
        $order->phone = '0878641617';
        $order->email = $charge['billing_details']['email'];
        $order->country = $charge['billing_details']['address']['country'];
        $order->city = $charge['billing_details']['address']['city'];
        $order->address_1 = $charge['billing_details']['address']['line1'];
        $order->address_2 = $charge['billing_details']['address']['line2'];
        $order->postal_code = $charge['billing_details']['address']['postal_code'];
        $order->tax_rate = ((float) env('TAX_RATE'));
        $order->shipping_price = ((float) env('SHIPPING_PRICE'));

        $order->save();
    }
}
