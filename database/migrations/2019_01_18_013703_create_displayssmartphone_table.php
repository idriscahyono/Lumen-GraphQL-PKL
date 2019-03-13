<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisplayssmartphoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('displayssmartphone', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('display_size');
            $table->string('resolution');
            $table->integer('pixel_density');
            $table->text('technology');
            $table->integer('screen_to_body_ratio');
            $table->text('features');
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
        Schema::dropIfExists('displayssmartphone');
    }
}
