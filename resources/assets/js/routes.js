import VueRouter from 'vue-router';
import Home from './views/Home.vue';
import ParcelsToDeliver from './views/Parcels.vue';
import TodaysDelivery from  './views/TodaysDelivery.vue' ; 
import PendingDelivery from  './views/ArchivedDelivery.vue' ; 
import Profile from  './views/Profile.vue' ; 

import UpdateProfile from  './views/UpdateProfile.vue' ; 
import Lock from  './views/LockScreen.vue' ; 


const routes = [ 	

{
	path: '/', 
	component: Home
} , 

{
	path: '/pickup/parcels', 
	component: ParcelsToDeliver
} , 

{ 
	path: '/deliveries/today',
	component: TodaysDelivery
},
{ 
	path: '/deliveries/archived', 
	component: PendingDelivery  
}, 

{ 
	path: '/profile', 
	component: Profile  
}, 
{ 
	path: '/profile/update', 
	component: UpdateProfile  
},
{ 
	path: '/lock', 
	component: Lock  
}

];

export default new VueRouter({
	routes
});