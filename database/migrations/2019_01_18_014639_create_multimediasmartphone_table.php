<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultimediasmartphoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimediasmartphone', function (Blueprint $table) {
            $table->increments('id');
            $table->string('screen_mirroring');
            $table->string('speakers');
            $table->string('audio_jack');
            $table->string('michrophone');
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
        Schema::dropIfExists('multimediasmartphone');
    }
}
