<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Core\Services\Auth\AuthenticatesUsers ; 

class AuthController extends Controller
{
	// protected $redirectTo = '/dashboard';

	use AuthenticatesUsers ; 	
	
	public function __construct(){
		$this->middleware('guest')->except('logout');
	}

}
