<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'nik' => '120312381292391',
            'full_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'mobile' => '08671829213',
            'address' => Str::random(30).' Street',
            'role' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            'nik' => '120312381292391',
            'full_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'mobile' => '08671829213',
            'address' => Str::random(30).' Street',
            'role' => 'employee',
            'password' => Hash::make('password'),
        ]);
    }
}
