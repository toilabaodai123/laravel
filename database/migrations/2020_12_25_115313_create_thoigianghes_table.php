<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThoigianghesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thoigianghes', function (Blueprint $table) {
            $table->id();
			$table->date('thoigian');
			$table->biginteger('ghe')->unsigned();
			$table->foreign('ghe')
				  ->references('id')
				  ->on('ghes');
			$table->biginteger('phim')->unsigned();
			$table->foreign('phim')
				  ->references('id')
				  ->on('phims');
			$table->integer('gio');
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
        Schema::dropIfExists('thoigianghes');
    }
}
