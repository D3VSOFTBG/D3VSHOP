<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ordered_Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordered_products')->insert(
            [
                [
                    'id' => 1,
                    'order_id' => 1,
                    'name' => 'Test product 1',
                    'quantity' => 2,
                    'price' => 2.5,
                ],
                [
                    'id' => 2,
                    'order_id' => 2,
                    'name' => 'Test product 2',
                    'quantity' => 5,
                    'price' => 7,
                ]
            ]
        );
    }
}
