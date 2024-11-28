<?php

namespace Database\Seeders;

use App\Models\Grievance;
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
        Grievance::factory()->count(4)->create();

        DB::table('grievances')->insert(
            [
                'title' => 'Air Condition Broken',
                'description' => 'The air condition in the office is broken and it is very hot in the office.',
                'status' => 'Received',
                'user_id' => 1,
                'latitude' => '1.534561',
                'longitude' => '103.681532',
            ]
        );
    }
}
