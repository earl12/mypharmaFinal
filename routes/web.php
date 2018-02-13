<?php

/***********************************

MYPHARMA API ROUTES built with laravel 5.4 


Stacks Used : 

2. Jquery/Vuejs

3. Chart.js/Pages.js

4. Codebase Admin Panel. 
    
5. Vuetify

6. Mysql (Server)

**********/

/***

    Classes I've created and directory location : 

    1. App\Core.

    2. App\Filters.


    **/


    use App\Events\MemberIsAdded;

    use App\Events\MemberDeleted;

    use App\SeniorCitizen ; 


    use Carbon\Carbon; 
//Add the Middleware soon auth and admin here only admin can access this. 






    Route::group(['middleware'=> ['auth','isAdmin'], 'prefix' => 'admin'], function () {    
// Route::group(['prefix' => 'admin'], function () {


        Route::get('dashboard', 'AdminController@renderDashboard')->name('admin.dashboard');

        Route::resource('members','MembersController') ;

        Route::get('members/delete','MembersController@destroy')->name('members.destroy') ; 

        //Shows Realtime Transactions..
        Route::get('transactions/realtime', 'AdminController@showRealTimeTransactions')->name('showTransactions') ; ;

        // Route::get('transaction/{id}', 'AdminController@showTransaction')

        // Deliveries Realtime
        Route::get('realtime/deliveries', 'AdminController@showTransaction')->name('deliveries.realtime') ; 

        Route::get('members/couriers',
            [
                'as' => 'members.couriers' , 
                'uses' =>    'MembersController@couriers'
            ]);

        Route::get('members/social-workers', [  'as' => 'members.socialworkers',   'uses' => 'MembersController@socialworkers']);


        Route::resource('medicines','MedicinesController');

        Route::get('profile/{id} ','AdminController@account_profile')->name('updateProfile');

        Route::resource('barangays','BarangaysController');



        Route::get('account/profile/id={id}','AppController@userProfile')->name('user.profile');

        Route::post('submit/profile/{id} ','AppController@userProfile')->name('updateUserProfile');

        Route::get('profile/upload/photo/{id}','AppController@adminProfilePhoto')->name('changeAdminPhoto');



    });



/*

******************


Courier Routes Starts here


******************


*/


Route::group(['middleware' => ['auth', 'isCourier']], function () {
    Route::get('/', 'CourierController@dashboard')->name('courier.dashboard');
});




Route::get('log/admin',function(){

    $user =  \App\User::where('role_id','=',1)->first(); 

    $id = $user->id  ;

    Auth::loginUsingId($id);

});



Route::get('log/cour',function(){

    $user =  \App\User::where('role_id','=',3)->first(); 

    $id = $user->id  ;  

    Auth::loginUsingId($id);


});



Route::get('/hmr',function(){

  return view('some_file');


});


Route::get('/tsp/ga',function(){

    return view('tsp-ga');
});


/************************************
        
                    API LABELS..
        v0 -> Count 
        v1 -> Retrieval 
        v2 -> Availability

 *************************************/





        Route::get('api/v1/parcels/to-deliver','CourierController@getTodaysParcels');

        Route::get('api/v1/delivery/information','CourierController@getLocationOfTheSeniorCitizens');


        Route::get('api/v0/widget-stats','AdminController@widgetStats');

        Route::get('api/v1/users','MembersController@users')->name('users');

        Route::get('api/v1/parcel/status','AppController@parcelStatus');

//Get Mobile Numbers for tomorrows orders..
        Route::get('api/v1/parcels/mobile_numbers','MembersController@PhoneNumbersForTomorrow');

        Route::get('api/v1/social-workers','AdministratorController@getSocialWorkers');

        Route::get('api/v2/senior-citizen/{id}', 'UsersController@checkseniorcitizenid');

        Route::get('api/v2/email', 'MembersController@emailduplicate')->name('email.getDuplicate');


        Route::get('api/v2/parcels/tomorrow',function(){
            $parcels = SeniorCitizen::all();
            return response()->json($parcels);          
        });

        Route::get('api/v2/senior-citizen/phone', 'UsersController@checkseniorcitizensphone');  

Route::get('api/seniors', 'UsersController@seniorcitizens'); //NA



Route::get('/api/check',function(){
    return [ 'hey','say','lay'];

});










Route::get('api/routes', 'MapsController@showRoutes');  // NA

// Get/Fetch all senior citizens

Route::get('/api/seniors', 'UsersController@seniorcitizens'); //NA

Route::get('api/deliveries', function() {
    $user_id = auth()->user()->name;
    dd($user_id);
});




Route::get('/get/social-workers','AdministratorController@getSocialWorkers');




