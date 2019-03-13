<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePowerBank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('power_bank', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_features');
            $table->integer('id_battery_charging');
            $table->integer('id_connectivity');
            $table->integer('id_power_requirements');
            $table->integer('id_design');
            $table->integer('id_compability');
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
        Schema::dropIfExists('power_bank');
    }
}
