<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Account',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('4*9~!%KNqyW#N[!P'),
                'role' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User2 Account',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('4*9~!%KNqyW#N[!P'),
                'role' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User Account',
                'email' => 'user@gmail.com',
                'password' => Hash::make('4*9~!%KNqyW#N[!P'),
                'role' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
