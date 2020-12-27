<?php

use Illuminate\Database\Seeder;

class loaiphimTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	DB::table('loaiphims')->insert([
				'tenloaiphim'=>'Hài hước',
			]);
			DB::table('loaiphims')->insert([
				'tenloaiphim'=>'Kinh dị',
			]);
			DB::table('loaiphims')->insert([
				'tenloaiphim'=>'Viễn tưởng',
			]);
    }
}
