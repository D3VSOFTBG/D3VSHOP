<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carriers')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Speedy',
                    'logo' => 'speedy.png',
                    'description' => 'Speedy Carrier',
                    'status' => 1,
                    'free_shipping' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 2,
                    'name' => 'Econt',
                    'logo' => 'econt.png',
                    'description' => 'Econt Carrier',
                    'status' => 0,
                    'free_shipping' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
