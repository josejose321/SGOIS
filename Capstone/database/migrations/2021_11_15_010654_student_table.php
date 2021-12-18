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
            $table->string('fullname',50);
            $table->enum('department', ['CSS','CJS','EA','CBA','CN','CAS','LAW','Graduate Studies','HS','SHS','Elementary']);
            $table->string('phoneNumber',11);
            $table->string('course');
            $table->string('year', 10);
            $table->string('image');
            //$table->foreign('student_no')->references('user_no')->on('users')->onDelete('cascade');
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
