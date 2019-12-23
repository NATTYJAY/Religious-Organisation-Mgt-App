<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('services_type')->nullable();
            $table->string('services_date')->nullable();
            $table->string('services_time')->nullable();
            $table->string('service_overshoot_time')->nullable();
            $table->string('service_opening_quality')->nullable();
            $table->string('testimony_officer')->nullable();
            $table->string('testimony_number')->nullable();
            $table->string('testimony_healing_type')->nullable();
            $table->string('devotional_officer')->nullable();
            $table->string('devotional_time')->nullable();
            $table->string('praise_overshoot_time')->nullable();
            $table->string('praise_quality_time')->nullable();
            $table->string('choir')->nullable();
            $table->string('choir_overshoot_time')->nullable();
            $table->string('choir_quality_dressing')->nullable();
            $table->string('choir_general_look')->nullable();
            $table->string('word_pastor')->nullable();
            $table->string('word_overshoot_time')->nullable();
            $table->string('soul_word')->nullable();
            $table->string('first_timer')->nullable();
            $table->string('first_gender_male')->nullable();
            $table->string('first_gender_female')->nullable();
            $table->string('first_gender_children')->nullable();
            $table->string('first_timer_age')->nullable();
            $table->string('quality_reception')->nullable();
            $table->integer('status')->default(0)->unsigned();

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
        Schema::dropIfExists('services');
    }
}
