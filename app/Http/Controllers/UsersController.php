<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB ; 
use App\SeniorCitizenRoster ;
use App\Http\Requests\SeniorCitizensRequest ; 

use App\Barangay ;  

use App\Services\Delivery\GetLocation ; 

use Image ; 

use App\Courier ; 

use App\User ;

use Storage ;

use App\Core\SeniorCitizenEntry ; 

use App\Core\Traits\RetrievesRecords;

use App\SeniorCitizen ; 


class UsersController extends Controller
{
	public function showOrdersCompleteInformation () {
		$users = User::all() ; 
	}

	
	public function showProfile($user_id){ 	
		return view('profileform')->with('user_id',$user_id); 
	}


	public function updateProfile(Request $request, Courier $courier) { 
		
	}


	public function saveNewSeniorCitizen(SeniorCitizensRequest $request, SeniorCitizenEntry $entry){ 
		// dd($request->all());

		// return $request->all();

		// $entry->storeData($request); 


		$file = request()->file('upload_photo'); 

		$image = Image::make($file)->resize(75,null,function($constraint){ 
			$constraint->aspectRatio() ; 
		})->encode('jpg',75) ; 


		$image_location = $file->store('senior_citizens') ;

		Storage::put('medicines/thumbs/'.$file->hashName(),60);

		$senior_citizens =  SeniorCitizen::create([
			'id' => request('id') , 
			'first_name' => request('first_name'),
			'middle_name' => request('middle_name'),
			'last_name' => request('last_name'),
			'mobile_phone' => request('phone'),
			'telephone'  => request('telephone'),
			'caretakers_name' => request('caretakers_name'),
			'caretakers_mobile_phone' => request('caretakers_phone') , 
			'lat' => request('geoposition1a') , 
			'lng' => request('geoposition1b'),
			'city_name' => request('geoposition1c') , 
			'complete_address_name' => request("geoposition1d"), 
			'file_name' => $file->hashName(),
			'file_size' => $file->getClientSize(), 
			'file_mime' => $file->getClientMimeType() , 
			'file_path' => $image_location, 
			'barangay_id' => request('barangay_id')
		]); 	

		$senior_citizens->save() ; 

		if (request()->wantsJson()) {
			return response($senior_citizens, 201);
		}
		

		

		// return $request->all() ; 
	}


	public function checkseniorcitizenid(Request $request){
		$id = $request->get('id') ; 
		$msg = ''; 
		$count = DB::table('senior_citizens_rosters')->where('id',$id)->count() ; 
		if ($count >= 1){ 
			$msg = 'Senior citizen ID is already been taken' ; 
		}
		else if($count == 0 ){
			$msg = 'Senior Citizen ID was available' ; 
		}
		return response()->json(['count' => $count,'message' => $msg]) ;  

	}


	public function showUploadForm(Request $request){
		$barangays = Barangay::all(); 
		return view('register-elderly',compact('barangays')) ; 
	}


	public function seniorcitizens(SeniorCitizen $senior){
		// $all = SeniorCitizenRoster::all(); 
		// $barangay = SeniorCitizenRoster::barangay ; 

		$senior_citizens = $senior->with('barangay')->take(3)->get();

		return $senior_citizens->toArray();

	}

	public function getCouriersPerBarangay($id){
		
		$couriers =	User::join('couriers','users.id','=','couriers.courier_id')
		->select('users.*')
		->where('barangay_id','=',$id)
		->get() ; 

		return $couriers; 
	}



	public function showAllUsersWithRoles(){	
		$users = User::with('role')->unapproved()->get();
	}

}

