<?php namespace App\Core\Services\Auth ; 
use Illuminate\Contracts\Auth\Guard ; 
trait RedirectsUsers
{

	protected function redirectUser($user){
		if ($user->role_id == 1){ 
			return redirect()->route('admin/dashboard');
		}
		else {
			return redirect('dashboard');
		}
	}


}