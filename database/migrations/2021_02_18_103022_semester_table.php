<?php

use Doctrine\DBAL\Schema\Table;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SemesterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('semesters', function (Blueprint $table)
        {
            $table->string('semesterCode',20)->primary();
            $table->string('sem');
            $table->string('year');
            $table->boolean('active')->default(1);
            $table->timestamp('deadline');
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
        Schema::dropIfExists('Semester');
    }
}
