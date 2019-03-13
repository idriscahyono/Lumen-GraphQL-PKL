<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDisplaymonitor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('displays', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('refresh_rate');
            $table->string('maximum_resolution');
            $table->string('native_resolution');
            $table->integer('response_time');
            $table->string('display_type');
            $table->string('panel_type');
            $table->string('synchronization_technology');
            $table->string('aspect_ratio');
            $table->string('brightness');
            $table->integer('screen_size');
            $table->integer('horizontal_viewing_angle');
            $table->integer('vertical_viewing_angle');
            $table->boolean('smart_display');
            $table->boolean('touch_screen');
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
        Schema::dropIfExists('displays');
    }
}
