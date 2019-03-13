<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignsmartphoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designsmartphone', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dimensions');
            $table->integer('weight');
            $table->string('materials');
            $table->string('biometrics');
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
        Schema::dropIfExists('designsmartphone');
    }
}
