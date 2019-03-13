<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePowerDesignPowerBank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('power_bank_design_power_bank', function (Blueprint $table) {
            $table->increments('id');
            $table->string('colors');
            $table->string('shapeform_factor');
            $table->integer('weight');
            $table->integer('dimensions');
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
        Schema::dropIfExists('power_bank_design');
    }
}
