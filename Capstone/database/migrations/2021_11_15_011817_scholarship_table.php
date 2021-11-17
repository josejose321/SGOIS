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
            // $table->string('officeCode')->index()->nullable();
            // $table->foreign('officeCode')->references('officeCode')->on('EndorsementOffice')->onDelete('cascade');
            $table->string('student_no')->index()->nullable();
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
