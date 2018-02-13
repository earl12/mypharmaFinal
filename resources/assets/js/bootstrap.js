import axios from 'axios';

import Vue from 'vue';

import VueRouter from 'vue-router';

import Echo from 'laravel-echo';



window.Vue = Vue;

window.axios = axios;

window.axios.defaults.headers.common = {

	'X-Requested-With': 'XMLHttpRequest'

};

window.Pusher = require('pusher-js');


Vue.use(VueRouter);


window.Echo = new Echo({
	broadcaster: 'pusher',
	key: '2844d183920ccddbfee7',
	cluster : 'ap1',	 
	encrypted : true
});







