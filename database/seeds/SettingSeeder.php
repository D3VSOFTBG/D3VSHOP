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
        DB::table('settings')->insert([
            [
                'name' => 'TITLE',
                'value' => 'D3VSHOP',
            ],
            [
                'name' => 'TITLE_SEPERATOR',
                'value' => '-',
            ],
            [
                'name' => 'DEFAULT_CURRENCY_ID',
                'value' => 1,
            ],
            [
                'name' => 'PAGINATION_ADMIN',
                'value' => 20,
            ],
            [
                'name' => 'SHIPPING_PRICE',
                'value' => 1,
            ],
            [
                'name' => 'TAX_RATE',
                'value' => 2,
            ],
            [
                'name' => 'LOGO',
                'value' => NULL,
            ],
            [
                'name' => 'FAVICON',
                'value' => NULL,
            ],
            [
                'name' => 'MAIL',
                'value' => 'admin@d3vsoft.com',
            ],
            [
                'name' => 'ADDRESS',
                'value' => 'Address',
            ],
            [
                'name' => 'CODE',
                'value' => 'Code',
            ],
            [
                'name' => 'VAT',
                'value' => 'VAT',
            ],
            [
                'name' => 'PHONE',
                'value' => 'Phone',
            ],
            [
                'name' => 'SWIFT',
                'value' => 'SWIFT',
            ],
        ]);
    }
}
