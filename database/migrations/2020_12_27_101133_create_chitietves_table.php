<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietves', function (Blueprint $table) {
            $table->id();
			$table->biginteger('idve')->unsigned();
/* 			$table->foreign('idve')
				  ->references('id')
				  ->on('ves'); */
			$table->biginteger('idphim')->unsigned();
			/* $table->foreign('idphim')
				  ->references('id')
				  ->on('phims'); */
			$table->biginteger('idghe')->unsigned();
			/* $table->foreign('idghe')
				  ->references('id')
				  ->on('ghes'); */
			$table->biginteger('idrap')->unsigned();
			/* $table->foreign('idrap')
				  ->references('id')
				  ->on('raps'); */
					
			$table->integer('tongtienchitiet');
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
        Schema::dropIfExists('chitietves');
    }
}
