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
            $table->string('student_no',8)->primary();
            $table->string('password',50);
            $table->string('first_name',50);
            $table->string('middle_name',50);
            $table->string('last_name',50);
            $table->string('suffix',10);
            $table->enum('Department', ['CSS','CJS','EA','CBA','CN','CAS','LAW']);
            $table->string('email');
            $table->string('phoneNumber',11);
            $table->string('course');
            $table->string('Year', 10);
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
