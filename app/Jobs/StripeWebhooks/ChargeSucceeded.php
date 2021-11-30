<?php

namespace App\Jobs\StripeWebhooks;

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

        Log::info($charge);

        // do your work here

        DB::table('orders')->insert(
            [
                'currency_id' => 1,
                'customer' => $charge['billing_details']['name'],
                'total' => $charge['amount'] / 100,
                'phone' => $charge['description'],
                'email' => $charge['billing_details']['email'],
                'country' => $charge['billing_details']['address']['country'],
                'city' => $charge['billing_details']['address']['city'],
                'address_1' => $charge['billing_details']['address']['line1'],
                'address_2' => $charge['billing_details']['address']['line2'],
                'postal_code' => $charge['billing_details']['address']['postal_code'],
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // you can access the payload of the webhook call with `$this->webhookCall->payload`
    }
}
