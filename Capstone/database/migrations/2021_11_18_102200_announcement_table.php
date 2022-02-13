<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnnouncementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('annoucements', function (Blueprint $table){
            $table->id();
            $table->string('subject');
            $table->longText('content');
            $table->string('admin_no',8)->index();
            $table->timestamps();
            // $table->foreign('admin_no')
            // ->references('admin_no')
            // ->on('admins')
            // ->onDelete('cascade')
            // ->onUpdate('cascade');
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
        Schema::dropIfExists('Announcement');
    }
}
