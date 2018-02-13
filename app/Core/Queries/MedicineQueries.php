<?php namespace App\Core\Queries ; 
use App\Medicine ; 
class MedicineQueries {


	public function __construct(Medicine $medicine)
	{
		$this->model = $medicine ; 
	}

	public function getAllInformation(){
		return $this->model
		->join('medicine_dosages', 'medicines.id', '=', 'medicine_dosages.medicine_id')
		->join('medicine_classes','medicine_classes.id','=','medicines.medicine_class_id')
		->select('medicines.id as med_id','generic_name','medicine_dosages.form as form','medicine_dosages.dosage_volume as dosageVolume',
			'medicine_dosages.id as dosage_id',	
			'medicine_dosages.price as dosage_price','medicine_classes.treatment_of as treatment_of','medicine_dosages.file_name as file_name')
		->orderBy('treatment_of','asc')->paginate(10) ;
	}

	

}
