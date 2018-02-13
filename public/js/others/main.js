Vue.component('dosage-listings',{
	template : `<ul class="collection">
	<li v-for="dosage in dosages" class="collection-item"></li></ul>`,
	data : function () {
		return {
			dosages : []
		}
	}, 
	methods  {
		showDosages() {
			axios.get('/dosages')
		}
	} , 

});



Vue.component('dosages',{
	template : `<input type="text" v-model="message" v-on:keyup.enter="showReversedMessage"/>` ,
	data () {
		return {
			message : ''
		}

	} , 


	computed : {
		reversedMessage(){
			this.message.split('').reverse().join('')
		}
	} ,

	methods : {
		showReversedMessage() {
			console.log(this.reversedMessage());
		}

	}

});




Vue.filter('capitalize',function(){ 

});


new Vue({
	el : '#app' 	
});