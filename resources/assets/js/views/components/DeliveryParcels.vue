<template>

	<div class="todo animated fadeinright delay-1" id="test1" >
		
		<p class="todo-element" v-for="(parcel,index) in parcels">

			<input id="todo1" type="checkbox">

			<label for="todo1">{{ parcel.customer_parcel_id }} </label> 

			<span> Dosage #{{ parcel.product_id }} -  {{ parcel.quantity }} pcs</span>


		</p>	

<!-- 		<p class="todo-element">
			<input checked id="todo2" type="checkbox"> <label for="todo2">#3</label> 
			<span>Item#1- 5pcs</span>
			<span>Item#2- 3pcs</span>
		</p>

	-->
</div>

</template>

<script>


export default {


	name: 'DeliveryParcels',

	data () {
		return {
			parcels : [] , 
			check : false
		};
	}, 

	methods : { 

		fetch(){
			
			axios.get('/api/v1/parcels/to-deliver')
			.then(response => this.parcels = response.data)
			.catch(error => console.log(error.response.data));
		} , 



		completed(){
			this.check= true ; 
		}



	} ,


	created(){
		this.fetch(); 
	}
};
</script>

<style lang="css" scoped>



</style>