<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airlines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('airline_code', 2);
            $table->string('airline_name')->nullable();
            $table->string('origin')->nullable();
            $table->string('provider')->nullable();
            $table->enum('active', ['1', '0']);
            $table->timestamps();
            
            $table->index('airline_code');
            $table->index('airline_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('airlines');
    }
}
