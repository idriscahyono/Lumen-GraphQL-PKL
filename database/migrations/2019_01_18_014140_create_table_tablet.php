<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTablet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_display');
            $table->integer('id_camera');
            $table->integer('id_design');
            $table->integer('id_platform');
            $table->integer('id_battery');
            $table->integer('id_cellular');
            $table->integer('id_connectivity');
            $table->integer('id_features');
            $table->integer('id_multimedia');

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
        Schema::dropIfExists('tablets');
    }
}
