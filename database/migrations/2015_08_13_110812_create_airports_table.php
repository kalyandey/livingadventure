<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_code', 2);
            $table->string('city_code', 10);
            $table->string('airport_code', 10);
            $table->string('state_code', 10)->nullable();
            $table->string('airport_name');
            $table->string('airport_name_in_hr_hr')->nullable();
            $table->string('airport_name_in_cs_cz')->nullable();
            $table->string('airport_name_in_nl_be')->nullable();
            $table->string('airport_name_in_en_gb')->nullable();
            $table->string('airport_name_in_fr_fr')->nullable();
            $table->string('airport_name_in_it_it')->nullable();
            $table->string('airport_name_in_kk_kz')->nullable();
            $table->string('airport_name_in_pl_pl')->nullable();
            $table->string('airport_name_in_pt_pt')->nullable();
            $table->string('airport_name_in_ro_ro')->nullable();
            $table->string('airport_name_in_ru_ru')->nullable();
            $table->string('airport_name_in_sk_sk')->nullable();
            $table->string('airport_name_in_es_es')->nullable();
            $table->string('airport_name_in_tr_tr')->nullable();
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
        Schema::drop('airports');
    }
}
