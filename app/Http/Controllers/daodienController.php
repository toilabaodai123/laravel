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
	
	
	public function message(){
		return [
			'tendaodien.required' => " Nhập tên đạo diễn!"
		];
	}
	
	public function store(){
		
		$valid = request()->validate([
			'tendaodien'=>'required|alpha'
		],[
			'tendaodien.required' => "Chưa nhập tên đạo diễn!",
			'tendaodien.alpha' => "Tên đạo diễn chỉ chứa ký tự thường!"
		]);
		
		
		
		$daodien = new daodien();
		$bro = daodien::all();
		$daodien->tendaodien=request('tendaodien');
		$a = daodien::where('tendaodien',$daodien->tendaodien)->get();
		foreach($a as $b){
			if($b->tendaodien != $daodien->tendaodien)
				continue;
		else{
			return redirect('/themdaodien')->with('message','Tồn tại đạo diễn '.$daodien->tendaodien);}
		}
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
