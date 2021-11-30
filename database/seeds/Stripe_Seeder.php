<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Stripe_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stripe')->insert(
            [
                'id' => 1,
                'environment' => 0,
                'test_webhook_secret' => 'whsec_q6thc1MCIeCAQTaqpj2s7xAHPs4gF6Wd',
                'test_publishable_key' => 'test_publishable_key',
                'test_secret_key' => 'sk_test_51IXyhNLDTUdeI5K5ug4g5xqDZi89oVrPCE8qoVE1mplriuCqhRYXRGdRtCma0JH8HmTcMqCyW3jcEEavpJ6COI1y00DzArcC4d',
                'live_webhook_secret' => 'live_webhook_secret',
                'live_publishable_key' => 'live_publishable_key',
                'live_secret_key' => 'live_secret_key',
            ]
        );
    }
}
