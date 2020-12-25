<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $primaryKey = 'taikhoan';
	
	public $incrementing = false;
	
	protected $keyType = 'string';
}
