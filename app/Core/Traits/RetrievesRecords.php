<?php namespace App\Core\Traits ;

use DB ; 

use Carbon\Carbon ; 

use App\CustomerParcelDelivery;

use Auth ; 


trait RetrievesRecords {

	public function getSeniorCitizensMobileNumberWhoWillReceiveSMS(){



	}

	public function retrieveTodaysDeliveries()
	{

		$today = Carbon::today(); 

		$id = Auth::user()->id ; 

		return CustomerParcelDelivery::join('customer_parcel_products','customer_parcels_deliveries.customer_parcel_id',
			'=','customer_parcel_products.customer_parcel_id')
		->join('medicine_dosages','customer_parcel_products.product_id','medicine_dosages.id')
		->select('customer_parcel_products.*','customer_parcels_deliveries.*')
		->where([
			['courier_id','=',$id ],
			['delivery_date','=',$today]
		])->get();


	}

	//Retrieve Data..


	public function getInformationOfTheSeniorCitizens()
	{
		
		$today = Carbon::today(); 
		$id = Auth::user()->id ; 
		$undeliveredStatus = 102;

		$parcels =  CustomerParcelDelivery::where([ 
			['delivery_date', '=', $today],
			['courier_id', '=', $id],
			['delivery_status_code','=',$undeliveredStatus]
		])->get();

		$data = array() ; 

		foreach ($parcels as $parcel) {
			$owner = $parcel->owner ; 

			$ownersInformation[] = (object)[
				'full_name' => $owner->first_name." ".$owner->middle_name." ".$owner->last_name,
				'complete_address' => $owner->complete_address,
				'lat' => $owner->lat ,
				'lng' => $owner->lng ,
				'mobile_phone' => $owner->mobile_phone

			];

		}   

		return $ownersInformation;


	}




	

	// public function ()
	// {

	// 	CustomerParcel::join('customer_parcels_delivery','customer_parcels.customer_parcel_id','=','customer_parcels_delivery.customer_parcel_id')
	// 	->join('customer_parcel_products','customer_parcels_delivery.customer_parcel_id','=','customer_parcel_products.customer_parcel_id')
	// 	->select('')
	// 	->get();

	// }




  // $parcels = CustomerParcelDelivery::with('product')->get();

   // $users = DB::table('users')->where([
        //     ['status', '=', '1'],
        //     ['subscribed', '<>', '1'],
        // ])->get();



       //  $parcels = CustomerParcelDelivery::whereHas('parcel.owner', function ($query) use ($id) {
       //     $query->where('owner_id', $id); 
       // })->orWhere('parcel.delivery_date','=',$today)
       //  ->get();


        // ->where([
            // ['delivery_information.courier_id','=',$id],
            // ['delivery_information.delivery_date','=',$today]
    // ])->get() ;










}