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
		
	

		$dsthoigianghe->thoigian=request('xuatchieu');
		$dsthoigianghe->ghe=request('ghe');
		$dsthoigianghe->phim=request('phim');
		$datathoigianghe = thoigianghe::all();
		$a='';
		$dataphim = phim::where('id',$dsve->phim)->get();
		
		
		foreach($dataphim as $phim){$a = $phim->id;};
		
		$b='';
		$dataghe = ghe::where('id',$dsve->ghe)->get();
		foreach($dataghe as $ghe){$b = $ghe->id;};
		$c='';
		$dataxuatchieu = xuatchieu::where('id',$dsve->xuatchieu)->get();
		foreach($dataxuatchieu as $xuatchieu){$c = $xuatchieu->id;};
		//dd($c.'=========='.$dsve->xuatchieu);
		foreach($datathoigianghe as $data){
		if($data->thoigian == $dsve->xuatchieu && $data->ghe == $dsve->ghe && $data->phim == $dsve->phim)
			return redirect('/themvequaphim/'.$dsve->phim)->with('message','Ghế đã có người đặt');
		else
			continue;
		}

		
		$dsthoigianghe->save();
		$dsve->save();
		return redirect('/themvequaphim/'.$dsve->phim)->with('message','Thêm thành công vé');
		}
	

}
