<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class MedicineClass extends Model
{
	
	public function medicine(){		 	

		return $this->hasOne(Medicine::class); 

	}

}
