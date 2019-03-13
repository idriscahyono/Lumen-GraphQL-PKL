<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSmartwatchDisplay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartwatch_displays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('display_tecnology');
            $table->integer('screen_size');
            $table->string('screen_resolution');
            $table->string('touch_sreen');
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
        Schema::dropIfExists('smartwatch_displays');
    }
}
