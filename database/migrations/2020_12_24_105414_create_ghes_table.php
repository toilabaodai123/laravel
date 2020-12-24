<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghes', function (Blueprint $table) {
            $table->id();
			$table->string('tenghe');
			//$table->bigint('xuatchieughe')->unsigned();
			$table->biginteger('loaighe')->unsigned();
			$table->foreign('loaighe')
				  ->references('id')
				  ->on('loaighes');
			$table->biginteger('tenrap')->unsigned();
			$table->foreign('tenrap')
				  ->references('id')
				  ->on('raps');
			
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
        Schema::dropIfExists('ghes');
    }
}
