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
			$table->BigInteger('loaighe')->unsigned();
			$table->foreign('loaighe')
				  ->references('id')
				  ->on('loaighes');
			$table->BigInteger('rap')->unsigned();
			$table->foreign('rap')
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
