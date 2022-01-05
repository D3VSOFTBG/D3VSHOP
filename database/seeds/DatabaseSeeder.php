<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderedProductSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(CarrierSeeder::class);
        $this->call(AdminMenuSeeder::class);
        $this->call(InfoSeeder::class);
    }
}
