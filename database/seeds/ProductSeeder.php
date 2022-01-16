<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
                    'discount_by_percent' => 2,
                    'quantity' => 3,
                    'serial_number' => 123123312,
                    'sku' => 100,
                    'brand' => 'Dell',
                    'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'slug' => 'product2',
                    'image' => 'https://www.prestashop.com/sites/default/files/choose_your_design_optimized_4_0.svg',
                    'name' => 'Product 2',
                    'price' => 1.5,
                    'discount_by_percent' => 3,
                    'quantity' => 8,
                    'serial_number' => 12213132132,
                    'sku' => 223,
                    'brand' => 'Asus',
                    'description' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
