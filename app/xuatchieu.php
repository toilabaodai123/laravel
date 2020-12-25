<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class xuatchieu extends Model
{
    public function xuatchieuu(){
		return $this->hasOne('App\phim','phim','id');
	}
	
	public function ves(){
		return $this->belongsTo('App\ve');
	}
}