// Route::get('api/v1/sms/')

//Test pusher.. 
Route::get('/fire',function(){
    event(new MemberIsAdded);
    return 'fired' ; 
});


Route::get('/fire/deleted',function(){
    $x = event(new MemberDeleted);
    return $x;
});





Route::get('/fire/updated',function(){
    event(new MemberInformationUpdated);
    return 'fired' ; 
});



Route::get('/fire/parcel-delivered',function(){
    event(new ParcelIsDelivered);
    return 'fired' ; 
});







/*social workers*/
Route::get('social-workers/home','AppController@socialworkers')->name('socialworker.dashboard');


//Couriers for every barangay 
//parameters  => barangay_id
Route::get('barangay/couriers/{id}', 'UsersController@getCouriersPerBarangay');

//Check Availability API..
Route::get('availability/email', 'MembersController@emailduplicate');

Route::get('users', 'AppController@users');

Route::get('barangays/data', 'AppController@barangays');

Route::get('tasks', 'MapsController@showSpecificBarangayHallLocation'); //=returns lat,lng of barangay_hall

//Database operations.. 
Route::get('reset/users', function () {
    DB::table('users')->truncate();
});

Route::get('seed/statuses', function(){

    // DB::table('delivery_status_codes')->truncate(); 

    // DB::table('order_status_codes')->truncate(); 


    // DB::table('order_status_codes')->insert(
    //     [
    //         [  'status_code'   => 201 , 'title' => 'Part Subtracted', 'description' => 'Parcel is delivered to the user..'],
    //         [  'status_code'   => 202 , 'title' => 'Extra Status Code', 'description' => 'Lorem ipsum dolor sit amet.']
    //     ]);


    DB::table('delivery_status_codes')->insert([
        [  'status_code'   => 101, 'title' => 'Delivered', 'description' => 'Parcel is delivered to the user..'],
        [  'status_code'   => 102, 'title' => 'Undelivered', 'description' => 'Was not picked up or delivered' ],
        [ 
         'status_code'   => 103, 
         'title' =>'Pending', 
         'description' =>'Put on Hold by the courier'
     ],
     [
        'status_code'   => 104,
        'title' =>'Left Warehouse',
        'description' => 'Parcel is picked by the courier'
    ]
]); 

});



// $id = Auth::id(); 
/**
  Plain XHR Requests for API
 * /get all lat and lng  in a specific barangay and the location of the barangay_hall
  //parameter : barangay_id
  //returns : the lat long of the registered senior citizens who placed their order and the barangay_ hall..
  /*
Route::get('get/barangay-hall/{id}', 'MapsController@showSpecificBarangayHallLocation'); //=returns lat,lng of barangay_hall
/**
 * Show Routes for today's orders.. [Courier...]
 */     




/**
 * test routes
 */
//get the geolocation of the user..
Route::get('map/autocomplete', 'AppController@autoComplete'); //Not included..
Route::get('test/queries', 'AppController@testQueries');


// barangay_id to be passed
// Route::get('routes/barangay/{id}','MapsController@showSpecificBarangayAllLocation') ; 
//lee Jacobson test routes..=> tsp
// Route::get('tsp/1', function() {
//     return view('test-deliver');
// });



Route::post('chikka/post', function() {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $post_cp = "639327473899;639332998610";

    $message = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ratione.";

    $url = "https://post.chikka.com/smsapi/request";

    $shortcode = "29290 45485";

    $client_id = "63a07c71a6eabbb9bcd28321c1f5ccd08046be8dd6a6151c8663e5716ec17694";

    $secret_key = "202ee4438b62ada004032b6ecf9c5d648118a4920707907d0817e0d01501514b";

    $count = time();
    $arr_cp = explode(";", $post_cp);
    for ($i = 0; $i < sizeof($arr_cp); $i++) {
        /* loop through */
        if (trim($arr_cp[$i]) != "") {
            echo $arr_cp[$i];
            $post_data = array(
                "mobile_number" => $arr_cp[$i],
                "shortcode" => $shortcode,
                "message_id" => md5($count++),
                "client_id" => $client_id,
                "secret_key" => $secret_key,
                "message_type" => "SEND",
                "message" => $message
            );
            $postvars = http_build_query($post_data);
            // open connection
            $ch = curl_init();
            // set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, count($post_data));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
            // execute post
            $result = curl_exec($ch);
            // close connection
            curl_close($ch);
        }
    }
});

// register senior citizen form
Route::get('senior-citizen/form/registration', 'UsersController@showUploadForm');

//save senior_citizen..
Route::post('senior-citizen/store', ['as' => 'storeSeniorCitizen', 'uses' => 'UsersController@saveNewSeniorCitizen']);




