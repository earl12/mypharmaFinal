<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerParcelProduct extends Model
{
	protected $table = 'customer_parcel_products' ; 


	public function product()
	{
		return $this->belongsToMany(Dosage::class,'customer_parcel_products','customer_parcel_id','customer_parcel_id'); 
	}


}
