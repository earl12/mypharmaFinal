<?php /*


This


file is


responsible for the basic operations of the Medicine Table

*/


namespace App\Core\Repositories ; 
use App\Medicine;
use App\Dosage ;
use App\MedicineClass ;

class MedicineRepository {
	
	public function __construct(Medicine $medicine, Dosage $dosage, MedicineClass $medclass) {
		$this->model  = $medicine  ;
		
		$this->dosage = $dosage ;

		$this->medclass = $medclass ;
	}

	public function getMedicinesList(){
		return $this->model
		->join('dosages', 'medicines.id','=', 'dosages.medicine_id')
		->join('medicine_classes','medicine_classes.id','=','medicines.medicine_class_id')
		->select('medicines.id as med_id','generic_name','dosages.form as form','dosages.dosage_name as dosage_name',
			'dosages.id as dosage_id',
			'dosages.price as dosage_price','medicine_classes.class_name as med_class','dosages.file_name as file_name')
		->orderBy('med_class','asc')->paginate(10) ;
	}


	public function getAll($model) { 

	} 


	
}
