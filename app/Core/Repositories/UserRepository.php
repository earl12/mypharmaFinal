<?php 

namespace App\Repositories  ; 


use App\Core\Repositories\BaseRepository ; 


use App\User ; 

class UserRepository extends BaseRepository { 

	public function getAll(User $user) { 
		
		$users = $user->get() ; 	

		return response()->json($users); 
	}	



}