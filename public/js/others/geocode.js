	// <![CDATA[
    var map;
var markersArray = []; // to be used later to clear overlay array
var marker;
var address;


jQuery(document).ready(function() {
    var lat = parseFloat(jQuery('#LatTxt').val());
    var lon = parseFloat(jQuery('#LonTxt').val());
    
    var myLatlng = new google.maps.LatLng(lat, lon);
    var myOptions = {
        zoom: 4,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(jQuery('[id^=k99_geolocation_]')[0], myOptions);
    placeMarker(myLatlng);

    google.maps.event.addListener(map, 'click', function(event) {
        placeMarker(event.latLng);
    });

	// Find Adress and set zoom when found
	
	jQuery('#k99_geo_address').click(function() { codeAddress() });
	function codeAddress() {
		geocoder = new google.maps.Geocoder();
		var address = document.getElementById("address").value;
		geocoder.geocode( { 'address': address}, function(results, status) {
           if (status == google.maps.GeocoderStatus.OK) {
               map.setCenter(results[0].geometry.location);
				  map.setZoom(11); // how to do that according to the level ?? (country ,city, street, house ??)
				  
                 if (marker) {
                   marker.setPosition(results[0].geometry.location);
               }
           } else {
            alert("Geocode was not successful for the following reason: " + status);
        }
    }
    );
    }

    //Function to extract longitude



    function placeMarker(location) {
        if (marker) {
            marker.setPosition(location);
        } else {
            marker = new google.maps.Marker({
                position: location,
                draggable: true,
                title: 'Drag me',
                map: map
            });
            markersArray.push(marker); // to be used later to clear overlay array
        }
    }
// adding drag event
google.maps.event.addListener(marker, 'dragend', function(event) { updatelonlat(); });

    // Removes the overlays from the map, but keeps them in the array

    function clearOverlays() {
        if (markersArray) {
            for (var i = 0, length = markersArray.length; i < length; i++) {
                markersArray[i].setMap(null);
            }
        }
    }
    //Jquery update HTML input boxes

    function updatelonlat() {
        jQuery('#LatTxt').val(marker.getPosition().lat());
        jQuery('#LonTxt').val(marker.getPosition().lng());
        geocoder = new google.maps.Geocoder();
        geocoder.geocode( { 'address': address}, function(results, status) {
           if (status == google.maps.GeocoderStatus.OK) {

             jQuery('#address').val(results[1].formatted_address);

         } else {
            alert("Geocode was not successful for the following reason: " + status);
        }
    } );
    }


    // add event click
    google.maps.event.addListener(map, 'click', function(event) {
        placeMarker(event.latLng);
        //document.getElementById("#LatTxt").value = event.latLng.lat();
        //down lan lon values  from http://tech.cibul.net/geocode-with-google-maps-api-v3/
        updatelonlat();
    });

}); 
	// ]]>