<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ve extends Model
{
    public function vea(){
		return $this->hasOne('App\phim','phim','id');
		return $this->hasOne('App\ghe','ghe','id');
		return $this->hasOne('App\xuatchieu','xuatchieu','id');
	}
}
