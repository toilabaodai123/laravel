<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khachhang;

class khachhangController extends Controller
{
   public function index(){
		$dskhachhang = khachhang::all();
		
		return view('khachhang.danhsachkhachhang',[
			'dskhachhang' =>$dskhachhang,
		]);
	}
	
	
	public function show($id){
		$dskhachhang = khachhang::findorfail($id);
		
		return view('khachhang.suakhachhang',['khachhang' => $dskhachhang]);
	}
	
	public function store(){
		
		$valid = request()->validate([
			'taikhoan'=>'required|alpha|min:5|max:20',
			'matkhau'=>'required|alpha',
			'hoten' => 'required|alpha'
		],[
			'taikhoan.required' => "Chưa nhập tài khoản!",
			'taikhoan.alpha' => "Tên loại phim chỉ chứa KÝ TỰ CHỮ thường!",
			'taikhoan.min' => "Tài khoản phải chứa ít nhất 5 KÝ TỰ" ,
			'taikhoan.max' => "Tài khoản không được quá 20 KÝ TỰ",
			
			'matkhau.required' => "Chưa nhập mật khẩu!",
			'matkhau.alpha' => "Mật khẩu chỉ chứa KÝ TỰ CHỮ thường!",
			
			'hoten.required' => "Chưa nhập họ tên!",
			'hoten.alpha' => "Họ tên chỉ chứa KÝ TỰ CHỮ thường!",
		]);
		
		
		
		$khachhang = new khachhang();
		$khachhang->taikhoan=request('taikhoan');
		$khachhang->matkhau=request('matkhau');
		$khachhang->hoten=request('hoten');
		$khachhang->save();
		
		return redirect('/themkhachhang')->with('message','Thêm thành công khách hàng '.$khachhang->hoten);
	}
	
	public function update($id){
		
		$khachhang = khachhang::findorfail($id);
		$temp = $khachhang->taikhoan;
		$khachhang->taikhoan=request('taikhoan');
		$khachhang->matkhau=request('matkhau');
		$khachhang->hoten=request('hoten');
		$khachhang->save();
		
		return redirect('/danhsachkhachhang')->with('message','Sửa thành công tài khoản '.$temp);
	}
	
	public function destroy($id){
		$dskhachhang = khachhang::findorfail($id);
		$dskhachhang->delete();
		
		return redirect('danhsachkhachhang')->with('message','Xoá thành công khachhang '.$dskhachhang->hoten);
	}
}
