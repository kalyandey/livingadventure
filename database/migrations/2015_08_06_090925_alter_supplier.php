<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('suppliers', function(Blueprint $table)
		{			
			$table->integer('parent_id')->unsigned()->after('id')->default(0);			
			$table->foreign('parent_id')->references('id')->on('suppliers');
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
