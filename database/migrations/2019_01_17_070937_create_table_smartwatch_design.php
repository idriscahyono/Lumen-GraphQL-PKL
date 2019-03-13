<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSmartwatchDesign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartwatch_designs', function (Blueprint $table) {
            $table->increments('id');         
            $table->integer('weight');
            $table->string('interface');
            $table->string('clock_face');
            $table->string('shape_surface');
            $table->string('colors');
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
        Schema::dropIfExists('smartwatch_design');
    }
}