//Test GMAPS
Route::get('gmaps/show', 'MapsController@testGMaps');



// Dashboard for other users
Route::get('dashboard','AppController@dashboard');



Route::get('/sms/recipients',function(){


    $recipients = DB::table('senior_citizens')
    ->join('customer_parcels','senior_citizens.id','=','customer_parcels.senior_citizen_id')
    ->join('customer_parcels_delivery','customer_parcels_delivery.customer_parcel_id','=','customer_parcels.customer_parcel_id')
    ->select('mobile_phone')->where('customer_parcels_delivery.delivery_date','=',Carbon::tomorrow())
    ->get();


    return $recipients;



});



// Auth Routes. 
Route::get('login', ['as' => 'login', 'uses' => 'AuthController@showLoginForm']);

Route::post('login', 'AuthController@postLogin')->name('login');

Route::get('reset/password','AuthController@')->name('password.reset');


Route::get('logout', 'AuthController@logout');



Route::get('/home', function () {
    return view('index');
});



// General users interaction.... Update users profile..f

// Route::get('update/profile/{id}', 'UsersController@showProfile')->name('updateprofileform');
// Route::post('update/profile', 'UsersController@updateUserProfile')->name('updateProfile');






//eloquent routes..
// Route::get('role-user','UsersController@showAllUsersWithRoles');



// Social social-workers

// Route::get('directions', ['as' => 'directions', 'uses' => 'GoogleMapsController@directions']);

//SW routes
// Route::group(['middleware' => ['auth'], 'prefix' => 'client'], function() {
//     Route::resource('client', 'ClientController');
//     Route::get('dashboard', ['as' => 'dashboard',
//         'uses' => 'ClientController@index']); 
//     Route::get('order-form', ['as' => 'orderForm',	
//         'uses' => 'ClientController@getOrderForm']);
//     Route::get('order-form/findMedicineName', ['as' => 'findMedicineName',
//         'uses' => 'ClientController@findMedicineName']);  
//     Route::post('storeOrder', ['as' => 'storeOrder',
//         'uses' => 'ClientController@storeOrder']);
//     Route::get('user-profile', ['as' => 'userProfile',
//         'uses' => 'ClientController@getUserProfile']);
//     Route::post('storeUserProfile', ['as' => 'storeUserProfile',
//         'uses' => 'ClientController@storeUserProfile']);
//     Route::get('editUserProfile', ['as' => 'editPatientsProfile',
//         'uses' => 'ClientController@editPatientsProfile']); 
//     Route::put('updateUserProfile', ['as' => 'updatePatientsProfile',
//         'uses' => 'ClientController@updatePatientsProfile']); 
//     Route::get('getMedicine', ['as' => 'getMedicine',
//         'uses' => 'ClientController@getMedicine']);
//     Route::get('getPrice', ['as' => 'getPrice',
//         'uses' => 'ClientController@getPrice']);  
//     Route::get('getName', ['as' => 'getName',
//         'uses' => 'ClientController@getName']);        
// });


