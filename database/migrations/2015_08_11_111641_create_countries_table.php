<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_code', 2);
            $table->string('country_name')->nullable();
            $table->string('country_name_in_albanian')->nullable();
            $table->string('country_name_in_czech')->nullable();
            $table->string('country_name_in_dutch_belgium')->nullable();
            $table->string('country_name_in_finnish')->nullable();
            $table->string('country_name_in_greek')->nullable();
            $table->string('country_name_in_hungarian')->nullable();
            $table->string('country_name_in_kazakh')->nullable();
            $table->string('country_name_in_macedonian')->nullable();
            $table->string('country_name_in_polish')->nullable();
            $table->string('country_name_in_portuguese')->nullable();
            $table->string('country_name_in_romanian')->nullable();
            $table->string('country_name_in_russian')->nullable();
            $table->string('country_name_in_slovak')->nullable();
            $table->string('country_name_in_spanish')->nullable();
            $table->string('country_name_in_turkish')->nullable();
            $table->string('continent')->nullable();
            $table->enum('iseurope', ['1', '0']);
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
        Schema::drop('countries');
    }
}
