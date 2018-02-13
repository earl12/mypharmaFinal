// $('#plotLocation').on('click',function(evt){
// 	console.log('evt');
// 	showAskModalForPlottingLocation(evt);
// 	geoCodedLocation();
// });


function getmyCurrentLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(geoSuccess, geoFail);
    } else {
        alert('Browser not supported');
    }
    
}


    
function geoSuccess(position) {
    var startLocation = {lat: position.coords.latitude, lng: position.coords.longitude}; 
    
    var mapCanvas = document.getElementById('map'); 
    
    var mapOptions = {
        zoom: 15,
        center: startLocation 
    }
    
    var map = new google.maps.Map(mapCanvas, mapOptions);
    
    var marker = new google.maps.Marker({
        position: {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        },
        map: map,
        draggable: true
    });


    var map = new google.maps.Map(mapCanvas, mapOptions);
    
    
    setFinalLocation(marker);
    
    
    
}


function setFinalLocation(marker) {
    
    google.maps.event.addListener(marker, 'dragend', function () {	
        var lat = marker.getPosition().lat();
        var lng = marker.getPosition().lng();
        var location = {
            lat: lat,
            lng: lng 
        }
        
        setLocation(location);
        
    });	
    
    
    
}



function lockLocation(location) {
    return location; 
}


function setLocation(location) { 		
    
    console.log(location);
    
    $('#setStartLocation').on('click', function () { 
        iziToast.question({
            timeout: 20000,
            close: false,
            overlay: true,
            toastOnce: true,
            id: 'question',
            zindex: 999,
            title: 'Hey',
            message: 'Are you sure about that?',
            position: 'center',
            buttons: [
            ['<button><b>YES</b></button>', function (instance, toast) {
                instance.hide(toast, {transitionOut: 'fadeOut'}, 'button');
                lockLocation(location); 	
                $('#setStartLocation').addClass('disabled');
            }, true],
            ['<button>NO</button>', function (instance, toast) {
                
                instance.hide(toast, {transitionOut: 'fadeOut'}, 'button');
                
            }]
            ],
            onClosing: function (instance, toast, closedBy) {
                console.info('Closing | closedBy: ' + closedBy);
            },
            onClosed: function (instance, toast, closedBy) {
                console.info('Closed | closedBy: ' + closedBy);
            }
        });
        
    }); 
    
}	

function getFinalLocation(location) {
    return location;
}




function geoFail() {
    alert("Geolocation failed.");
}


function showInitialMessageModal() {	
    
    iziToast.info({
        title: 'Hello',
        position: 'center',
        message: 'Please drag the marker on where you would start!',
    });
    
    
    
}


function getLocations() {
    
    
    
}


function openAutoComplete() {
    myGeoPositionGeoPicker({
        startAddress: 'Cebu City',
        returnCallback: 'geoCodedLocation'
    });
}


function nearbySearch() {
    
}


function geoCodedLocation(data) {
    console.log('I am your personal callback function, the returned values are: ' + data.lat + ',' + data.lng);
    var myLocation = {
        lat: data.lat,
        lng: data.lng
    }
}


function initMap() {
    
    if (navigator.geolocation) {
        
        navigator.geolocation.getCurrentPosition(geoSuccess, geoFail);
        
    } else {
        // 		alert('Geolocation failed: ' + error.message);
        alert('Browser not supported');
        
    }
    
}




//Get the current location

// or


// var mapObj = new GMaps({
// 	div: '#map',
// 	lat : 10.2929,
// 	lng : 123.9016,
// });





function addMarker(position, map) {
// map.addMarker({
// 	lat   : position.coords.latitude,
// 	lng   :  position.coords.longitude,
// 	title : 'Your Current Location',
// 	draggable : true , 
// 	dragend : function(marker){
// 		console.log(marker.getPosition().lat());
// 	}
// });

var marker = new google.maps.Marker({
    position: {
        lat: 10.2929,
        lng: 123.9016,
    },
    map: map,
    draggable: true
});

// overlay

// GMaps.geolocate({
// 	success: function(position){
// 		mapObj.setCenter(position.coords.latitude, position.coords.longitude, addMarker(position,mapObj));
// 	},	
// 	error: function(error) {
// 		alert('Geolocation failed: ' + error.message);
// 	},

// 	not_supported: function() {
// 		alert("Your browser does not support geolocation");
// 	},		
// 	always: function(position) {
// 		// showInitialMessageModal(); 
// 		console.log(position);
// 		return position ; 
// 	}
// });

}


function setStartLocation(position) {
    
    console.log(position);
    
}




function showAskModalForPlottingLocation() {
    
    
}


function nearbySearch() {
    var request = {
        location: myLatLng,
        radius: '2500',
        types: [type]
    }
}



