<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daodien extends Model
{
    public function phims(){
		return $this->belongsTo('App\phim');
	}
	
}
