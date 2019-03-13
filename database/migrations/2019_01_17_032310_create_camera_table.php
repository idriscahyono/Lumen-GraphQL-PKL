<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCameraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cameras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_video');
            $table->integer('id_storage');
            $table->integer('id_lens');
            $table->integer('id_battery');
            $table->integer('id_connectivity');
            $table->integer('id_exposure');
            $table->integer('id_design');
            $table->integer('id_features');
            $table->integer('id_sensor');
            $table->integer('id_flash');
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
        Schema::dropIfExists('cameras');
    }
}
