<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('admin_username');
            $table->string('admin_email');
            $table->string('admin_password');
            $table->string('admin_phone_number');
            $table->string('admin_first_name');
            $table->string('admin_last_name');
            $table->timestamps();
        });

        DB::table('admins')->insert([
            [
                'admin_username' => 'admin',
                'admin_email' => 'admin@gmail.com',
                'admin_password' => bcrypt('123'),
                'admin_phone_number' => '1234567890',
                'admin_first_name' => 'Admin',
                'admin_last_name' => 'Admin',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
