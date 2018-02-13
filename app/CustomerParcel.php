<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerParcel extends Model
{
	protected $table = 'customer_parcels' ; 
	
	public $timestamps = false ;

	public function owner()
	{	
		return $this->belongsToMany(SeniorCitizen::class,'senior_citizen_id') ; 
	}
	


	public function deliveryInformation()
	{	
		return $this->belongsTo(CustomerParcelDelivery::class,'customer_parcel_id','customer_parcel_id') ; 
	}



	public function product()
	{

		return $this->belongsToMany(Dosage::class,'customer_parcel_products','product_id','customer_parcel_id'); 
	}










}
