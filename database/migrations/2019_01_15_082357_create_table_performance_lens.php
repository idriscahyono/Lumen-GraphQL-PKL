<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePerformanceLens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lens_performance', function (Blueprint $table) {
            $table->increments('id');
            $table->string('focal_length');
            $table->string('aperture');
            $table->string('camera_mount_type');
            $table->string('format_compability');
            $table->string('angle_of_view');
            $table->integer('minimum_focus_distance');
            $table->integer('magnification');
            $table->string('maximum_reproduction_ratio');
            $table->string('optical_design');
            $table->string('diaphragm_blades');
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
        Schema::dropIfExists('lens_performance');
    }
}
