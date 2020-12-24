<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXuatchieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuatchieus', function (Blueprint $table) {
            $table->id();
			$table->integer('gio');
			$table->date('dmy');
			$table->BigInteger('phim')->unsigned();
			$table->foreign('phim')
				  ->references('id')
				  ->on('phims');
			
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
        Schema::dropIfExists('xuatchieus');
    }
}
