<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call([daodiensTableSeeder::class]);
		$this->call([rapTableSeeder::class]);
        $this->call([khachhangTableSeeder::class]);
		$this->call([loaiphimTableSeeder::class]);
		$this->call([loaigheTableSeeder::class]);
		
		// $this->call(UserSeeder::class);
    }
}
