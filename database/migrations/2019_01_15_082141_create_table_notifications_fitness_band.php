<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNotificationsFitnessBand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fitness_band_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('timer');
            $table->boolean('twitter');
            $table->boolean('incoming_call');
            $table->boolean('calender_reminder');
            $table->boolean('text_message');
            $table->boolean('facebook');
            $table->boolean('alarm');
            $table->boolean('weather');
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
        Schema::dropIfExists('fitness_band_notifications');
    }
}
