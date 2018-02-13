function myLocation(){	

	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function (position){
			return position ; 
		});
	} else  { alert("no geoposition"); }


	return position ; 

} 


export default {
	initializeLocation : myLocation

}









// function geoSuccess(position) {

// 	var data =  
// 	{
// 		lat  :  position.coords.latitude , 
// 		longitude : position.coords.longitude

// 	}; 



// 	return data ;

// }



// function geoFail() {

// }

// function todaysRoutes(){

// }


// function archivedRoutess(){

// }


// function computeRoutes(){
	
// }



// export default { 	

// 	forToday : todaysRoutes , 
// 	archivedRoute : archivedRoutess , 
// 	atMyLocation : myLocation  

// }




















