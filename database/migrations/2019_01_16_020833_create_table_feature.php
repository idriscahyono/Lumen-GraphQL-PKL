<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFeature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitor_features', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('titable')->nullable()->default(false);
            $table->boolean('anti_glare')->nullable()->default(false);
            $table->boolean('built_in_webcam')->nullable()->default(false);
            $table->boolean('integrated_speakers')->nullable()->default(false);
            $table->boolean('tv_tuner')->nullable()->default(false);
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
        Schema::dropIfExists('features');
    }
}
