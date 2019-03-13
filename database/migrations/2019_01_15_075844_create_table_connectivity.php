<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConnectivity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitor_connectivities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number_of_dvi_inputs');
            $table->integer('number_of_hdmi_inputs');
            $table->boolean('headphone_jack');
            $table->integer('number_of_hdmi_outputs');
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
        Schema::dropIfExists('connectivities');
    }
}
