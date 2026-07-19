<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\table;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                'name'=>'Thanh Phương',
                'email'=>'phuong@gmail.com',
                'password'=>Hash::make('phuong123'),
                'role'=>'admin',
                ]
            ]
        );
    }
}

