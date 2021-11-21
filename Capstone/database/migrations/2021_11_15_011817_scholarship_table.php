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
        Schema::create('Scholarship', function (Blueprint $table)
        {
            $table->increments("ScholarhipNo");
            $table->string('Type');
            $table->string('semester');
            $table->string('school_year');
            $table->enum('tuitionDiscount', [25, 50,75,100]);
            $table->enum('status', ['Pending','Approved','Rejected'])->default('Pending');
            $table->string('officeCode')->index()->nullable();
            $table->string('student_no')->index();
            $table->foreign('student_no')->references('student_no')->on('Student')->onDelete('cascade');
            
            
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
        Schema::dropIfExists('Scholarship');
    }
}
