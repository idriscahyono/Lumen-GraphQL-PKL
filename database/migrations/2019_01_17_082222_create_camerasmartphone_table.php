<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamerasmartphoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camerasmartphone', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_camera');
            $table->text('main_camera_specification');
            $table->integer('selfie_camera');
            $table->text('selfie_camera_specification');
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
        Schema::dropIfExists('camerasmartphone');
    }
}
