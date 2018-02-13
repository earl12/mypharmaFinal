<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table = 'user_roles';

	public function users(){
		return $this->hasMany(User::class) ; 
	}


	public function scopeExceptAdmin($query){
		return $query->select('id','name')->whereIn('id',[2,3]);
	}
}
