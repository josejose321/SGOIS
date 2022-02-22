<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class ScholarshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('scholarships', function (Blueprint $table)
        {
            $table->increments("scholarhipNo");
            $table->string('student_no',8)->index();
            $table->string('officeCode',20)->index();
            $table->string('semesterCode',20)->index();
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
        Schema::dropIfExists('Scholarship');
    }
}
