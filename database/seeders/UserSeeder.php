<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [ 'name' => 'systemAdmin',
            'email' => 'systemAdmin@test.com',
            'password' => Hash::make('pass'),
            'role' => 1 ],
            [ 'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('pass'),
            'role' => 5 ],
            [ 'name' => 'user',
            'email' => 'user@test.com',
            'password' => Hash::make('pass'),
            'role' => 10 ],
            ]);
    }
}
