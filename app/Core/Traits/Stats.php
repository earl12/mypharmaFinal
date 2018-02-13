<?php namespace App\Core\Traits ; 

use App\User ; 

use App\Barangay ; 


trait Stats {


	public function widgetStat()
	{
		
		return [
			'couriers' => $couriers,
			'social_workers' => $sWorkers , 
			'barangays' => $barangay_count
		] ; 
	}




}