<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GrantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Grant', function (Blueprint $table)
        {
            $table->increments("GrantNo");
            $table->string('semester');
            $table->string('school_year');
            $table->enum('status', ['Pending','Approved','Rejected'])->default('Pending');
            $table->string('officeCode')->index();
            $table->string('student_no',8)->index();
            // $table->foreign('student_no')->references('student_no')->on('Student')->onDelete('cascade');
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
        Schema::dropIfExists('Grant');
    }
}
