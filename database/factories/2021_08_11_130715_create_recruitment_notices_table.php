<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment_notices', function (Blueprint $table) {
            $table->id();
            $table->integer("employer_id");
            $table->string('career_levelName');
            $table->string('job_description');
            $table->string('requirements');
            $table->string('job_type');
            $table->string('qualification');
            $table->string('image');
            $table->integer('salary');
            $table->string('job_specialization');
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
        Schema::dropIfExists('recruitment_notices');
    }
}