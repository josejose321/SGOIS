<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Enum;

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
        Schema::create('discounts', function (Blueprint $table)
        {
            $table->increments("scholarhipNo");
            $table->string('student_no',8)->index();
            $table->string('officeCode')->index()->nullable();
            $table->string('semesterCode')->index()->nullable();
            $table->string('type');
            $table->string('field');
            $table->string('discount');
            $table->string('requirement');
            $table->string('photo');
            $table->string('officeVerification')->default('pending');
            $table->string('adminVerification')->default('pending');;
            $table->string('remarks');
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
