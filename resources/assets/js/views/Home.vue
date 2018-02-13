<template>


	<div>
		<h3></h3>

		<sales-charts></sales-charts>
		<delivery-reports></delivery-reports>





		<app-footer></app-footer>

	</div>




</template>

<script>

import SalesCharts from './components/SalesCharts.vue';

import DeliveryReports from './components/DeliveryReports.vue';

export default {

	name: 'Home',

	components : { SalesCharts , DeliveryReports} , 

	data () {
		return {

		};
	}
};
</script>

<style lang="css" scoped>
</style>