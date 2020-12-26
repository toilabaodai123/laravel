<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ves', function (Blueprint $table) {
            $table->id();
			$table->biginteger('phim')->unsigned();
			$table->string('khachhang');
			$table->foreign('khachhang')
				  ->references('taikhoan')
				  ->on('khachhangs');
			$table->foreign('phim')
				  ->references('id')
				  ->on('phims');
			$table->biginteger('ghe')->unsigned();
			$table->foreign('ghe')
				  ->references('id')
				  ->on('ghes');
			$table->biginteger('xuatchieu')->unsigned();
			$table->foreign('xuatchieu')
				  ->references('id')
				  ->on('xuatchieus');
			$table->biginteger('rap')->unsigned();
			$table->foreign('rap')
				  ->references('id')
				  ->on('raps');
			$table->integer('tongtienve');
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
        Schema::dropIfExists('ves');
    }
}
