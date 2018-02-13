<?php namespace App\Core\Traits ; 
use App\User ; 
use App\Role ; 
use App\Barangay ;
use App\Medicine ; 
use App\Filters\RoleFilters ; 
use App\Filters\UserFilters ; 
use App\Core\Queries\MedicineQueries ; 
use App\Core\Repositories\MedicineRepository ; 
use App\City ; 

trait ShowsViews {
	
	public function __construct(RoleFilters $role , UserFilters $user){
		$this->filterUser = $user ; 
		$this->filterRole = $role ; 
	}


	public function renderDashboard() {	
		// $role_id = Auth::user()->role_id;

		$couriers = User::couriers()->count();
		$sWorkers  = User::socialworkers()->count();
		$barangays =  Barangay::count() ;
		return view('admin.dashboard',compact('couriers','sWorkers','barangays'));

	}

	public function showAllUsers(){


		// $users = User::plainusers()->with(['role','barangay'])->get();

		// return $users->toArray();

		$users = $this->filterUser->nonAdmin();
		
		$roles = $this->filterRole->exceptAdmin();


		$barangays = Barangay::select( 'id', 'name' )->get();
		
		return view ( 'administrator.users.index', compact('users','roles' ,'barangays'));
	}

	public function showAllSocialWorkers()
	{	

		$sworkers = $this->filterUser->social_workers() ; 
		
		$roles = Role::exceptAdmin()->get();

		$barangays = Barangay::select ( 'id', 'name' )->get ();


		return view ( 'administrator.users.social-workers',compact('sworkers','roles','barangays'));
	}

	public function getMedicinesList(MedicineQueries $query){
		
		$medicines = $query->getAllInformation(); 

		// return $medicines->toArray();


		$items = Medicine::select(['id','generic_name'])->get();
		
		return view ( 'administrator.medicines.list',compact('medicines','items'));

		// return $medicines->toArray();
		// return view('pages.db_queries',compact('medicines')) ;
		// $medicines = $this->repo->getMedicinesList();
		// dd($medicines);
		// return view('pages.db_queries')->with('medicines',$medicines) ; 
		// $items = Medicine::select('id','generic_name')->get ();

	}


	public function showCreateUserForm(){	
		$roles = $this->filterRole->exceptAdmin();
		$barangays = Barangay::select ( 'id', 'name' )->get();
		return view('administrator.users.create',compact('roles','barangays'));


		// return view('administrator.create-user',compact('roles','barangays'));
	}




	public function showBarangayForm() {
		return view('administrator.barangays.create') ;
	}

	public function createMedicineForm() { 
		$items = Medicine::select('id','generic_name')->get ();
		return view('administrator.medicines.create',compact('items'));
	}



	public function barangays () {
		$barangays = Barangay::all();	
		return view ('administrator.barangays.index',compact("barangays"));
	}




	public function showSmsForm(){
		$roles = $this->role->exceptAdmin() ; 
		$barangays = Barangay::select ( 'id', 'name' )->get();
		return view('administrator.test-sms',compact('roles','barangays')) ; 
	}

}