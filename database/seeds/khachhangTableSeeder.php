<?php

use Illuminate\Database\Seeder;

class khachhangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('khachhangs')->insert([
				'taikhoan'=>'taikhoana',
				'matkhau'=>'matkhaua',
				'hoten'=>'Nguyễn Văn A',
			]);
			DB::table('khachhangs')->insert([
				'taikhoan'=>'taikhoanb',
				'matkhau'=>'matkhaub',
				'hoten'=>'Nguyễn Văn B',
			]);
			DB::table('khachhangs')->insert([
				'taikhoan'=>'taikhoanc',
				'matkhau'=>'matkhauc',
				'hoten'=>'Nguyễn Văn C',
			]);
		}
    }

