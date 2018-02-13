<div class="row row-deck gutters-tiny">
	<!-- Billing Address -->
	<div class="col-md-6">
		<div class="block block-rounded">
			<div class="block-header block-header-default">
				<h3 class="block-title">Billing Address</h3>
			</div>

			@if(is_null($member->info))

			<p>No information yet</p>

			@else



			<div class="block-content">
				<div class="font-size-lg text-black mb-5">{{ $member->info->first_name }}</div>


				{{-- @foreach($member $as member) --}}


				<address>
					<br>
					{{ $member->info->first_name }}
					<br>
					United States<br><br>
					<i class="fa fa-phone mr-5"></i> (999) 111-222222<br>
					<i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)">company@example.com</a>
				</address>

			</div>


			@endif

			<div class="col-md-6">
				<div class="block block-rounded">
					<div class="block-header block-header-default">
						<h3 class="block-title">Shipping Address</h3>
					</div>
					<div class="block-content">
						<div class="font-size-lg text-black mb-5">{{ $member->name }}</div>
						<address>
							5110 8th Ave<br>
							New York 11220<br>
							United States<br><br>
							<i class="fa fa-phone mr-5"></i> (999) 111-222222<br>
							<i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)">company@example.com</a>
						</address>
					</div>
				</div>
			</div>



		</div>
	</div>
	<!-- END Billing Address -->

	<!-- Shipping Address -->
	

	<!-- END Shipping Address -->
</div>


