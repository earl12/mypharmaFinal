<?php

use Illuminate\Database\Seeder;
use App\City ; 
class Cities extends Seeder
{

    public function run()
    {
    	City::create([
    		'city_name'   => 'Naga City'
    		]);

    	City::create([
    		'city_name'   => 'Talisay City'
    		]);

    	City::create([
    		'city_name'   => "Cebu City"
    		]);	

    	City::create([
    		'city_name'   => "Mandaue City"
    		]);	

    }

}
