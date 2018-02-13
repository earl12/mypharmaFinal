<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosage extends Model
{

	protected $table = 'medicine_dosages';
	
	protected $fillable = ['dosage_volume', 'form','medicine_id','price','file_name','file_size','file_mime','file_path'];

	public function medicine(){
		return $this->belongsTo(Medicine::class) ; 
	}


	public function owner() { 	
		return $this->belongsToMany(SeniorCitizen::class);
	}




	public function product()
	{
		return $this->belongsToMany(CustomerParcelDelivery::class,'customer_parcel_products','product_id','id') ; 
	}



}
