<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{

	public function users(){
		return $this->hasMany(User::class);
	}


	public function city(){
		return $this->belongsTo(City::class); 
	}


	public function senior_citizens(){
		return $this->hasMany(SeniorCitizen::class) ; 
	}

	
	public function scopeAllBarangays(){
		return $this->select('id','name')->get();
	}



}
