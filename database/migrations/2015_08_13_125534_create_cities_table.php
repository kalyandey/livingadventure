<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_code', 2);
            $table->string('city_code', 20);
            $table->string('city_name');
            $table->string('city_name_in_albanian')->nullable();
            $table->string('city_name_in_croatian')->nullable();
            $table->string('city_name_in_czech')->nullable();
            $table->string('city_name_in_dutch_belgium')->nullable();
            $table->string('city_name_in_english_uk')->nullable();
            $table->string('city_name_in_finnish')->nullable();
            $table->string('city_name_in_french')->nullable();
            $table->string('city_name_in_greek')->nullable();
            $table->string('city_name_in_hungarian')->nullable();
            $table->string('city_name_in_italian')->nullable();
            $table->string('city_name_in_kazakh')->nullable();
            $table->string('city_name_in_polish')->nullable();
            $table->string('city_name_in_portuguese')->nullable();
            $table->string('city_name_in_romanian')->nullable();
            $table->string('city_name_in_russian')->nullable();
            $table->string('city_name_in_serbian')->nullable();
            $table->string('city_name_in_slovak')->nullable();
            $table->string('city_name_in_spanish')->nullable();
            $table->string('city_name_in_turkish')->nullable();
            $table->string('provider')->nullable();
            $table->enum('active', ['1', '0']);
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
        Schema::drop('cities');
    }
}
