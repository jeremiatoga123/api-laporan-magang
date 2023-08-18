<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('report_id');
            $table->unsignedInteger('student_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('internship_activity');
            $table->string('work_steps');
            $table->string('report_results');
            $table->date('date');
            $table->enum('status', ['Approved', 'Revision'])->notNull();
            $table->timestamps();

            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
