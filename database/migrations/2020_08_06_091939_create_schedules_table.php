<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('level_id');
            $table->unsignedBigInteger('shift_id');
            $table->unsignedBigInteger('classroom_id');
            $table->unsignedBigInteger('batch_id');
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('time_id');
            $table->unsignedBigInteger('teacher_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->tinyInteger('status')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('schedules');
    }
}
