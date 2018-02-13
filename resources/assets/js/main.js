import './bootstrap';


Vue.component('tasks',require('./views/components/Tasks.vue'));

var vm = new Vue({
	el: "#app"
});