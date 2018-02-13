<?php

use Illuminate\Database\Seeder;

use App\DeliveryStatus ;
class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	DeliveryStatus::create([
    		'status'   => 'Undelivered'
    	]);

    	DeliveryStatus::create([
    		'status'   => 'Pending'
    	]);

    	DeliveryStatus::create([
    		'status'   => "Delivered"
    	]);	
    }
}
