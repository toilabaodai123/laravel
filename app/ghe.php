<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ghe extends Model
{
    public function loaighe(){
		return $this->hasOne('App\loaighe','loaighe','id');
		return $this->hasOne('App\rap','tenrap','id');
	}
}
