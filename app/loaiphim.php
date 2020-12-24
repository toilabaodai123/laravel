<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaiphim extends Model
{
    public function phims(){
		return $this->belongsTo('App\phim');
	}
}
