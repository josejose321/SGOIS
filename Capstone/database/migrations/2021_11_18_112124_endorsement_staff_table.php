<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EndorsementStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Employee', function (Blueprint $table)
        {
            $table->string('Employee_no')->primary();
            $table->string('officeCode')->index()->nullable();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('suffix');
            $table ->enum('position',array('Office Director','Accounting Staff', 'SGO Director'));
            $table->string('phone');
            $table->binary('image');
            $table->foreign('officeCode')->references('officeCode')->on('Office')->onDelete('cascade');
            $table->foreign('Employee_no')->references('user_no')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('EndorsementStaff');
    }
}
