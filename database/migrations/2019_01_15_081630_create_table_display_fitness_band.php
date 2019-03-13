<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDisplayFitnessBand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fitness_band_display', function (Blueprint $table) {
            $table->increments('id');
            $table->string('display_technology');
            $table->integer('screen_size');
            $table->string('screen_resolution');
            $table->string('touch_screen');
            $table->integer('pixel_density_sharpness');
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
        Schema::dropIfExists('fitness_band_display');
    }
}
