<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert(
            [
                [
                    'currency_id' => 1,
                    'customer' => 'Alex Kirov',
                    'phone' => '0876595156',
                    'email' => 'alex@d3vsoft.com',
                    'country' => 'BG',
                    'city' => 'Sofia',
                    'address_1' => '1',
                    'address_2' => '2',
                    'postal_code' => '9000',
                    'tax_percent' => 2,
                    'shipping_price' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'currency_id' => 2,
                    'customer' => 'Spas Kirov',
                    'phone' => '0876595156',
                    'email' => 'spas@d3vsoft.com',
                    'country' => 'BG',
                    'city' => 'Burgas',
                    'address_1' => '1',
                    'address_2' => '2',
                    'postal_code' => '8000',
                    'tax_percent' => 5,
                    'shipping_price' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
