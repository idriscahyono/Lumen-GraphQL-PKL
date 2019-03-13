<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableActivityTracker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartwatch_activity_trackers', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('sleep_quality')->default(false);
            $table->boolean('heart_rate')->default(false);
            $table->boolean('steps')->default(false);
            $table->boolean('hours_slept')->default(false);
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
        Schema::dropIfExists('acivity_trackers');
    }
}
