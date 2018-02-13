<?php

use Illuminate\Database\Seeder;


use App\DeliveryStatusCode ; 
use App\DeliveryStatus ; 

class DeliveryStatusCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('delivery_status_codes')->truncate(); 

      DeliveryStatusCode::create([
        'status_code'   => 101,
        'title' => 'Delivered',
        'description' => 'Parcel is delivered to the user..'
      ]);


      DeliveryStatusCode::create([
        'status_code'   => 102,
        'title' =>'Undelivered',
        'description' => 'Was not picked up or delivered'
      ]);

      DeliveryStatusCode::create([
        'status_code'   => 103,
        'title' =>'Pending',
        'description' =>'Put on Hold by the courier'
      ]);


      DeliveryStatusCode::create([
        'status_code'   => 104,
        'title' =>'Left Warehouse',
        'description' => 'Parcel is picked by the courier'
      ]);

    }
  }
