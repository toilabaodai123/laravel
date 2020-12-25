<?php	

use Illuminate\Support\Facades\Route;
use App\phim;
use App\daodien;
use App\loaiphim;	
use App\ghe;
use App\loaighe;
use App\rap;
use App\xuatchieu;
use App\ve;
use App\khachhang;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('layouts/index1');
});
Route::get('/themdaodien', function () {
    return view('daodien.themdaodien');
});


Route::get('/danhsachdaodien','daodienController@index');
Route::get('/daodien/create','daodienController@create');
Route::post('/danhsachdaodien','daodienController@store');
Route::delete('/daodien/{id}','daodienController@destroy');
Route::put('/daodien/{id}','daodienController@update');
Route::get('/daodien/{id}','daodienController@show');


Route::get('/themloaiphim', function () {
    return view('loaiphim.themloaiphim');
});
Route::get('danhsachloaiphim','loaiphimController@index');
Route::post('/danhsachloaiphim','loaiphimController@store');
Route::delete('/loaiphim/{id}','loaiphimController@destroy');
Route::put('/loaiphim/{id}','loaiphimController@update');
Route::get('/loaiphim/{id}','loaiphimController@show');



Route::get('/themphim', function () {
	$dsphim = phim::all();
	$dsloaiphim = loaiphim::all();
	$dsdaodien = daodien::all();
    return view('phim.themphim',compact('dsphim','dsloaiphim','dsdaodien'));
});
Route::get('danhsachphim','phimController@index');
Route::post('/danhsachphim','phimController@store');
Route::get('/phim/{id}','phimController@show');
Route::delete('/phim/{id}','phimController@destroy');
Route::put('/phim/{id}','phimController@update');



Route::get('/themkhachhang', function () {
    return view('khachhang.themkhachhang');
});
Route::get('danhsachkhachhang','khachhangController@index');
Route::get('/khachhang/{id}','khachhangController@show');
Route::post('/danhsachkhachhang','khachhangController@store');
Route::delete('/khachhang/{id}','khachhangController@destroy');
Route::put('/khachhang/{id}','khachhangController@update');


Route::get('/themrap', function () {
    return view('rap.themrap');
});
Route::get('danhsachrap','rapController@index');
Route::get('/rap/{id}','rapController@show');
Route::post('/danhsachrap','rapController@store');
Route::put('/rap/{id}','rapController@update');
Route::delete('/rap/{id}','rapController@destroy');



Route::get('/themloaighe', function () {
    return view('loaighe.themloaighe');
});
Route::get('danhsachloaighe','loaigheController@index');
Route::get('/loaighe/{id}','loaigheController@show');
Route::post('/danhsachloaighe','loaigheController@store');
Route::put('/loaighe/{id}','loaigheController@update');
Route::delete('/loaighe/{id}','loaigheController@destroy');


Route::get('/themghe', function () {
	$dsghe = ghe::all();
	$dsloaighe = loaighe::all();
	$dsrap = rap::all();
    return view('ghe.themghe',compact('dsghe','dsloaighe','dsrap'));
});
Route::get('danhsachghe','gheController@index');
Route::get('/ghe/{id}','gheController@show');
Route::post('/danhsachghe','gheController@store');
Route::put('/ghe/{id}','gheController@update');
Route::delete('/ghe/{id}','gheController@destroy');




Route::get('/themxuatchieu', function () {
	$dsxuatchieu = xuatchieu::all();
	$dsphim = phim::all();
    return view('xuatchieu.themxuatchieu',compact('dsphim'));
});
Route::get('danhsachxuatchieu','xuatchieuController@index');
Route::get('/xuatchieu/{id}','xuatchieuController@show');
Route::post('/danhsachxuatchieu','xuatchieuController@store');
Route::put('/xuatchieu/{id}','xuatchieuController@update');
Route::delete('/xuatchieu/{id}','xuatchieuController@destroy');




Route::get('/themve', function () {
	$dsve = ve::all();
	$dsphim = phim::all();
	$dsghe = ghe::all();
	$dsxuatchieu = xuatchieu::all();
	$dskhachhang=khachhang::all();
	
    return view('ve.themve',compact('dsve','dsphim','dsghe','dsxuatchieu','dskhachhang'));
});
Route::get('danhsachve','veController@index');
Route::get('/ve/{id}','veController@show');
Route::post('/danhsachve','veController@store');
Route::put('/ve/{id}','veController@update');
Route::delete('/ve/{id}','veController@destroy');


Route::get('/themthoigiange', function () {
    return view('thoigianghe.themthoigian');
});
Route::get('danhsachthoigianghe','thoigiangheController@index');

