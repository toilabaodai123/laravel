<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaighe;

class loaigheController extends Controller
{
     public function index(){
		$dsloaighe = loaighe::all();
		
		return view('loaighe.danhsachloaighe',[
			'dsloaighe' =>$dsloaighe,
		]);
	}
	public function store(){
		
		$dsloaighe = new loaighe();
		
		$dsloaighe->tenloaighe=request('tenloaighe');
		$dsloaighe->save();
		
		return redirect('/themloaighe')->with('message','Thêm thành công loại ghế '.$dsloaighe->tenloaighe);
	}
	
	
	public function show($id){
		$dsloaighe = loaighe::findorfail($id);
		
		return view('loaighe.sualoaighe',['dsloaighe' => $dsloaighe]);
	}
	
	public function update($id){
		
		$dsloaighe = loaighe::findorfail($id);	
		$temp = $dsloaighe->tenloaighe;
		$dsloaighe->tenloaighe=request('tenloaighe');
		$dsloaighe->save();
		
		return redirect('/danhsachloaighe')->with('message','Sửa thành công loại ghế '.$temp);
	}
	public function destroy($id){
		$dsloaighe = loaighe::findorfail($id);
		$dsloaighe->delete();
		
		return redirect('danhsachloaighe')->with('message','Xoá thành công loại ghế'.$dsloaighe->tenloaighe);
	}
}
