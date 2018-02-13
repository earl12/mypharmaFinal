<?php

namespace App;

use Carbon\Carbon ; 

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{

	protected $table = 'parcels';

	public $timestamps = false;

	protected $dates = ['placed_on','delivery_date'];

	public function getPlacedOnAttribute($date){
		return Carbon::parse($date)->format('F j, Y, g:i a');
	}


	public function setPlacedOnAttribute($date){

		$this->attributes['placed_on'] = Carbon::parse($date);

	}


	public function getDeliveryDateAttribute($date){

		return Carbon::parse($date)->format('F j, Y, g:i a');

	}


	public function setDeliveryDateAttribute($date){
		$this->attributes['delivery_date'] = Carbon::parse($date);
	}


	public function courier(){
		return $this->belongsToMany(Courier::class,'courier_id');
	}


	public function owner(){
		return $this->belongsToMany(SeniorCitizen::class)  ; 
	}


	public function deliveryStatus() {
		return $this->hasOne(DeliveryStatus::class);
	}




	

}
