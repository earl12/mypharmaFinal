<?php

namespace App\Http\ViewComposers;
use App\User ; 
use App\Barangay ; 
use App\Role ; 
use Illuminate\View\View   ;
class Admin
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
    	$user = auth()->user();

        $information = $user->info ;

        $couriers = User::couriers()->count();

        $sWorkers  = User::socialworkers()->count();

        $barangay_count =  Barangay::count() ;

        $role  = Role::select(['id','name'])->whereIn('id',[2,3])->get() ; 

        $barangay = Barangay::all();


        $tag = Barangay::select('monthly_budget')->first();




        $view->with(['user' => $user,  'users_information' => $information,'couriers' => $couriers , 
            'sWorkers' => $sWorkers , 'barangay_count' => $barangay_count  ,'role' => $role  ,'barangay' => $barangay,'tag'=> $tag ]);

    }




}