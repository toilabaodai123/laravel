<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phim;
use App\ghe;
use App\xuatchieu;
use App\khachhang;
use App\ve;
use App\thoigianghe;
use DB;

class taovequaphimController extends Controller
{
    public function index($id){
		$dsphim = phim::findorfail($id);
		//dd($dsphim);
		$dsghe = ghe::all();
		$dsxuatchieu = xuatchieu::all();
		$dskhachhang = khachhang::all();
		
		//return view ('ve.themvequaphim',compact('dsphim','dsghe','dsxuatchieu','dskhachhang'));
		return redirect('ve.themvequaphim',compact('dsphim','dsghe','dsxuatchieu','dskhachhang'))->with('message','Thêm thành công vé');
	}
	
	public function store(){
		$dsve = new ve();
		$dsve->phim=request('phim');
		$dsve->ghe=request('ghe');
		$dsve->xuatchieu=request('xuatchieu');
		$dsve->khachhang=request('khachhang');
		$dsxuatchieu = xuatchieu::get('dmy');
		$dsthoigianghe = new thoigianghe();
		$abc = xuatchieu::where('id',$dsve->xuatchieu)->get('gio');
		$lol = 0; 
		
	
		foreach ($abc as $a){$lol = $a->gio;}
		//dd($lol);
		//{
		//	$lol = $a->gio;
		//};
		$test = DB::table('xuatchieus')
				  ->select('dmy')
				  ->where('id','=',$dsve->xuatchieu)
				  ->get();
		foreach($test as $a){
			$dsthoigianghe->thoigian= $a->dmy;
		}
		$dsthoigianghe->gio= $lol;
		$dsthoigianghe->ghe=request('ghe');
		$dsthoigianghe->phim=request('phim');
		$datathoigianghe = thoigianghe::all();
		$dataghe = ghe::all();
		$dataghe2 = ghe::where('id',$dsve->ghe)->get();
		//$datathoigianghe2 = thoigianghe::where('id',$dsve->xuatchieu)->get();
		$data4 = xuatchieu::where('id',$dsve->xuatchieu)->get();
		//dd($data4);
		$a = '';
		$b = '';
		foreach($dataghe2 as $data){$b = $data->id;}
		//dd($b);
		foreach($data4 as $data){$a = $data->dmy;}
		//dd($a);
		foreach($datathoigianghe as $data){
			//dd($data->thoigian.'>>>>>>>'.$a);
			if($data->thoigian == $a && $data->ghe==$dsve->ghe){
				return redirect('/themvequaphim/'.$dsve->phim)->with('message','Ghế đã có người đặt');
			}
			else{
				continue;
			}
		}	


		
		$dsthoigianghe->save();
		$dsve->save();
		return redirect('/themvequaphim/'.$dsve->phim)->with('message','Thêm thành công vé');
		}
	

}
