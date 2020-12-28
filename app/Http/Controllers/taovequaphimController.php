<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phim;
use App\ghe;
use App\xuatchieu;
use App\khachhang;
use App\ve;
use App\thoigianghe;
use App\loaighe;
use App\chitietve;
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
		
		
		
		$valid = request()->validate([
			'ghe'=>'required',
		],[
			'ghe.required' => "Chưa chọn ghế!",
		]);
		
		
		
		$dsve = new ve();
		$dsve->phim=request('phim');
		//$dsve->ghe=request('ghe');
		$a=request('ghe');
		//dd($a);
		
		$dsve->xuatchieu=request('xuatchieu');
		$dsve->khachhang=request('khachhang');
		$dsxuatchieu = xuatchieu::get('dmy');
		
		$abc = xuatchieu::where('id',$dsve->xuatchieu)->get('gio');
		$lol = 0; 
/* 		
		$datagiatien1 = phim::where('id',$dsve->phim)->get();
		$xx ='';
		foreach($datagiatien1 as $data)$xx = $data->giaphim;//giá phim
		//dd($xx);
		$datagiatien2 = ghe::where('id',$dsve->ghe)->get();
		$x = '';
		foreach($datagiatien2 as $a);//lấy id loại ghế
		{$x = $a->loaighe;};
		
		//dd($x);
		$datagiatien22 = loaighe::where('id',$x)->get();
		//dd($datagiatien22);	
		$xxx = '';
		//foreach($datagiatien22 as $a)$xxx = $a->giaghe;//giá ghế
		//dd($xxx);
		
		$datagiatien3 = xuatchieu::where('id',$dsve->xuatchieu)->get();//giá xuất chiếu
		$xxxx = '';
		foreach($datagiatien3 as $a)$xxxx = $a->giaxuatchieu;
		//dd($xxxx);
		
		$tongtien = $xx+  $xxx + $xxxx;
		
		$dsve->tongtienve=$tongtien; */
				
		//$ctvtienphim = phim::where('id',$dsve->phim)->get('giaphim');

		//$dsthoigianghe->ghe=request('ghe');

		$datathoigianghe = thoigianghe::all();
		$dsve->rap=request('rap');
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
		$a = request('ghe');
/* 		//dd($a);
		$b=0;
		foreach($a as &$c){
			$b++;
		}
		dd($b); */
		
		$idve = 0;
		$abc = count($data = ve::all());
		//dd($abc);
		if($abc>0){
			$dataidve1 = ve::all()->last()->get();
			foreach($dataidve1 as $id){$idve = $id->id;};
			$idve = $idve +1;
			}
		else
			$idve=1;
		//dd($dataidve1);
		/* $test=0;
		foreach($dataidve1 as $a)
		{
			dd($a->id);
			$test = $a->id;
		} */
		//dd$
		
		//$dataidve2 = end($dataidve1);
		//dd($a);
		//}
		//dd(count($a));
		$dem=0;
		//dd($a);
		foreach((array)$a as &$d){
			foreach($datathoigianghe as $data){
				if( $data->ghe == $d&&  $data->thoigian == $dsve->xuatchieu && $data->phim == $dsve->phim&& $data->rap == $dsve->rap){
					return redirect('/themvequaphim/'.$dsve->phim)->with('message','Ghế có id '.$d .' đãcó người đặt');
				break;}
				else{
					continue;
					
				}
		}					$dem++;}
		//dd($dem);
		if($dem == count($a)){
			foreach((array)$a as &$d){
		//dd($dem);
		$dsthoigianghe = new thoigianghe();
		$dsthoigianghe->thoigian=request('xuatchieu');
		$dsthoigianghe->phim=request('phim');
		$dsthoigianghe->rap=request('rap');
		$dsthoigianghe->ghe=$d;
		$dschitietve = new chitietve();
		$dschitietve->idve = $idve;
		$dschitietve->idphim = $dsve->phim;
		$dschitietve->idrap = $dsve->rap;
		$dschitietve->idghe = $d;
		
		//tiền phim
		$ctvtienphim1 = phim::where('id',$dsve->phim)->get();
		$ctvtien1 = 0;
		foreach($ctvtienphim1 as $a){$ctvtien1 = $a->giaphim;};
		//dd($ctvtien1);
		$ctvtienphim2 = ghe::where('id',$d)->get();
		$loaighe=0;
		foreach($ctvtienphim2 as $a){$loaighe = $a->loaighe;};
		//dd($ctvtienphim2);
		$ctvtienphim2b = loaighe::where('id',$loaighe)->get();
		//dd($ctvtienphim2b);
		$ctvtien2 = 0 ;
		foreach($ctvtienphim2b as $a){$ctvtien2 = $a->giaghe;};
		//dd($ctvtien2);
		$ctvtienphim3 = xuatchieu::where('id',$dsve->xuatchieu)->get();
		$ctvtien3=0;
		foreach($ctvtienphim3 as $a){$ctvtien3 = $a->giaxuatchieu;};
		//dd($ctvtien3.'gia xuat chieu');
		$tongtienctv = $ctvtien1 + $ctvtien2 + $ctvtien3;
		//dd($tongtienctv);
		
		$dschitietve->tongtienchitiet=$tongtienctv;
		//dd($tongtienctv);
		$dsthoigianghe->save();
		$dschitietve->save();
		continue;
		}}
		else
			return redirect('/themvequaphim/'.$dsve->phim)->with('message','Ghế có id '.$d .' đãcó người đặt');
		
/* 		foreach($datathoigianghe as $data){
		if($data->thoigian == $dsve->xuatchieu && $data->ghe == $dsve->ghe && $data->phim == $dsve->phim&& $data->rap == $dsve->rap)
			return redirect('/themvequaphim/'.$dsve->phim)->with('message','Ghế đã có người đặt');
		else
			continue;
		} */
		
		$dsvetien1 = chitietve::where('idve',$idve)->get();
		//dd($dsvetien1);
		$tong =0;
		foreach($dsvetien1 as $a){$tong = $tong + $a->tongtienchitiet;};
		$dsve->tongtienve=$tong;
		$dsve->save();
		
		

		
		
		return redirect('/themvequaphim/'.$dsve->phim)->with('message','Thêm thành công vé');}
		
		
	

}
