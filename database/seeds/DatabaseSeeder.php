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
        $this->call(User_Seeder::class);
        $this->call(Role_Seeder::class);
        $this->call(Product_Seeder::class);
        $this->call(Order_Seeder::class);
        $this->call(Ordered_Product_Seeder::class);
        $this->call(Currency_Seeder::class);
    }
}
