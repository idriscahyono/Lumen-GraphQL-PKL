<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePorts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pc_ports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('audio', 100);
            $table->string('usb_port', 100);
            $table->string('lan', 100);
            $table->string('antenna', 100);
            $table->integer('wifi');
            $table->string('bluetooth', 100);
            $table->boolean('legacy_io');
            $table->boolean('cir_infrared_port');
            $table->boolean('thunderbolt');
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
        Schema::dropIfExists('ports');
    }
}
