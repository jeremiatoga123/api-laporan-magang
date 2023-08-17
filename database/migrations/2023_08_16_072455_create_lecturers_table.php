<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id('lecturer_id');
            $table->string('lecturer_name');
            $table->string('lecturer_nip');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lecturers');
    }
}
