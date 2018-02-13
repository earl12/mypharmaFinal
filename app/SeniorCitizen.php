<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeniorCitizen extends Model
{
	
	protected $guarded = [] ; 


	public function prescription(){
		return $this->belongsToMany(Dosage::class);
	}


	public function parcel(){
		return $this->belongsToMany(CustomerParcelDelivery::class,'senior_citizen_id');
	}


	public function barangay(){
		return $this->belongsTo(Barangay::class);
	}

}
