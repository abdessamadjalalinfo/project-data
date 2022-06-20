<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->string('engine_size');
            
            $table->string('horsepower');
            $table->string('wheelbase');
            $table->string('width');
            $table->string('length');
            $table->string('curb_weight');
            $table->string('fuel_capacity');
            $table->string('fuel_efficiency');
            $table->string('latest_Launch');
            $table->string('power_perf_factor');

            $table->unsignedBigInteger('manufacturer_id');
 
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');
            $table->unsignedBigInteger('model_id');
 
            $table->foreign('model_id')->references('id')->on('models');

            
            $table->unsignedBigInteger('type_id');
 
            $table->foreign('type_id')->references('id')->on('types');


            $table->unsignedBigInteger('user_id');
 
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('cars');
    }
}
