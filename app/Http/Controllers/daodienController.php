<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daodien;

class daodienController extends Controller
{
    public function index(){
		$dsdaodien = daodien::all();
		
		return view('daodien.danhsachdaodien',[
			'dsdaodien' =>$dsdaodien,
		]);
	}
	
	public function show($id){
		$dsdaodien = daodien::findorfail($id);
		
		return view('daodien.suadaodien',['daodien' => $dsdaodien]);
	}
	
	public function create(){
	
	}
	
	public function store(){
		
		$daodien = new daodien();
		
		$daodien->tendaodien=request('tendaodien');
		$daodien->save();
		
		return redirect('/themdaodien')->with('message','Thêm thành công đạo diễn '.$daodien->tendaodien);
	}
	public function destroy($id){
		$daodien = daodien::findorfail($id);
		$daodien->delete();
		
		return redirect('danhsachdaodien')->with('message','Xoá thành công đạo diễn '.$daodien->tendaodien);
	}
	public function update($id){
		
		$daodien = daodien::findorfail($id);	
		$temp = $daodien->tendaodien;
		$daodien->tendaodien=request('tendaodien');
		$daodien->save();
		
		return redirect('/danhsachdaodien')->with('message','Sửa thành công đạo diễn '.$temp.' thành ' .$daodien->tendaodien);
	}
}
