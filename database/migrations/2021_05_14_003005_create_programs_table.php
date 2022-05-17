<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('program_no');
            $table->string('officeCode')->index()->nullable();
            $table->string('name');
            $table->enum('type',['Scholarship','Discount','Grant','Loan'])->index();
            $table->string('field_team');
            $table->integer('allocation');
            $table->boolean('isInternal')->default(1);
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
        Schema::dropIfExists('programs');
    }
}
