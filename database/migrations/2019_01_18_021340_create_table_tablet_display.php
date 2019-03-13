<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTabletDisplay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablet_displays', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('display_size');
            $table->string('resolution');
            $table->integer('pixel_density');
            $table->string('technology');
            $table->integer('screen_to_body_ratio');
            $table->string('features');
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
        Schema::dropIfExists('tablet_displays');
    }
}
