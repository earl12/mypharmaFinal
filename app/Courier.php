<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
	protected $guarded = [];

	protected $table = 'couriers';

	public function user(){
		return $this->belongsTo(User::class) ;  
	}


	public function packagedeliveries(){
		return $this->hasMany(Parcel::class,'courier_id');
	}

}
