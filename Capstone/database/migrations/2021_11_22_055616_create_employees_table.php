<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('employee_no',8)->primary();
            $table->string('firstname',50);
            $table->string('middlename',50);
            $table->string('lastname',50);
            $table->string('email',50)->unique();
            $table->string('departmentCode',10)->index()->nullable();
            $table->string('phone',11);
            $table ->string('position');
            $table->string('avatar');
            $table->string('password');
            $table->timestamps();

            $table->foreign('departmentCode')
            ->references('departmentCode')
            ->on('departments')
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
        Schema::dropIfExists('employees');
    }
}
