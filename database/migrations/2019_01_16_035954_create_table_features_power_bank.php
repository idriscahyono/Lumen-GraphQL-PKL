<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFeaturesPowerBank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('power_bank_features', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('short_circuit_protection');
            $table->boolean('over_current_protection');
            $table->boolean('led_indicators');
            $table->boolean('over_discharge_protection');
            $table->boolean('led_flash_light');
            $table->boolean('over_charge_protection');
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
        Schema::dropIfExists('power_bank_features');
    }
}
