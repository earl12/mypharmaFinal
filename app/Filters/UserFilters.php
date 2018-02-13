<?php 
namespace App\Filters ;
use App\User ; 

class UserFilters extends Filters
{

	public function filterBy($key){
		$results = User::where('name','like	','$key%');
	}

	public function nonAdmin(){

		return User::plainusers()->where('status',1)->get() ;		


	}


	public function social_workers(){
		return User::where('role_id',2)->join('barangays','barangays.id','=','users.barangay_id')
		->select('users.*','barangays.name as barangayName')
		->get(); 
	}

}