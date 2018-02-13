<?php

use Illuminate\Database\Seeder;
use App\SeniorCitizen ; 
use Faker\Generator ; 
class SeniorCitizens extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create(); 

    	SeniorCitizen::create([
    		'barangay_id'   => 1,
    		'first_name' => $faker->firstName(), 
    		'middle_name' => $faker->lastName(), 
    		'mobile_'
    		'some_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quia repudiandae, fugiat accusantium, nisi pariatur.'
    	]);
    }
}
