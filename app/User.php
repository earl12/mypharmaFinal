<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id','status', 'barangay_id'
    ];


    protected $events =  [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

//Relationships..
    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function barangay () { 
        return $this->belongsTo(Barangay::class) ; 
    }







    public function feedbacks(){
        return $this->hasMany(Feedback::class);
    }




    public function hasRole($role){
        if ($this->role()->where('name',$role)->first()){
            return true;
        }
        return false;
    }









    public function info(){ 
        return $this->hasOne(UserInformation::class);
    }

    public function parcel(){
        return $this->hasOne(Courier::class,'courier_id','id'); 
    }


    //Query Scopes..

    public function scopeCountUserById($query,$id){
        return $query->where('role_id','=',$id)->count() ; 
    }

    public function hasAnyRole($roles){ 
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else{
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }



    public function scopeAdmins($query){
        return $query->where('role_id','=',1);
    }


    public function scopeActive($query){
        return $query->where('status','=',1);
    }


    public function scopeInactive($query) {
        return $query->where('status', '=' , 0);
    }


    public function scopeActiveUsers($query){
        return $query->whereIn('role_id',[2,3])->active();
    }

    public function scopeCouriers($query){
        return $query->where('role_id',3);
    }

    public function scopeSocialWorkers($query){
        return $query->where('role_id',2);
    }






}
