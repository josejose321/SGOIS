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
            $table->increments("scholarshipNo");
            $table->enum('type',['Scholarship','Discount','Grant','Loan'])->default('Scholarship');//will remove later
            $table->unsignedBigInteger('student_no')->index();
            $table->string('semesterCode',20)->index();
            $table->unsignedBigInteger('categoryNo')->index()->nullable();
            $table->string('discount')->default('NA');
            $table->double('amount')->default(0);
            $table->string('requirement');
            $table->string('photo');
            $table->enum('deanVerification',['Declined','Approved','Pending','Endorsed','NA'])->default('NA');
            $table->enum('officeVerification',['Declined','Approved','Pending','Endorsed'])->default('Pending');
            $table->enum('adminVerification',['Declined','Approved','Pending','Endorsed'])->default('Pending');
            $table->string('remarks')->nullable();
            $table->timestamps();

            $table->foreign('student_no')->references('student_no')->on('students')->onDelete('cascade');


            $table->foreign('semesterCode')
            ->references('semesterCode')
            ->on('semesters')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('categoryNo')
            ->references('categoryNo')
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