//socialworker routes
// Route::group(['middleware' => ['auth'], 'prefix' => 'socialworker'], function() {
// 	Route::resource('socialworker', 'SocialWorkerController');
// 	Route::get('dashboard', ['as' => 'dashboard4SocialWorkers',
// 		'uses' => 'SocialWorkerController@index']);
// 	Route::get('register', ['as' => 'register',
// 		'uses' => 'SocialWorkerController@register']);
// 	Route::get('register2', ['as' => 'register2',
// 		'uses' => 'SocialWorkerController@register2']); 
// 	Route::get('register3', ['as' => 'register3',
// 		'uses' => 'SocialWorkerController@register3']);
// 	Route::get('medicinelist', ['as' => 'medicinelist',
// 		'uses' => 'SocialWorkerController@medicinelist']);
// 	Route::get('showMedicine/{slug}', ['as' => 'showMedicine',
// 		'uses' => 'SocialWorkerController@showMedicine']);
// 	Route::post('storeSeniorInfo', ['as' => 'storeSeniorInfo',
// 		'uses' => 'SocialWorkerController@storeSeniorInfo']);
// 	Route::post('storeElderlyMedicalInfo', ['as' => 'storeElderlyMedicalInfo',
// 		'uses' => 'SocialWorkerController@storeElderlyMedicalInfo']);
// 	Route::get('getSeniorProfile/{id}', ['as' => 'getSeniorProfile',
// 		'uses' => 'SocialWorkerController@getSeniorProfile']);
// 	Route::put('updateElderlyProfile', ['as' => 'updateElderlyProfile',
// 		'uses' => 'SocialWorkerController@updateElderlyProfile']);
// 	Route::delete('deleteElderlyProfile/{id}', ['as' => 'deleteElderlyProfile',
// 		'uses' => 'SocialWorkerController@deleteElderlyProfile']);
// 	Route::post('getMedicine', ['as' => 'getMedicine',
// 		'uses' => 'SocialWorkerController@getMedicine']);
// 	Route::post('addMedicine', ['as' => 'addMedicine',
// 		'uses' => 'SocialWorkerController@addMedicine']);
// 	Route::post('storeElderlyOrder', ['as' => 'storeElderlyOrder',
// 		'uses' => 'SocialWorkerController@storeElderlyOrder']);
// 	Route::post('test', ['as' => 'test',
// 		'uses' => 'SocialWorkerController@test']);
// 	Route::post('addMedicineInfo', ['as' => 'addMedicineInfo',
// 		'uses' => 'SocialWorkerController@addMedicineInfo']);
// 	Route::get('findDosage/ajax/{id}',array('as'=>'findDosage',
// 		'uses'=>'SocialWorkerController@findDosage'));

    // Route::get('medicineCart', ['as' => 'medicineCart',
    //     'uses' => 'SocialWorkerController@medicineCart']);
    // Route::get('order-form', ['as' => 'orderForm',
    //     'uses' => 'ClientController@getOrderForm']);
    // Route::get('order-form/findMedicineName', ['as' => 'findMedicineName',
    //     'uses' => 'ClientController@findMedicineName']);  
    // Route::post('storeOrder', ['as' => 'storeOrder',
    //     'uses' => 'ClientController@storeOrder']);
    // Route::get('user-profile', ['as' => 'userProfile',
    //     'uses' => 'ClientController@getUserProfile']);
    // Route::get('editUserProfile', ['as' => 'editPatientsProfile',
    //     'uses' => 'ClientController@editPatientsProfile']); 
    // Route::put('updateUserProfile', ['as' => 'updatePatientsProfile',
    //     'uses' => 'ClientController@updatePatientsProfile']); 
    // Route::get('getMedicine', ['as' => 'getMedicine',
    //     'uses' => 'ClientController@getMedicine']);
    // Route::get('getPrice', ['as' => 'getPrice',
    //     'uses' => 'ClientController@getPrice']);  
    // Route::get('getName', ['as' => 'getName',
    //     'uses' => 'ClientController@getName']);        
// });
// Route::get('myform',array('as'=>'myform','uses'=>'SocialWorkerController@myform'));
// Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'SocialWorkerController@myformAjax'));
// Route::get('findDosage/ajax/{id}',array('as'=>'findDosage',
// 	'uses'=>'SocialWorkerController@findDosage'));

// //messenger routes
// Route::group(['middleware' => ['auth'], 'prefix' => 'messenger'], function() {
// 	Route::resource('messenger', 'MessengerController');
// 	Route::get('dashboard', ['as' => 'dashboard',
// 		'uses' => 'MessengerController@index']);
// 	Route::get('directions', ['as' => 'directions',
// 		'uses' => 'MessengerController@directions']);
// 	Route::get('directions2', ['as' => 'directions2',
// 		'uses' => 'MessengerController@directions2']);
// });


//elderly routes
// Route::group(['middleware' => ['auth'], 'prefix' => 'elderly'], function() {
//     Route::resource('elderly', 'ElderlyController');
//     Route::get('dashboard', ['as' => 'dashboard',
//         'uses' => 'ElderlyController@index']);
//     // Route::get('getElderlyProfile', ['as' => 'getElderlyProfile',
//     //     'uses' => 'ElderlyController@getElderlyProfile']);
//     Route::get('directions2', ['as' => 'directions2',
//         'uses' => 'MessengerController@directions2']);
//     Route::get('showmedicinelist', ['as' => 'showmedicinelist',
//         'uses' => 'ElderlyController@showmedicinelist']);
//     Route::get('showMedicineInfo/{slug}', ['as' => 'showMedicineInfo',
//         'uses' => 'ElderlyController@showMedicineInfo']);
//     // Route::post('addMedicineInfo', ['as' => 'addMedicineInfo',
//     //     'uses' => 'ElderlyController@addMedicineInfo']);
//     Route::delete('destroy/{id}', ['as' => 'destroy',
//         'uses' => 'ElderlyController@destroy']);
//     Route::post('emptyCart', ['as' => 'emptyCart',
//         'uses' => 'ElderlyController@emptyCart']);
//     Route::patch('updateQuantity', ['as' => 'updateQuantity',
//         'uses' => 'ElderlyController@updateQuantity']);
// });




