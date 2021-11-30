<?php

use Illuminate\Database\Seeder;

class Currency_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert(
            [
                [
                    'id' => 1,
                    'code' => 'EUR',
                    'symbol' => '€',
                ],
                [
                    'id' => 2,
                    'code' => 'USD',
                    'symbol' => '$',
                ]
            ]
        );
    }
}
