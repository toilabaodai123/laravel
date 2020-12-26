<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phim;
use App\loaiphim;
use App\daodien;
use DB;

class phimController extends Controller
{
	
	public function test(){
		
	}
	
	
	
	
	
	
	
	
	
	
	
    public function index(){
		$dsphim = phim::all();
		$dsdaodien = daodien::all();
		$dsloaiphim = loaiphim::all();
		$test = DB::table('phims')
				->join('loaiphims','phims.tenloaiphim','loaiphims.id')
				->join('daodiens','phims.tendaodien','daodiens.id')
				->select('phims.id','phims.tenphim','loaiphims.tenloaiphim','daodiens.tendaodien')
				->get();
				
		return view('phim.danhsachphim',
		compact('dsphim','dsdaodien','dsloaiphim','test'));

	}
	
	public function show($id){
		$dsphim = phim::findorfail($id);
		
		
		$dsloaiphim = loaiphim::where('id',$dsphim->tenloaiphim)->get();
		$dsloaiphim2 = loaiphim::all();
		$dsdaodien = daodien::where('id',$dsphim->tendaodien)->get();
		$dsdaodien2 = daodien::all();
		return view('phim.suaphim',
		compact('dsphim','dsloaiphim','dsdaodien','dsloaiphim2','dsdaodien2'));
	}
	public function store(){
		
		$valid = request()->validate([
			'tenphim'=>'required',
			'tenloaiphim'=>'required',
			'tendaodien' => 'required'
		],[
			'tenphim.required' => "Chưa nhập tên phim!",
			
			'tenloaiphim.required' => "Chưa nhập loại phim!",
			
			'tendaodien.required' => "Chưa nhập đạo diễn!",
		]);
		
		
		
		
		
		
		
		
		
		$phim = new phim();
		$phim->tenphim=request('tenphim');
		$phim->tenloaiphim=request('tenloaiphim');
		$phim->tendaodien=request('tendaodien');
		$phim->save();
		
		return redirect('/themphim')->with('message','Thêm thành công phim '.$phim->tenphim);
	}
	
	public function destroy($id){
		$phim = phim::findorfail($id);
		
		$phim->delete();
		return redirect('/danhsachphim')->with('message','Xoá thành công phim '.$phim->tenphim);
	}
	
	public function update($id){
		
		$phim = phim::findorfail($id);	
		$temp = $phim->tenphim;
		$phim->tenloaiphim=request('tenloaiphim');
		$phim->tenphim=request('tenphim');
		$phim->tendaodien=request('tendaodien');
		$phim->save();
		
		return redirect('/danhsachphim')->with('message','Sửa thành công phim '.$temp.' thành ' .$phim->tenphim);
	}
}
