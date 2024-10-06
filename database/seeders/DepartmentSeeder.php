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
                'department_category' => 'Facility',
                'department_key' => 'agosuc',
                'department_password' => bcrypt(value: '12341234')
            ],
            [
                'department_name' => 'Account and Finance Office',
                'department_category' => 'Finance',
                'department_key' => 'afosuc',
                'department_password' => bcrypt(value: '12341234')
            ],
            [
                'department_name' => 'Academic Affairs, Admission Registration Office',
                'department_category' => 'Academic',
                'department_key' => 'aarosuc',
                'department_password' => bcrypt(value: '12341234')
            ],
            [
                'department_name' => 'Student Affair Office',
                'department_category' => 'Behaviour',
                'department_key' => 'saosuc',
                'department_password' => bcrypt(value: '12341234')
            ],
        ]);
    }
}
