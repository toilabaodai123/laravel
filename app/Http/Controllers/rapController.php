<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rap;

class rapController extends Controller
{
    public function index(){
		$dsrap = rap::all();
		
		return view('rap.danhsachrap',[
			'dsrap' =>$dsrap,
		]);
	}
	
	public function store(){
		
		$dsrap = new rap();
		
		$dsrap->tenrap=request('tenrap');
		$dsrap->save();
		
		return redirect('/themrap')->with('message','Thêm thành công rạp '.$dsrap->tenrap);
	}
	public function show($id){
		$dsrap = rap::findorfail($id);
		
		return view('rap.suarap',['dsrap' => $dsrap]);
	}
	public function update($id){
		
		$dsrap = rap::findorfail($id);	
		$temp = $dsrap->tenrap;
		$dsrap->tenrap=request('tenrap');
		$dsrap->save();
		
		return redirect('/danhsachrap')->with('message','Sửa thành công rạp '.$temp);
	}
	
	public function destroy($id){
		$dsrap = rap::findorfail($id);
		$dsrap->delete();
		
		return redirect('danhsachrap')->with('message','Xoá thành công rạp'.$dsrap->tenrap);
	}
	
}
