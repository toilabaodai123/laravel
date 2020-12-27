<?php

use Illuminate\Database\Seeder;

class loaigheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loaighes')->insert([
				'tenloaighe'=>'Thường',
				'giaghe'=>'0',
		]);
		DB::table('loaighes')->insert([
				'tenloaighe'=>'VIP',
				'giaghe'=>'20000',
		]);
		DB::table('loaighes')->insert([
				'tenloaighe'=>'Đôi',
				'giaghe'=>'30000',
		]);
    }
}
