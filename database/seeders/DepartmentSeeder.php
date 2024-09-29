<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'department_name' => 'Assets Management and General Affair Office',
                'department_category' => 'Facility'
            ],
            [
                'department_name' => 'Account and Finance Office',
                'department_category' => 'Finance'
            ],
            [
                'department_name' => 'Academic Affairs, Admission Registration Office',
                'department_category' => 'Academic'
            ],
            [
                'department_name' => 'Student Affair Office',
                'department_category' => 'Other'
            ],
        ]);
    }
}
