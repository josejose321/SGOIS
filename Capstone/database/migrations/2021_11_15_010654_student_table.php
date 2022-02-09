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
        Schema::create('students', function (Blueprint $table){
            $table->string('student_no',8)->primary();
            $table->string('firstname',50);
            $table->string('middlename',50);
            $table->string('lastname',50);
            $table->string('email',50)->unique();
            $table->string('department')->index();
            $table->string('phone',11);
            $table->string('course');
            $table->string('year', 10);
            $table->string('avatar');
            $table->string('password');
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
