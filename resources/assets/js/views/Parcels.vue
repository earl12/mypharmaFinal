<template>

	<div class="page grey lighten-4 animated fadeinright">


		<div class="hero-header bg-5 animated fadeinright">
			<div class="hero-title">Parcels To Pickup</div>
		</div>

		<delivery-parcels></delivery-parcels>


	</div> 

</template>

<script>

import DeliveryParcels from './components/DeliveryParcels.vue' ; 

export default {

	name: 'Dashboard',

	data () {
		return {

		};
	} , 


	components: { DeliveryParcels }
};

</script>

<style lang="css" scoped>
</style>