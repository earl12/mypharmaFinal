<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

	public function barangay(){
		return $this->hasMany(Barangay::class) ; 
	}


}
