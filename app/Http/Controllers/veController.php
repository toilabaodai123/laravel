<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ve;
use App\phim;
use App\ghe;
use App\xuatchieu;
use DB;

class veController extends Controller
{
    public function index(){
		
		$dsve = ve::all();
		$dsphim = phim::all();
		$dsghe = ghe::all();
		$dsxuatchieu = xuatchieu::all();
		$test = DB::table('ves')
				->join('phims','ves.phim','phims.id')
				->join('ghes','ves.ghe','ghes.id')
				->join('xuatchieus','ves.xuatchieu','xuatchieus.id')
				->select('ves.id','phims.tenphim','ghes.tenghe','xuatchieus.dmy','xuatchieus.gio')
				->get();
				
		return view('ve.danhsachve',
		compact('dsve','dsphim','dsghe','dsxuatchieu','test'));

	}
	
	public function show($id){
		$dsve = ve::findorfail($id);
		
		
		$dsphim = phim::where('id',$dsve->phim)->get();
		$dsphim2 = phim::all();
		$dsghe = ghe::where('id',$dsve->ghe)->get();
		$dsghe2 = ghe::all();
		$dsxuatchieu = xuatchieu::where('id',$dsve->xuatchieu)->get();
		$dsxuatchieu2 = xuatchieu::all();
		
		return view('ve.suave',
		compact('dsve','dsphim','dsghe','dsxuatchieu','dsphim2','dsghe2','dsxuatchieu2'));
	}
	
		public function store(){
		$dsve = new ve();
		$dsve->phim=request('phim');
		$dsve->ghe=request('ghe');
		$dsve->xuatchieu=request('xuatchieu');
		

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
}
