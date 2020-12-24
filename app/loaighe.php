<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaighe extends Model
{
    public function ghes(){
		return $this->belongsTo('App\ghe');
	}
}
