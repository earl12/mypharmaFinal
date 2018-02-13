import './bootstrap';

import router from './routes';


// import App from '../Courier.vue' ; 


Vue.component('app-footer',require('./views/components/Footer.vue'));
Vue.component('user-avatar',require('./components/Avatar.vue'));

const app = new Vue({
	el :'#main',
	router 
});	



