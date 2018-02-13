<template>
	<div class="form-inputs p-20">
		<h4>Customer Information</h4>
		<h4 class="shipping-address">Update Account Information</h4>

		<div>

			<div class="input-field">
				<i class="ion-ios-email-outline prefix"></i>
				<input id="email" type="email" class="validate" placeholder="email">
			</div>
			<div class="input-field">
				<input id="first_name" type="text" class="validate">
				<label for="first_name">First Name</label>
			</div>
			<div class="input-field">
				<input id="last_name" type="text" class="validate">
				<label for="last_name">Last Name</label>
			</div>
		</div>

		
		<div class="input-field">
			<input id="company" type="text">
			<label for="company">Company (optional)</label>
		</div>
		<div class="input-field">
			<input id="address" type="text" class="validate">
			<label for="address">Address</label>
		</div>
		<div class="input-field">
			<input id="apt" type="text">
			<label for="apt">Apt, suite, etc (optional)</label>
		</div>
		<div class="input-field">
			<input id="city" type="text" class="validate">
			<label for="city">City</label>
		</div>
		<div class="input-field">
			<input id="phone" type="number" class="validate">
			<label for="phone">Phone</label>
		</div>

		
		<label>Shipping to:</label>
		<select class="browser-default">
			<option value="" disabled selected>--</option>
			<option value="1">Europe</option>
			<option value="2">America</option>
			<option value="3">Asia</option>
			<option value="4">Australia</option>
			<option value="5">Africa</option>
		</select>




		<a class="waves-effect waves-light btn-large primary-color block" @click="saveProfile">Save Profile</a>


	</div>




</template>

<script>
export default {

	name: 'Profile',

	data () {
		return {

		};
	} ,


	methods : { 

		saveProfile(){

		}

	}
};
</script>

<style lang="css" scoped>
</style>