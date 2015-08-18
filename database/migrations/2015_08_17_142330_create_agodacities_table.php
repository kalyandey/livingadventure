<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgodacitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agodacities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id');
            $table->string('city_name');
            $table->string('city_translated');
            $table->string('active_hotels');
            $table->string('longitude');
            $table->string('latitude');
            $table->integer('no_area');
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
        Schema::drop('agodacities');
    }
}
