<?php namespace App;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
	
	public function class(){

		return $this->belongsTo(MedicineClass::class,'medicine_class_id') ; 

	}

	public function dosage(){
		return $this->hasMany(Dosage::class);
	}

}
