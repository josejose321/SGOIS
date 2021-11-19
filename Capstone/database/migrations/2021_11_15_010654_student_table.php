<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Student', function (Blueprint $table){
            $table->string('student_no')->primary();
            $table->string('password');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('suffix');
            $table->enum('Department', ['CSS','CJS','EA','CBA','CN','CAS','LAW']);
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('course');
            $table->string('Year');
            $table->binary('image');
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
        //
        Schema::dropIfExists('Student');
    }
}
