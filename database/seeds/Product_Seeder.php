<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'slug' => 'product1',
                    'image' => 'https://www.prestashop.com/sites/default/files/choose_your_design_optimized_4_0.svg',
                    'name' => 'Product 1',
                    'price' => 1.2,
                    'discount' => 2,
                    'quantity' => 3,
                    'serial_number' => 123123312,
                    'sku' => 100,
                    'brand' => 'Dell',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'slug' => 'product2',
                    'image' => 'https://www.prestashop.com/sites/default/files/choose_your_design_optimized_4_0.svg',
                    'name' => 'Product 2',
                    'price' => 1.5,
                    'discount' => 3,
                    'quantity' => 8,
                    'serial_number' => 12213132132,
                    'sku' => 223,
                    'brand' => 'Asus',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
