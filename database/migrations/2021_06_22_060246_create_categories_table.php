<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('categoryNo');
            $table->string('officeCode')->index()->nullable();
            $table->string('name');
            $table->enum('type',['Administrative','Discount','Academic','External','Loan'])->index();
            $table->string('field_team');
            $table->integer('allocation');
            $table->longText('instruction')->nullable();
            $table->timestamps();

            $table->foreign('officeCode')
            ->references('officeCode')
            ->on('offices')
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
        Schema::dropIfExists('categories');
    }
}
