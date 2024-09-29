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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('department_name');
            $table->string('department_category');
            $table->timestamps();
        });

        if (DB::table('departments')->count() == 0) {
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
};
