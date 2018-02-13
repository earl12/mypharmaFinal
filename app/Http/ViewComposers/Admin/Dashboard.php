<?php namespace App\Http\ViewComposers\Admin;

use Auth;
use Illuminate\View\View;
use App\User ; 
use App\Barangay ; 
class Dashboard
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $couriers = User::couriers()->count();
        $sWorkers  = User::socialworkers()->count();
        $barangays =  Barangay::count() ;


        $view->with(['couriers' => $couriers, 
           'sWorkers' => $sWorkers ,
           'barangays' => $barangays]);
    }
}
