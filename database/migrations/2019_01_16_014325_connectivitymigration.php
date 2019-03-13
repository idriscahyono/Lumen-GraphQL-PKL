<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Connectivitymigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connectivitys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wifi');
            $table->boolean('bluetooth');
            $table->string('usb');
            $table->string('hdmi');
            $table->boolean('nfc');
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
        Schema::dropIfExists('connectivitys');
    }
}
