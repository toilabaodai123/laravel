<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ghe;
use App\loaighe;
use App\rap;
use DB;

class gheController extends Controller
{
    public function index(){
		$dsghe = ghe::all();
		$dsloaighe = loaighe::all();
		$dsrap = rap::all();
		$test = DB::table('ghes')
				->join('raps','ghes.rap','raps.id')
				->join('loaighes','ghes.loaighe','loaighes.id')
				->select('ghes.id','ghes.tenghe','loaighes.tenloaighe','raps.tenrap','loaighes.giaghe')
				->get();
				
		return view('ghe.danhsachghe',
		compact('dsghe','dsloaighe','dsrap','test'));

	}
	public function show($id){
		$dsghe = ghe::findorfail($id);
		
		
		$dsloaighe = loaighe::where('id',$dsghe->tenloaighe)->get();
		$dsloaighe2 = loaighe::all();
		$dsrap = rap::where('id',$dsghe->rap)->get();
		$dsrap2 = rap::all();
		return view('ghe.suaghe',
		compact('dsghe','dsloaighe','dsrap','dsloaighe2','dsrap2'));
	}
	
	public function store(){
		
		
		$valid = request()->validate([
			'tenghe'=>'required',
			'loaighe'=>'required',
			'rap' => 'required'
		],[
			'tenghe.required' => "Chưa nhập tên ghế!",
			
			'loaighe.required' => "Chưa chọn loại ghế!",
			
			'rap.required' => "Chưa chọn rạp!",
		]);
		
		
		$a = 'a';
		//dd(strtoupper($a));
		
		$ghe = new ghe();
		$ghe->tenghe=request('tenghe');
		$ghe->loaighe=request('loaighe');
		$ghe->rap=request('rap');
		
		
		$data1 = ghe::all();
		foreach($data1 as $data){
			$b = strtoupper($data->tenghe);
			$bb = strtoupper($ghe->tenghe);
			if($b == $bb){
			return redirect('/themghe')->with('message','Đã tồn tại ghế '.$ghe->tenghe);}
			else
				continue;
		}
		
		
		$ghe->save();
		
		return redirect('/themghe')->with('message','Thêm thành công ghế '.$ghe->tenghe);
	}
	
	public function update($id){
		
		$ghe = ghe::findorfail($id);	
		$temp = $ghe->tenghe;
		$ghe->tenghe=request('tenghe');
		$ghe->loaighe=request('loaighe');
		$ghe->rap=request('rap');
		$ghe->save();
		
		return redirect('/danhsachghe')->with('message','Sửa thành công ghế '.$temp);
	}
	
	public function destroy($id){
		$ghe = ghe::findorfail($id);
		
		$ghe->delete();
		return redirect('/danhsachghe')->with('message','Xoá thành công ghế '.$ghe->tenghe);
	}
}
