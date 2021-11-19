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
        Schema::create('EndorsementStaff', function (Blueprint $table)
        {
            $table->string('staff_no')->primary();
            $table->string('officeCode')->index();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('extension');
            $table->string('email');
            $table->string('phone');
            $table->binary('image');
            $table->foreign('staff_no')->references('staff_no')->on('EndorsementOffice')->onDelete('cascade');
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
