<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Featuresmigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featuress', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('touch_focus');
            $table->integer('iso');
            $table->string('white_balance_type');
            $table->string('self_timer');
            $table->string('auto_focus');
            $table->boolean('microphone');
            $table->string('image_stabilization');
            $table->string('incamera_editing');
            $table->boolean('manual_focus');
            $table->integer('af_points');
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
        Schema::dropIfExists('featuress');
    }
}
