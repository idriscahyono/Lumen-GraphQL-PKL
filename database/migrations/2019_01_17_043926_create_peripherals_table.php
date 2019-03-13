<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeripheralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peripheralslaptop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dimensions');
            $table->string('pointing_device');
            $table->boolean('optical_drive');
            $table->boolean('fingerprint_scanner');
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
        Schema::dropIfExists('peripheralslaptop');
    }
}
