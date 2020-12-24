<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaiphim;

class loaiphimController extends Controller
{
    public function index(){
		$dsloaiphim = loaiphim::all();
		
		return view('loaiphim.danhsachloaiphim',[
			'dsloaiphim' =>$dsloaiphim,
		]);
	}
	
	public function show($id){
		$dsloaiphim = loaiphim::findorfail($id);
		
		return view('loaiphim.sualoaiphim',['dsloaiphim' => $dsloaiphim]);
	}
	
	
	
	public function store(){
		
		$loaiphim = new loaiphim();
		
		$loaiphim->tenloaiphim=request('tenloaiphim');
		$loaiphim->save();
		
		return redirect('/themloaiphim')->with('message','Thêm thành công loai phim '.$loaiphim->tenloaiphim);
	}
	public function destroy($id){
		$dsloaiphim = loaiphim::findorfail($id);
		$dsloaiphim->delete();
		return redirect('/danhsachloaiphim')->with('message','Xoá thành công loai phim '.$dsloaiphim->tenloaiphim);
		
	}
	
	public function update($id){
		
		$loaiphim = loaiphim::findorfail($id);	
		$temp = $loaiphim->tenloaiphim;
		$loaiphim->tenloaiphim=request('tenloaiphim');
		$loaiphim->save();
		
		return redirect('/danhsachloaiphim')->with('message','Sửa thành công loại phim '.$temp.' thành ' .$loaiphim->tenloaiphim);
	}
}
