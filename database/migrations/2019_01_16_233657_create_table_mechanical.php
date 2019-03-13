<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMechanical extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pc_mechanicals', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('kensington_lock');
            $table->string('led_indicators', 100);
            $table->text('power_supply');
            $table->string('colling_system', 100);
            $table->string('zbox_dimensions', 100);
            $table->string('case_mounting', 100);
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
        Schema::dropIfExists('mechanicals');
    }
}
