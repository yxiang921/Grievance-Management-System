<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            [
                'name' => 'John Doe (Dummy)',
                'email' => 'john@gmail.com',
                'phone_number' => '014 123 4567',
                'password' => bcrypt('12341234'),
            ],
            [
                'name' => 'Jane Doe (Dummy)',
                'email' => 'jane@gmail.com',
                'phone_number' => '014 123 1241',
                'password' => bcrypt('12341234'),
            ],
            [
                'name' => 'yx',
                'email' => 'yx@gmail.com',
                'phone_number' => '014 123 1131',
                'password' => bcrypt('12341234'),
            ]
        ]);
    }
}
