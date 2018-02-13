<?php namespace App\Filters ; 
use App\Medicine ; 

class Medicines extends Filters {


	protected function filterBy($key){ 

		$results = Medicine::where('generic_name','like','$key%');

		return $results ; 
	

	}


	public function allInformation(){

		$medicines_information = Medicine::with(['dosage','class'])->get();	

		return $medicines_information ;

	}

}





