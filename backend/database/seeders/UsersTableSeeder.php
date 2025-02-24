<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Sultan Salah',
                'email' => 'sultanbamarhool@gmail.com',
                'password' => Hash::make('123123'),
                'role' => 'admin',
                'status' => 'active',
                'department_id' => 1,
            ],
            [
                'name' => 'Salem Maher',
                'email' => 'salem-ma@gmail.com',
                'password' => Hash::make('123123'),
                'role' => 'staff',
                'status' => 'active',
                'department_id' => '2',
            ]

        ]);
    }
}
