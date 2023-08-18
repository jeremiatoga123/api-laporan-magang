<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinalAssessmentsTable extends Migration
{
    public function up()
    {
        Schema::create('final_assessments', function (Blueprint $table) {
            $table->increments('assessment_id');
            $table->unsignedInteger('student_id');
            $table->string('assessment_parameter');
            $table->enum('assessment_criteria', ['excellent', 'good', 'satisfactory', 'poor']);
            $table->timestamps();

            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('final_assessments');
    }
}
