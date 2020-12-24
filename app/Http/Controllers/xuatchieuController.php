<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\xuatchieu;
use App\phim;
use DB;

class xuatchieuController extends Controller
{
    public function index(){
		$dsxuatchieu = xuatchieu::all();
		$dsphim = phim::all();
		$test = DB::table('xuatchieus')
				->join('phims','xuatchieus.phim','phims.id')
				->select('xuatchieus.id','phims.tenphim','xuatchieus.dmy','xuatchieus.gio')
				->get();
				
		return view('xuatchieu.danhsachxuatchieu',
		compact('dsxuatchieu','dsphim','test'));

	}
	
	public function show($id){
		$dsxuatchieu = xuatchieu::findorfail($id);
		
		
		$dsphim = phim::where('id',$dsxuatchieu->phim)->get();
		$dsphim2 = phim::all();
		$test = DB::table('xuatchieus')
				->join('phims','xuatchieus.phim','phims.id')
				->select('xuatchieus.id','phims.tenphim','xuatchieus.dmy','xuatchieus.gio')
				->get();
		return view('xuatchieu.suaxuatchieu',
		compact('dsxuatchieu','dsphim','dsphim2','test'));
	}
	public function store(){
		$xuatchieu = new xuatchieu();
		$xuatchieu->phim=request('phim');
		$xuatchieu->dmy=request('dmy');
		$xuatchieu->gio=request('gio');
		$xuatchieu->save();
		
		return redirect('/themxuatchieu')->with('message','Thêm thành công xuất chiếu ');
	}
	
	public function update($id){
		
		$dsxuatchieu = xuatchieu::findorfail($id);	
		$dsxuatchieu->phim=request('phim');
		$dsxuatchieu->dmy=request('dmy');
		$dsxuatchieu->gio=request('gio');
		$dsxuatchieu->save();
		
		return redirect('/danhsachxuatchieu')->with('message','Sửa thành công xuất chiếu');
	}
	
	public function destroy($id){
		$dsxuatchieu = xuatchieu::findorfail($id);
		
		$dsxuatchieu->delete();
		return redirect('/danhsachxuatchieu')->with('message','Xoá thành công xuất chiếu');
	}
}
