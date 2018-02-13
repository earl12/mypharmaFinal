<?php 
namespace App\Core\api ; 
use Carbon\Carbon ; 
use DB ; 
use App\SeniorCitizenRoster ; 
use App\SeniorCitizenMedicine ; 
use App\User ; 

trait Retrieves {

	// public function retrieveTodaysDeliveries($user_id){
	// 	$courier_id  = User::join('couriers','users.id','=','couriers.user_id')
	// 	->select('couriers.id  as courier_id')
	// 	->where('couriers.user_id','=',$user_id)
	// 	->get();

	// 	$delivery_information = DB::table('senior_citizen_medicines')
	// 	->join('senior_citizens_rosters','senior_citizens_rosters.id','=','senior_citizen_medicines.senior_citizen_id')
	// 	->join('barangays','senior_citizens_rosters.barangay_id','=','barangays.id')
	// 	->join('couriers','couriers.id','=','senior_citizen_medicines.courier_id')	
	// 	->join('dosages','dosages.id','=','senior_citizen_medicines.dosage_id')
	// 	->join('medicines','dosages.medicine_id','=','medicines.id') 
	// 	->join('medicine_classes','medicines.medicine_class_id','=','medicine_classes.id')
	// 	->where('senior_citizen_medicines.delivery_date','=',Carbon::now())
	// 	->get();

	// }		





	public function showAddressDetails($id)  {
		// With Query Builder...

		// $start_location = DB::table('barangays')
		// ->select('lat as latitude', 'lng as longitude' ) 
		// ->where('id','=', $id )	
		// ->get() ; 


		// $locations = DB::table('senior_citizens_rosters')
		// ->join('senior_citizen_medicines','senior_citizens_rosters.id','=','senior_citizen_medicines.senior_citizen_id')
		// ->join('dosages','dosages.id','=','senior_citizen_medicines.dosage_id')
		// ->join('medicines','medicines.id','=','dosages.medicine_id')
		// ->select('lat as latitude', 'lng as longitude','senior_citizens_rosters.first_name', 'senior_citizens_rosters.last_name', 'senior_citizens_rosters.mobile_phone','dosages.dosage_name','daily_frequency','medicines.generic_name','delivery_date','delivery_status','total_price as price')
		// ->get(); 




		return response()->json(['recipient' => $locations,'barangay_hall_location' => $start_location]); 

	}



}