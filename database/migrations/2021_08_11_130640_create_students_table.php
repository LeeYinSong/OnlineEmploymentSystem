<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('password');
            $table->integer('ic_number');
            $table->date('birthdate');
            $table->integer('phone_number');
            $table->string('email');
            $table->string('school_name');
            $table->string('education_level');
            $table->string('proof_of_enrollment');
            $table->string('bank');
            $table->integer('bank_account_number');
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
        Schema::dropIfExists('students');
    }
}
