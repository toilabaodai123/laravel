<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thoigianghe;
use App\phim;
use App\ghe;
use App\xuatchieu;
use App\rap;
use DB;

class thoigiangheController extends Controller
{
    public function index(){
		
		$dsthoigianghe = thoigianghe::all();	
		$dsphim = phim::all();
		$dsghe = ghe::all();
		$dsrap = rap::all();
		$dsxuatchieu = xuatchieu::all();
		$test2=thoigianghe::all();
		//dd($test2);
		$test = DB::table('thoigianghes')
				->join('phims','thoigianghes.phim','phims.id')
				->join('ghes','thoigianghes.ghe','ghes.id')
				->join('xuatchieus','thoigianghes.thoigian','xuatchieus.id')
				->join('raps','thoigianghes.rap','raps.id')
				->select('thoigianghes.id','phims.tenphim','ghes.tenghe','xuatchieus.dmy','xuatchieus.dmy','xuatchieus.gio','raps.tenrap')
				->get();
		//dd($test);
		
			
			return view('thoigianghe.danhsachthoigianghe',
			compact('dsthoigianghe','dsphim','dsghe','dsxuatchieu','test'));
		
		

	}
}
