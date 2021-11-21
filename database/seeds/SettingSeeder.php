<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
        [
            [
                'id' => 1,
                'name' => 'shop_name',
                'value' => 'D3V.SHOP',
            ],
            [
                'id' => 2,
                'name' => 'default_currency',
                'value' => 'EUR',
            ],
        ]);
    }
}
