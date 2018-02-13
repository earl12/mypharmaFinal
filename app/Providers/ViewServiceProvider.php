<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Role ; 
use App\Barangay ; 
use App\User ; 



class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('partials.member_form',function($view) {

            $roles  = Role::select(['id','name'])->whereIn('id',[2,3])->get() ; 

            $barangays = Barangay::all();

            $view->with('roles',$roles) ;
            
            $view->with('barangays',$barangays) ;

        });


        view()->composer('admin.*','App\Http\ViewComposers\Admin');


        view()->composer('admin.partials.top-widgets',function($view) {


            $couriers = User::couriers()->count();

            $sWorkers  = User::socialworkers()->count();

            $barangay_count =  Barangay::count() ;

            $role  = Role::select(['id','name'])->whereIn('id',[2,3])->get() ; 

            $barangay = Barangay::all();

            $view->with('couriers',$couriers) ;

            $view->with('sWorkers',$sWorkers) ;

            $view->with('barangay_count',$barangay_count) ;
            

        });


        // Profile Informaton..


        view()->composer('account.*', 'App\Http\ViewComposers\Profile' );





        // view()->composer('partials.members_list',function($view) {
        //     $view->with('members',User::all()) ;
        // });


        // view()->composer('admin.dashboard',function($view) {
        //     $couriers = User::couriers()->count();

        //     $sWorkers  = User::socialworkers()->count();

        //     $barangay_count =  Barangay::count() ;

        //     $medicines = Medicine::select('id','generic_name')->get ();

        //     $roles = Role::exceptAdmin()->get();

        //     $barangays = Barangay::select('id','name' )->get();

        // });




        // View::composer(
        //     '*', 'App\Http\ViewComposers\All'
        // );

        // // Add company info to menu
        // View::composer(
        //     ['partials.admin.menu', 'partials.customer.menu'], 'App\Http\ViewComposers\Menu'
        // );

        // // Add notifications to header
        // View::composer(
        //     ['partials.admin.header', 'partials.customer.header'], 'App\Http\ViewComposers\Header'
        // );

        // // Add limits to index
        // View::composer(
        //     '*.index', 'App\Http\ViewComposers\Index'
        // );

        // // Add Modules
        // View::composer(
        //     'modules.*', 'App\Http\ViewComposers\Modules'
        // );


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
