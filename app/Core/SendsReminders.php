<?php 
use Carbon\Carbon ; 
use App\SeniorCitizen ;
use App\Core\Traits\
// Get the Senior Citizens who will receive a parcel for tomorrow..
// Call the SMS function and send it..

class SendsReminders{




	public function __construct(){



	}


	public function getSeniorCitizens(){ 


		DB::table('senior_citizens')->get('')


		$parcel = Parcel::with('owner')->where('delivery_date','=',Carbon::tomorrow());
		// $mobile_number = SeniorCitizen::select('mobile_number')->where('')

		return response()->json($parcel) ; 

	}








}