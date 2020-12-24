<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phim extends Model
{
	public function loaiphim(){
		return $this->hasOne('App\loaiphim','tenloaiphim','id');
		return $this->hasOne('App\daodien','tendaodien','id');
	}
}
