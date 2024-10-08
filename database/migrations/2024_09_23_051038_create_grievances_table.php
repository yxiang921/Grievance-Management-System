<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grievances', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('status')->default('pending');
            $table->string('category');
            $table->string('location');
            $table->string('priority')->default('Normal');
            $table->string('grievance_image')->nullable();
            $table->dateTime('due_date')->nullable(); //2024-10-10

            $table->boolean('is_assigned')->default(false);

            $table->string('outsource_remark')->nullable();
            $table->string('process_remark')->nullable();
            $table->string('process_image')->nullable();

            // Foreign Keys
            $table->foreignId('department_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grievances');
    }
};
