<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('loans', function (Blueprint $table)
        {
            $table->increments("loanNo");
            $table->string('student_no',8)->index();
            $table->string('officeCode')->index()->nullable();
            $table->string('semesterCode')->index()->nullable();
            $table->string('category_no')->index()->nullable();
            $table->string('discount');
            $table->string('requirement');
            $table->string('photo');
            $table->string('officeVerification')->default('pending');
            $table->string('adminVerification')->default('Pending');
            $table->string('remarks');
            $table->timestamps();
            $table->foreign('student_no')->references('student_no')->on('students')->onDelete('cascade');
            
            $table->foreign('officeCode')
            ->references('officeCode')
            ->on('offices')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('semesterCode')
            ->references('semesterCode')
            ->on('semesters')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('category_no')
            ->references('category_no')
            ->on('categories')
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
        Schema::dropIfExists('Loan');
    }
}
