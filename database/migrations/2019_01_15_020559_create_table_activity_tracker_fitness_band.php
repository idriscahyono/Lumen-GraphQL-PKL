<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableActivityTrackerFitnessBand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fitness_band_activity_tracker', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('calories_intake_burned');
            $table->boolean('activity_inactivity');
            $table->boolean('distance');
            $table->boolean('sleep_quality');
            $table->boolean('active_minutes');
            $table->boolean('heart_rate');
            $table->boolean('steps');
            $table->boolean('hours_slept');
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
        Schema::dropIfExists('fitness_band_activity_tracker');
    }
}
