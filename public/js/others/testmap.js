function getMyLocation(){
	
}


function geoLocationInit(){

	GMaps.geolocate({
		success: function(position) {
			map.setCenter(position.coords.latitude, position.coords.longitude);
		},
		error: function(error) {
			alert('Geolocation failed: '+error.message);
		},
		not_supported: function() {
			alert("Your browser does not support geolocation");
		},
		always: function() {
			alert("Done!");
		}
	});

}

function success(position){
	// console.log(position);
	var latval = position.coords.latitude ; 
	var lngval = position.coords.longitude ; 


	var myLatLng = new google.maps.LatLng(latval,lngval);

	initMap(myLatLng); 

}



function initMap(myLoc){

	new GMaps({
		div: '#map',
		lat : myLoc[0].lat,
		lng : myLoc[0].lng
	});

}