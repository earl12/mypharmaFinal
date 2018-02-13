<template>
	<div class="page animated fadeinright">

		<!-- Hero Header -->
		<div class="hero-header hero-big bg-v-4">
			<div class="about animated fadeinright delay-1">
				<img class="avatar" :src="avatar"></img>
				<h2 class="white-text m-0">John Harrison</h2>
				<p class="white-text m-0">Blogger / Stylist / Photographer.</p>
				<a class="waves-effect waves-light btn primary-color m-20" href="profile.html">Follow</a>
			</div>
		</div>

		<!-- Transactions Counter -->
		<div class="row m-0">
			<div class="col s4 p-20 center">
				<h4 class="m-0"><strong>350</strong></h4>
				<p class="m-0 grey-text small">Followers</p>
			</div>
			<div class="col s4 p-20 center">
				<h4 class="m-0"><strong>120</strong></h4>
				<p class="m-0 grey-text small">Pins</p>
			</div>
			<div class="col s4 p-20 center">
				<h4 class="m-0"><strong>846</strong></h4>
				<p class="m-0 grey-text small">Like</p>
			</div>
		</div>

		<!-- Profile Contents -->
		<ul class="tabs border-top animated fadeinup delay-2">
			<li class="tab col s3"><a class="active" href="#transactions">Post</a></li>
			<li class="tab col s3"><a class="active" href="#basic-information">Your Information</a></li>
		</ul>

		<div id="post">
			<transaction-reports></transaction-reports>
		</div>

		<div id="about" class="p-20">
			<profile-information></profile-information>

		</div>

		<app-footer></app-footer>

	</div>


</template>

<script>

import TransactionReports from './components/TransactionReports.vue';

import ProfileInformation from './components/ProfileInformation.vue';

export default {

	name: 'Profile',

	data () {
		return {

			avatar : ''

		};
	} ,

	components : { TransactionReports , ProfileInformation }
};


</script>

<style lang="css" scoped>
</style>