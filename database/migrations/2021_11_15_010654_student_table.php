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
            $table->bigIncrements('student_no');
            $table->unsignedInteger('userNo')->unique();
            $table->unsignedBigInteger('courseNo')->index()->nullable();
            $table->string('year', 10);
            $table->string('parentName')->nullable();
            $table->timestamps();

            $table->foreign('courseNo')
            ->references('courseNo')
            ->on('courses')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->foreign('userNo')
            ->references('userNo')
            ->on('users')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
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
