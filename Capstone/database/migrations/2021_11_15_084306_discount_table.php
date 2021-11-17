<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Discount', function (Blueprint $table)
        {
            $table->increments("DiscountNo");
            $table->string('semester');
            $table->string('school_year');
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
        Schema::dropIfExists('Discount');
    }
}
