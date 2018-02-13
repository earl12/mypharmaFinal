<?php

namespace App\Http\ViewComposers;


use Auth ; 

use Illuminate\View\View   ;


class Profile
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


        $username = $user->name ; 

        $view->with(['user' => $user,  'username' => $username , 'users_information' => $information]);

    }




}
