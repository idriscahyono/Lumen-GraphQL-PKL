<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSmartwatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartwatches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sensors');
            $table->integer('id_activity_tracker');
            $table->integer('id_connectivity');
            $table->integer('id_design');
            $table->integer('id_display');
            $table->integer('id_features');
            $table->integer('id_notifications');

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
        Schema::dropIfExists('smartwatches');
    }
}
