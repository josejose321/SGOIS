<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EndoresementOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('EndorsementOffice', function(Blueprint $table)
        {
            $table->id('officeNumber');
            $table->string('officeName')->unique();
            $table->string('Description');
            $table->string('EndorserName');
            // $table->string('endorser_id')->index()->nullable();
            // $table->foreign('endorser_id')->references('endorser_id')->on('endorser')->onDelete('cascade');
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

        Schema::dropIfExists('EndorsementOffice');
    }
}
