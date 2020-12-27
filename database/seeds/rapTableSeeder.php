<?php

use Illuminate\Database\Seeder;

class rapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i<4 ; $i++){
			DB::table('raps')->insert([
				'tenrap'=>'Rạp'.$i,
			]);
		}
    }
}
