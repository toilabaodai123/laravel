<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ve;
use App\phim;
use App\ghe;
use App\xuatchieu;
use DB;
use App\khachhang;
use App\thoigianghe;
use App\chitietve;
use App\rap;

class veController extends Controller
{
    public function index(){
		
		$dsve = ve::all();
		$tong = 0;
		foreach($dsve as $a)
			$tong = $tong + $a->tongtienve;
		
		
		
		
		
		
		
		
		$dsve = ve::all();
		$dsphim = phim::all();
		$dsghe = ghe::all();
		$dskhachhang=khachhang::all();
		$dsxuatchieu = xuatchieu::all();
		$test = DB::table('ves')
				->join('phims','ves.phim','phims.id')
				->join('xuatchieus','ves.xuatchieu','xuatchieus.id')
				->join('khachhangs','ves.khachhang','khachhangs.taikhoan')
				->select('ves.created_at','ves.id','phims.tenphim','xuatchieus.dmy','xuatchieus.gio','khachhangs.taikhoan','khachhangs.hoten','ves.tongtienve')
				->get();
			return view('ve.danhsachve',
			compact('dsve','dsphim','dsghe','dskhachhang','dsxuatchieu','test','tong'));
		

	}

	
	/* public function show($id){
		$dsve = ve::findorfail($id);
		
		$dskhachhang=khachhang::all();
		$dsphim = phim::where('id',$dsve->phim)->get();
		$dsphim2 = phim::all();
		$dsghe = ghe::where('id',$dsve->ghe)->get();
		$dsghe2 = ghe::all();
		$dsxuatchieu = xuatchieu::where('id',$dsve->xuatchieu)->get();
		$dsxuatchieu2 = xuatchieu::all();
		
		return view('ve.suave',
		compact('dsve','dsphim','dsghe','dsxuatchieu','dsphim2','dsghe2','dsxuatchieu2','dskhachhang'));
	} */
		public function show($id){
		$dsve = ve::findorfail($id);
		$dschitietve = chitietve::where('idve',$dsve->id)->get();
		$b='';
		//dd($dschitietve);
		foreach($dschitietve as $dschitietve2){
			$dataphim = phim::where('id',$dschitietve2->idphim)->get();
			$dataghe = ghe::where('id',$dschitietve2->idghe)->get();
			$datarap = rap::where('id',$dschitietve2->idrap)->get();
		}
		return view('ve.danhsachchitietve',
		compact('dschitietve','dschitietve2','dataphim','dataghe','datarap'));
		}
	
		public function store(){
			
			
			
			
			$valid = request()->validate([
			'phim'=>'required',
			'ghe'=>'required',
			'xuatchieu'=>'required',
			'khachhang'=>'required',
		],[
			'phim.required' => "Chưa chọn phim!",
			'ghe.required' => "Chưa chọn ghế!",
			'xuatchieu.required' => "Chưa chọn xuất chiếu!",
			'khachhang.required' => "Chưa chọn khách hàng!",

		]);
			
			
			
			
			
			
			
			
			
			
		$dsve = new ve();
		$dsve->phim=request('phim');
		$dsve->ghe=request('ghe');
		$dsve->xuatchieu=request('xuatchieu');
		$dsve->khachhang=request('khachhang');
		$dsxuatchieu = xuatchieu::get('dmy');
		$dsthoigianghe = new thoigianghe();
		$test = DB::table('xuatchieus')
				  ->select('dmy')
				  ->where('id','=',$dsve->xuatchieu)
				  ->get();
		foreach($test as $a){
			$dsthoigianghe->thoigian= $a->dmy;
		}
		
		
		
		
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
				return redirect('/themve')->with('message','Ghế đã có người đặt');
			}
			else{
				continue;
			}
		}	


		$dsthoigianghe->save();
		$dsve->save();
		return redirect('/themve')->with('message','Thêm thành công vé');
		
		}

	
	public function update($id){
		
		$dsve = ve::findorfail($id);	
		$dsve->phim=request('phim');
		$dsve->ghe=request('ghe');
		$dsve->xuatchieu=request('xuatchieu');
		$dsve->save();
		return redirect('/danhsachve')->with('message','Sửa thành công vé');
	}
	
	public function destroy($id){
		$dsve = ve::findorfail($id);
		
		$dsve->delete();
		return redirect('/danhsachve')->with('message','Xoá thành công vé');
	}
	public function ok($id){
		$dsve = ve::findorfail($id);
		
		$dskhachhang=khachhang::all();
		$dsphim = phim::where('id',$dsve->phim)->get();
		$dsphim2 = phim::all();
		$dsghe = ghe::where('id',$dsve->ghe)->get();
		$dsghe2 = ghe::all();
		$dsxuatchieu = xuatchieu::where('id',$dsve->xuatchieu)->get();
		$dsxuatchieu2 = xuatchieu::all();
		
		return view('ve.suave',
		compact('dsve','dsphim','dsghe','dsxuatchieu','dsphim2','dsghe2','dsxuatchieu2','dskhachhang'));
	}
}
