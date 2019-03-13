<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSmartwatchNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartwatch_notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('timer');
            $table->boolean('incoming_call');
            $table->boolean('calender_reminder');
            $table->boolean('text_message');
            $table->boolean('alarm');
            
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
        Schema::dropIfExists('smartwatch_notifications');
    }
}
