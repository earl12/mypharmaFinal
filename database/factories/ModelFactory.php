<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
	static $password;
	return [
		'name' => $faker->userName,
		'email' => $faker->unique()->safeEmail,
		'password' => $password ?: $password = bcrypt('secret'),
		'role_id' => 3,
		'status' => 'active',
		// 'barangay_id' => mt_rand(1,10),
		'remember_token' => str_random(10),
	];
});


$factory->define(App\SeniorCitizenNumberLog::class , function (Faker\Generator $faker) {
	return [		
		'full_name' => $faker->name ,
		'mobile_number' => $faker->phoneNumber,
		'caretakers_name' => $faker->name ,
		'caretakers_mobile_number' => $faker->phoneNumber
	];
});




$factory->define(App\UserInformation::class , function (Faker\Generator $faker) {
	return [		
		'user_id' => mt_rand(384,395),
		'first_name' => $faker->firstName ,
		'middle_name' => $faker->lastName, 
		'last_name' => $faker->lastName,
		'picture' => 'default.jpg',
		'work_address' => $faker->address,
		'postal_code' => $faker->postcode,
		'house_number' => $faker->buildingNumber,
		'street_name' => $faker->streetAddress,
		'mobile_phone' =>$faker->tollFreePhoneNumber,
		'telephone' => $faker->tollFreePhoneNumber ,
		'company' => $faker->company,
		'alternate_email' => $faker->safeEmail ,
		'emergency_contact' => $faker->name,
		'emergency_contact_number' => $faker->tollFreePhoneNumber,

	];
});




$factory->define(App\SeniorCitizen::class , function (Faker\Generator $faker) {
	return [		
		'barangay_id' => 1,
		'first_name' => $faker->firstName,
		'middle_name' => $faker->lastName,
		'last_name' => $faker->lastName,
		'mobile_phone' => '93332998610',
		'telephone' => $faker->tollFreePhoneNumber  ,
		'caretakers_name' => $faker->name ,
		'caretakers_mobile_phone' => '9332998610',	
		'lat' => $faker->latitude(10.29,10.337), 
		'lng' => $faker->longitude(123.89,123.907),
		'city_name' => 'Cebu City', 
		'complete_address' => $faker->address,
	];
});


$factory->define(App\Parcel::class , function (Faker\Generator $faker) {		
	return [
		'senior_citizen_id' => mt_rand(67201372,67201381),
		'order_status_code' => 201,
		'placed_on' => Carbon\Carbon::now(),
		'total_amount' => 500,
		'delivery_status_id' => mt_rand(1,3)
	];
});	


$factory->define(App\Dosage::class , function (Faker\Generator $faker) {	

	return [
		'medicine_id' => mt_rand(2,20),	
		'dosage_volume' => '10mg',
		'form' => 'Tablet',
		'price' => mt_rand(35,50)
	];

});





$factory->define(App\OrderLog::class , function (Faker\Generator $faker) {
	return 
	[
		'senior_citizen_id' => mt_rand(1,6)	,
		'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
		'date_of_birth' => $faker->date('Y-m-d',1957-12-31), // '1979-06-09'
		'present_address' => $faker->address,
		'province_address' => $faker->address,
		'mobile_number' => $faker->phoneNumber,
		'caretakers_name' => $faker->name, 
		'barangay_id' => rand(1,2),
	];
});







$factory->define(App\CustomerParcelDelivery::class , function (Faker\Generator $faker) {
return 
	[
		'senior_citizen_id' => mt_rand(67201372,67201381)	,
		'placed_on' => Carbon\Carbon::today(),
		'total_amount' => rand(150,250), 
		'courier_id' => 395 , 
		'delivery_date' => Carbon\Carbon::today(),
		'delivery_status_code' => 102 ,
		'status_date_reported' => Carbon\Carbon::today(),
	];
}); 


$factory->define(App\CustomerParcelProduct::class , function (Faker\Generator $faker) {
	return 
	[
		'customer_parcel_id' => mt_rand(67201372,67201381)	,
		'product_id' => 201,
		'quantity' => $faker->sentence(8,true), 
	];
}); 





