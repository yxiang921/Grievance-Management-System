<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
            [
                'admin_username' => 'admin',
                'admin_name' => 'Admin',
                'admin_email' => 'admin@gmail.com',
                'admin_password' => bcrypt('123'),
                'admin_phone_number' => '1234567890',
            ]
        );

        Admin::factory()->count(10)->create();
    }
}
