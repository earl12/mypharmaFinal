<?php

namespace App\Http\Controllers;

use App\Core\Traits\RetrievesRecords;

use App\SeniorCitizen;

use App\CustomerParcelDelivery;

use Auth ; 

use Carbon\Carbon ;

class CourierController extends Controller {

    use RetrievesRecords;



    public function dashboard() {
        return view('courier');
    }

    public function getTodaysParcels()
    {

    	$id = Auth::user()->id; 
        $parcels = $this->retrieveTodaysDeliveries();
        return response()->json($parcels);

    }	


    public function getLocationOfTheSeniorCitizens()
    {   
        $ownersInformation = $this->getInformationOfTheSeniorCitizens();
        return response()->json($ownersInformation);

    }








}
