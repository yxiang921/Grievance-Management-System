<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'yx',
            'username' => 'yx',
            'email' => 'yx@gmail.com',
            'phone_number' => '1234567890',
            'password' => bcrypt('12341234'),

        ]);

        User::factory()->count(10)->create();
    }
}
