var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';



var markers = locations.map(function(location, i) {
	return new google.maps.Marker({
		position: location,
		label: labels[i % labels.length]
	});
});


// initMap();






function initMap(){	


	var myLocation  = { lat : 10.2929 , lng : 123.9016 } ; 


	var mapCanvas = document.getElementById('map') ; 

	var mapOptions = { 
		zoom : 10, 
		center : myLocation
	}

	var map = new google.maps.Map(mapCanvas, mapOptions);

}


// geoLocationInit();



function geoLocationInit(){

	if (navigator.geolocation) {

		navigator.geoLocation.getCurrentPosition(success, fail);

	}
	else {

		alert('Browser not supported');

	}

}

function success(position){
	// console.log(position);
	var latval = position.coords.latitude ; 
	var lngval = position.coords.longitude ; 


	var myLatLng = new google.maps.LatLng(latval,lngval);

	initMap(myLatLng); 


}





function nearbySearch(myLocation){

}


function myLocation()	{

}


