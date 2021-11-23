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
                'name' => 'title_seperator',
                'value' => '-',
            ],
            [
                'id' => 3,
                'name' => 'default_currency',
                'value' => 'EUR',
            ],
            [
                'id' => 4,
                'name' => 'theme_name',
                'value' => 'default',
            ],
        ]);
    }
}
