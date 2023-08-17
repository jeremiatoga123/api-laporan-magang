<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->id('mentor_id');
            $table->string('company_id');
            $table->string('mentor_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mentors');
    }
}
