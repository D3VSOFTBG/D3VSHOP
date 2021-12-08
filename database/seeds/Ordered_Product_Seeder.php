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
                    'price' => 2.5,
                    'discount' => 5,
                    'quantity' => 2,
                    'serial_number' => 12332131213,
                    'sku' => '213DDFG23',
                ],
                [
                    'id' => 2,
                    'order_id' => 2,
                    'name' => 'Test product 2',
                    'price' => 7,
                    'discount' => 6,
                    'quantity' => 5,
                    'serial_number' => 1233213124,
                    'sku' => '513DDFG23',
                ],
                [
                    'id' => 3,
                    'order_id' => 1,
                    'name' => 'Test product 3',
                    'price' => 5,
                    'discount' => 1,
                    'quantity' => 6,
                    'serial_number' => 664554532432,
                    'sku' => '913DDFG23',
                ]
            ]
        );
    }
}
