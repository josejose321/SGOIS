<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('userNo');
            $table->string('user_id',9)->unique();
            $table->string('firstname',50);
            $table->string('middlename',50);
            $table->string('lastname',50);
            $table->string('email');
            $table->string('phone',11);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->default('defaultAvatar.jpg');
            $table->boolean('isActive')->default(1);
            $table->enum('type',['director','student','employee','sgoStaff','endorser'])->default('student');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
