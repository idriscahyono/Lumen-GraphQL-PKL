<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memorys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ram_type');
            $table->string('memory_slots');
            $table->integer('ram_speed');
            $table->integer('capacity');
            $table->string('upgradeable');
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
        Schema::dropIfExists('memorys');
    }
}
