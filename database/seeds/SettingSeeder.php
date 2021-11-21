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
                'name' => 'shop_name',
                'value' => 'D3V.SHOP',
            ],
            [
                'name' => 'title_seperator',
                'value' => '-',
            ],
            [
                'name' => 'default_currency',
                'value' => 'EUR',
            ],
        ]);
    }
}
