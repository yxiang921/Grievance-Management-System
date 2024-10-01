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
        Grievance::factory()->count(20)->create();
    }
}
