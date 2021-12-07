<?php

namespace App\Jobs\StripeWebhooks;

use App\Order;
use App\Ordered_Product;
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
        $stripe = new \Stripe\StripeClient(stripe_secret_key());
        $customer = $stripe->customers->retrieve(
            $charge['customer'],
        );
        $invoices = $stripe->invoices->all([
            'customer' => $customer->id,
            'limit' => 1,
        ]);
        $invoice_items = $stripe->invoiceItems->all([
            'customer' => $customer->id,
        ]);

        // // Last record required!
        // // $session_id = Stripe_Logs::where('customer_id', $customer->id)->orderBy('id', 'DESC')->pluck('session_id')->first();
        // // do your work here

        $order = new Order();
        $order->currency_id = get_currency_id($charge['currency']);
        $order->customer_id = $customer->id;
        $order->customer = $charge['billing_details']['name'];
        $order->phone = $customer->phone;
        $order->email = $charge['billing_details']['email'];
        $order->country = $charge['billing_details']['address']['country'];
        $order->city = $charge['billing_details']['address']['city'];
        $order->address_1 = $charge['billing_details']['address']['line1'];
        $order->address_2 = $charge['billing_details']['address']['line2'];
        $order->postal_code = $charge['billing_details']['address']['postal_code'];
        $order->tax_rate = ((float) env('TAX_RATE'));
        $order->shipping_price = ((float) env('SHIPPING_PRICE'));
        $order->save();

        // Get order id
        $order_id = (int) Order::where('customer_id', $customer->id)->orderBy('id', 'DESC')->pluck('id')->first();

        $ii_array = array();

        // foreach($invoice_items['data'] as $invoice_item)
        // {
        //     array_push($ii_array, [
        //         'order_id' => $order_id,
        //         'name' => $invoice_item['description'],
        //         'price' => $invoice_item['amount'] / 100,
        //         'discount' => 0,
        //         'quantity' => $invoice_item['quantity'],
        //     ]);
        // }

        // foreach($charge['data']['line_items'] as $charge)
        // {
        //     array_push($ii_array, [
        //         'order_id' => $order_id,
        //         'name' => $invoice_item['description'],
        //         'price' => $invoice_item['amount'] / 100,
        //         'discount' => 0,
        //         'quantity' => $invoice_item['quantity'],
        //     ]);
        // }

        Ordered_Product::insert($ii_array);

        // $product = $stripe->products->retrieve($invoice_items->data[0]['price']->product);

        // Log::info($invoice_items->data[0]['price']);

        Log::info($invoice_items->data[0]);

        $stripe->invoices->delete($invoices['data'][0]['id']);
    }
}
