<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectiviyssmartphoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connectivitysmartphone', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bluetooth');
            $table->string('wi_fi');
            $table->string('usb');
            $table->string('gps'); 
            $table->string('other');
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
        Schema::dropIfExists('displayssmartphone');
    }
}
