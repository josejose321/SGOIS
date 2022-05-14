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
     *
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('employee_no');
            $table->unsignedInteger('userNo')->unique();
            $table->string('user_id',9)->unique();
            $table->string('officeCode',20)->index()->nullable();
            $table->string('position')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('officeCode')
            ->references('officeCode')
            ->on('offices')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('userNo')
            ->references('userNo')
            ->on('users')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
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
