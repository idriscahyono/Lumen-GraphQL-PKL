<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdditionalFeaturesFitnessBand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fitness_band_additional_features', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('alarm_clock');
            $table->boolean('reminders');
            $table->boolean('stopwatch');
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
        Schema::dropIfExists('fitness_band_additional_features');
    }
}
