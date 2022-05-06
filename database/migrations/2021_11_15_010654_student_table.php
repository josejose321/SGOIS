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
            $table->string('user_id',8)->unique();
            $table->string('firstname',50);
            $table->string('middlename',50);
            $table->string('lastname',50);
            $table->string('email',50)->unique();
            $table->string('departmentCode',10)->index()->nullable();
            $table->string('phone',11);
            $table->string('course');
            $table->string('year', 10);
            $table->string('avatar')->default('defaultAvatar.jpg');
            $table->enum('status',['active','inactive','graduated'])->default('active');
            $table->timestamps();
            
            $table->foreign('departmentCode')
            ->references('departmentCode')
            ->on('departments')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
