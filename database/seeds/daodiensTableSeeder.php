<?php

use Illuminate\Database\Seeder;
use App\daodien;
//use Illuminate\Support\Facades\DB;	


class daodiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for ($i = 1 ; $i<4	 ; $i++){
			DB::table('daodiens')->insert([
				'tendaodien'=>'Đạo diễn '.$i,
			]);
		}
    }
}
