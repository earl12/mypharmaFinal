<?php namespace App\Filters ; 
use App\Role ; 
class RoleFilters extends Filters
{


	public function filterBy($key){
		$results = Role::where('name','like','$key%');
	}


	public function exceptAdmin(){
		
		$roles = Role::select ( 'id', 'name' )->whereIn('id',[2,3])->orderBy('name','desc')->get();
		
		return $roles ; 
		
	}

	public function adminRole() {
		$roles = Role::select( 'id', 'name' )
		->whereIn('id', 1)
		->get();
		
		return $roles ;
	}

}





