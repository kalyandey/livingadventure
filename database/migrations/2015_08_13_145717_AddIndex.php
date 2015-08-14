<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('countries', function (Blueprint $table) {
            
            $table->index('country_code');
            $table->index('country_name');
            $table->index('iseurope');
        });
        Schema::table('airlines', function (Blueprint $table) {
            $table->index('airline_code');
            $table->index('airline_name');
            $table->index('active');
        });
        Schema::table('airports', function (Blueprint $table) {
            $table->index('country_code');
            $table->index('city_code');
            $table->index('airport_code');
            $table->index('active');
            
           // $table->foreign('country_code')->references('country_code')->on('countries')->onDelete('restrict');
           // $table->foreign('city_code')->references('city_code')->on('cities')->onDelete('restrict');
            
        });
        Schema::table('cities', function (Blueprint $table) {
            
            $table->index('country_code');
            $table->index('city_code');
            $table->index('city_name');
            $table->index('active');
            
            //$table->foreign('country_code')->references('country_code')->on('countries')->onDelete('restrict');
            
        });
        
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('countries', function (Blueprint $table) {
            
            $table->dropIndex('country_code_index');
            $table->dropIndex('country_name_index');
            $table->dropIndex('iseurope_index');
        });
        Schema::table('airlines', function (Blueprint $table) {
            $table->dropIndex('airline_code_index');
            $table->dropIndex('airline_name_index');
        });
        Schema::table('airports', function (Blueprint $table) {
            $table->dropIndex('country_code_index');
            $table->dropIndex('city_code_index');
            $table->dropIndex('airport_code_index');
            
            //$table->dropForeign('country_code_foreign');
            //$table->dropForeign('city_code_foreign');
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->dropIndex('country_code_index');
            $table->dropIndex('city_code_index');
            $table->dropIndex('city_name_index');
            $table->dropIndex('active_index');
            
           // $table->dropForeign('city_code_foreign');
        });
    }
}
