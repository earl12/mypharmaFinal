<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{

	protected $fillable = ['present_address','mobile_phone','telephone','company','alternate_email','emergency_contact']; 
	
	public function user(){	
		return $this->belongsTo(App\User::class);
	}


}
