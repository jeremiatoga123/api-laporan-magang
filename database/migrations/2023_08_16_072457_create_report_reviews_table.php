<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('report_reviews', function (Blueprint $table) {
            $table->increments('review_id');
            $table->unsignedInteger('report_id');
            $table->unsignedInteger('mentor_id');
            $table->string('comments');
            $table->timestamps();

            $table->foreign('report_id')->references('report_id')->on('reports')->onDelete('cascade');
            $table->foreign('mentor_id')->references('mentor_id')->on('mentors')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('report_reviews');
    }
}
