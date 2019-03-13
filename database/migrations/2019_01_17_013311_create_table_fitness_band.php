<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFitnessBand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fitness_band', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_activity_tracker');
            $table->integer('id_sensors');
            $table->integer('id_syncing');
            $table->integer('id_smartphone_remote_features');
            $table->integer('id_display');
            $table->integer('id_battery');
            $table->integer('id_compability');
            $table->integer('id_ruggedness');
            $table->integer('id_additional_features');
            $table->integer('id_notifications');
            $table->integer('id_design');
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
        Schema::dropIfExists('fitness_band');
    }
}
