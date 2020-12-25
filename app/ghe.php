<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ghe extends Model
{
    public function loaighe(){
		return $this->hasOne('App\loaighe','loaighe','id');
		return $this->hasOne('App\rap','tenrap','id');
	}
	
	public function vea(){
		return $this->belongsTo('App\ve');
	}
	
	public function thoigianghea(){
		return $this->belongsTo('App\thoigianghe');
	}
}
