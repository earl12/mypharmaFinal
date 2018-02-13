<?php namespace App\Core ;
use App\User ;  
use App\Core\DateEntry ; 
class UserEntry extends DataEntry {

	public function storeData($request){
		$user = User::create([ 'name' => $request->('name'),
			'email' =>  $request->('email'),
			'password' => bcrypt( $request->('password')),
			'barangay_id' =>  $request->('barangay_id') , 
			'role_id' =>  $request->('role_id') ,
			'status'=>  $request->('status')
		]);
		$user->save();
	} 


	public function updateData($request , $id) {

	}



}


