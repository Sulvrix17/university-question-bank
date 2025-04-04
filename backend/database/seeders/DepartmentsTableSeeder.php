<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            [
                'name' => 'Administration',
                'faculty_id' => 1
            ],
            [
                'name' => 'Human Medicine',
                'faculty_id' => 2
            ],
            [
                'name' => 'Pharmacy',
                'faculty_id' => 2
            ],
            [
                'name' => 'Computer Engineering',
                'faculty_id' => 3
            ],
            [
                'name' => 'Electrical Engineering',
                'faculty_id' => 3
            ],
            [
                'name' => 'Civil Engineering',
                'faculty_id' => 3
            ],
            [
                'name' => 'Architectural Engineering',
                'faculty_id' => 3
            ],
            [
                'name' => 'Chemical Engineering',
                'faculty_id' => 3
            ],
            [
                'name' => 'Petroleum Engineering',
                'faculty_id' => 3
            ],

        ]);
    }
}
