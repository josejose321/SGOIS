<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EndorsementOfficeTable extends Migration
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
            $table->string('officeCode')->unique();
            $table->string('OfficeName');
            $table->string('Description');
            $table->string('endorser_id')->index();
            $table->string('password');
            $table->string('EndorserName');
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
