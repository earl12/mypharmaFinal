<?php
namespace App\Services\Delivery ; 
use App\Barangay ; 

class GetLocation  {

//returns all locations of registered houses for every barangay..
	public function getAllLocationsEveryBarangay($id){
		$locations = DB::table('senior_citizens_rosters')
		->select('lat as latitude', 'lng as longitude' ) 
		->where('barangay_id', $id )	
		->get() ; 

	}




//get a position of the barangay 
	public function getPositionForBarangayHall(, $id) {
		$location = Barangay::select('lat','lng')
		->where('id', $id) ; 
		->get(); 
	}


	
}


