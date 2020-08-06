<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSchedulesForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade');

            $table->foreign('level_id')
                ->references('id')
                ->on('levels')
                ->onDelete('cascade');

            $table->foreign('shift_id')
                ->references('id')
                ->on('shifts')
                ->onDelete('cascade');

            $table->foreign('classroom_id')
                ->references('id')
                ->on('classrooms')
                ->onDelete('cascade');

            $table->foreign('batch_id')
                ->references('id')
                ->on('batches')
                ->onDelete('cascade');

            $table->foreign('day_id')
                ->references('id')
                ->on('days')
                ->onDelete('cascade');

            $table->foreign('time_id')
                ->references('id')
                ->on('times')
                ->onDelete('cascade');

            $table->foreign('teacher_id')
                ->references('id')
                ->on('teachers')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
            $table->dropForeign(['time_id']);
            $table->dropForeign(['day_id']);
            $table->dropForeign(['batch_id']);
            $table->dropForeign(['shift_id']);
            $table->dropForeign(['level_id']);
            $table->dropForeign(['course_id']);
            $table->dropForeign(['classroom_id']);
        });
    }
}
