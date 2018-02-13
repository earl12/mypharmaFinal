<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User  ; 	
use App\Barangay ; 

use App\Medicine ; 

use App\Role ; 

use App\Dosage ; 

use App\Core\Traits\Stats ;


class AdminController extends Controller
{

	use Stats ; 

	public function account_profile(){
		return view('admin.edit_account'); 
	}


	public function renderDashboard() {		

		$medicines = Medicine::select('id','generic_name')->get();

		return view('admin.dashboard',compact('couriers','sWorkers','barangay_count','medicines'));

	}

	
	public function widgetStats(){
		$couriers = User::couriers()->count();
		$sWorkers  = User::socialworkers()->count();
		$barangays =  Barangay::count() ;
		$medicines  = Dosage::with(['user']) ; 

		return response()->json([
			'couriers' => $couriers ,
			'social_workers' => $sWorkers, 
			'barangays' => $barangays,
			'medicines' => $medicines
		]);

	}

	public function showRealTimeTransactions(){
		return view('admin.transactions');
	}

	public function basePage() {
		return view('layouts.admin');
	} 


	public function updateUserProfile(Request $request, UserInformation $usersinfo) {

	}

	public function checkParcel() {

	}






}
