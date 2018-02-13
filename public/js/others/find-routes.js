var center = { 
	lat :
	lng : 
}

var div = document.getElementById('#map') ; 
// Your normal Google Map object initialization 
var myOptions = {
	zoom: 4,
	center: center,
	mapTypeId: google.maps.MapTypeId.ROADMAP , 
	center :  center
};


myMap = new google.maps.Map(div, myOptions);


directionsPanel = document.getElementById("my_textual_div");

// Create the tsp object
tsp = new BpTspSolver(myMap, directionsPanel);

// Set your preferences
tsp.setAvoidHighways(true);
tsp.setTravelMode(google.maps.DirectionsTravelMode.WALKING);

// Add points (by coordinates, or by address).
// The first point added is the starting location.
// The last point added is the final destination (in the case of A - Z mode)
tsp.addWaypoint(latLng, addWaypointCallback);  // Note: The callback is new for version 3, to ensure waypoints and addresses appear in the order they were added in.
tsp.addAddress(address, addAddressCallback);

// Solve the problem (start and end up at the first location)
tsp.solveRoundTrip(onSolveCallback);
// Or, if you want to start in the first location and end at the last,
// but don't care about the order of the points in between:
tsp.solveAtoZ(onSolveCallback);

// Retrieve the solution (so you can display it to the user or do whatever :-)
var dir = tsp.getGDirections();  // This is a normal GDirections object.
// The order of the elements in dir now correspond to the optimal route.

// If you just want the permutation of the location indices that is the best route:
var order = tsp.getOrder();

// If you want the duration matrix that was used to compute the route:
var durations = tsp.getDurations();

// There are also other utility functions, see the source.
