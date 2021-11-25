<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Payment_Method_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert(
            [
                'id' => 1,
                'method' => 'stripe',
                'environment' => 0,
                'test_public_key' => 'test_public_key',
                'test_secret_key' => 'test_secret_key',
                'live_public_key' => 'live_public_key',
                'live_secret_key' => 'live_secret_key',
            ]
        );
    }
}
