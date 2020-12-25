<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thoigianghe extends Model
{
    public function loaighe(){
		return $this->hasOne('App\ghe','ghe','id');
		return $this->hasOne('App\phim','phim','id');
	}
}
