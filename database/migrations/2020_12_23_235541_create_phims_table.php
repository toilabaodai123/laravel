<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phims', function (Blueprint $table) {
            $table->id();
			$table->string('tenphim');
			$table->biginteger('tenloaiphim')->unsigned();
			$table->foreign('tenloaiphim')
				  ->references('id')
				  ->on('loaiphims');
			$table->biginteger('tendaodien')->unsigned();
			$table->foreign('tendaodien')
				  ->references('id')
				  ->on('daodiens');
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
        Schema::dropIfExists('phims');
    }
}
