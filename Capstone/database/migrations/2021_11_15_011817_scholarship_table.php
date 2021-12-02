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
            $table->string('student_no',8)->index();
            $table->string('officeCode')->index()->nullable();
            $table->string('Type');
            $table->enum('discount', [25, 50,75,100]);
            $table->enum('officeStatus', ['Pending','Approved','Rejected'])->default('Pending');
            $table->enum('status', ['Pending','Approved','Rejected'])->default('Pending');
            
            
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
