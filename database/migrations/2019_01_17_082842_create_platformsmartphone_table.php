<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatformsmartphoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platfromsmartphone', function (Blueprint $table) {
            $table->increments('id');
            $table->string('system_chip');
            $table->string('processor');
            $table->string('gpu');
            $table->integer('memory');
            $table->integer('internal_storage');
            $table->integer('storage_expansion');
            $table->string('os');
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
        Schema::dropIfExists('platfromsmartphone');
    }
}
