<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StripeSeeder extends Seeder
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
                'test_publishable_key' => 'test_publishable_key',
                'test_secret_key' => 'test_secret_key',
                'live_publishable_key' => 'live_publishable_key',
                'live_secret_key' => 'live_secret_key',
            ]
        );
    }
}
