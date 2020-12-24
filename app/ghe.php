<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ghe extends Model
{
    public function loaighe(){
		return $this->hasOne('App\loaighe','tenloaighe','id');
		return $this->hasOne('App\rap','tenrap','id');
	}
}
