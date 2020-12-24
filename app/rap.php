<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class rap extends Model
{
	public function ghes(){
		return $this->belongsTo('App\ghe');
	}
}
