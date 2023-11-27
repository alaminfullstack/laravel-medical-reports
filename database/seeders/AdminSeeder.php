<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'mobile' => '017***********',
            'type' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin***'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
