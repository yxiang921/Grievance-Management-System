<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class GrievanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grievances')->insert([
            [
                'title' => 'Broken AC in classroom',
                'description' => 'The AC in room B101 is broken and needs repair.',
                'status' => 'Received',
                'category' => 'Facility',
                'location' => 'Room B101',
                'department_id' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tuition fees issue',
                'description' => 'Tuition fees are not updated in the student portal.',
                'status' => 'In Progress',
                'category' => 'Finance',
                'location' => 'Finance Office',
                'department_id' => 2,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Unethical behavior in library',
                'description' => 'Students are talking loudly in the quiet area of the library.',
                'status' => 'Closed',
                'category' => 'Behaviour',
                'location' => 'Library',
                'department_id' => 3,
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
