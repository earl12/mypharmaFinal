<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Core\Api\RetrieveOrders  ;
use DB ; 
use App\Barangay ;
class MapsController extends Controller
{

	public function returnStartLocation($id){
		return $start_location ;
	}



	public function showRoutes(){
		$routes = $this->getAllLocation() ;
		return view('find-routes')->with('routes', $routes); 
	}

	public function getAllLocation($id){
		return $this->showAddressDetails($id)  ; 
	}

	public function showSpecificBarangayHallLocation($id) {

		$barangay_hall_location = Barangay::select('lat','lng')->where('id','=',$id)->get() ;

		return $barangay_hall_location->toArray() ;

		// $locations = DB::table('senior_citizens_rosters')
		// ->select('lat as latitude' ,'lng as longitude')
		// ->where('senior_citizens_rosters.barangay_id','=',$id)
		// ->get() ; 

		// return response()->json(['locations' => $locations , 'start_location'=> $start_location]); 
		// return view('find-routes')->with(['start_location' => $start_location,'locations' => $locations ]) ; 	
	}



	public function testGMaps(){
		return view('pages.gmaps');
	}




}
