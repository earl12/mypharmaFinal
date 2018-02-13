
// From TutorialsPoint


function getCurrentPosition()
{
	if(navigator.geolocation){
           // timeout at 60000 milliseconds (60 seconds)
           let options = options = {
           	enableHighAccuracy: false,
           	timeout: 5000,
           	maximumAge: 0
           };

           let geoLoc = navigator.geolocation;
           let watchID = geoLoc.watchPosition(showLocation, errorHandler, options);
       }

       else{
       	alert("Sorry, browser does not support geolocation!");
       }


   }


   function errorHandler(err){
   	if(err.code == 1) {
   		alert("Error: Access is denied!");
   	}

   	else if( err.code == 2) {
   		alert("Error: Position is unavailable!");
   	}

   }	

   function showLocation(pos){
   	
   	var latitude = pos.coords.latitude;
   	var longitude = pos.coords.longitude;
   	alert("Latitude : " + latitude + " Longitude: " + longitude);

   }

















