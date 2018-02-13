@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')

<div class="content">
	<h2 class="content-heading">Edit User : {{ $user->name }} with a role of  {{ $user->role->name }} </h2>
	<div class="col-md-9">
		<div class="block block-themed">
			<div class="block-header bg-gd-sun">
				<h3 class="block-title logo-1">Fill up the form fields</h3>

				<div class="block-options">

					<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
						<i class="si si-refresh"></i>
					</button>

					<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>

				</div>
			</div>

			<div class="block-content">

				<form action="{{ route('members.update',$user->id) }}" method="POST" onsubmit="return false;">


					<div class="form-group row">

						<div class="col-9">

							<div class="form-group">

								<label for="mega-name">Full Name</label>
								<input type="text" class="form-control form-control-lg" value=" {{ $user->name }} " id="mega-firstname" name="full_name" placeholder="Enter your firstname..">

							</div>

						</div>


					</div>



					<div class="form-group row">


						<div class="col-9">
							<div class="form-group">
								<label for="mega-email">Email</label>
								<input type="text" class="form-control form-control-lg" value= "{{ $user->email }} " id="mega-lastname" name="email" placeholder="Enter your email..">
							</div>
						</div>
					</div>




					<div class="form-group row">

						<div class="col-9">
							<div class="form-group">

								<label for="mega-password">Password</label>
								<input type="password" class="form-control form-control-lg" value ="{{ $user->password }}" id="mega-username" name="password" placeholder="Enter your username..">
							</div>

						</div>


					</div>



					<div class="form-group row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-12" for="example-select">Member Type</label>
								<select class="form-control" name="role_id">
									
									<option value=""></option>

								</select>
							</div>
						</div>


					</div>


					@if ( $user->role_id == 2 )

					<div class="form-group row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-12" for="example-select">Barangay </label>
								<select class="form-control" id="barangay_id" name="barangay_id" >
									<option value="" selected></option>

								</select>
							</div>
						</div>


					</div>



					@endif



					<div class="form-group row">
						<div class="col-12">
							<button type="submit" class="btn btn-alt-primary">
								<i class="fa fa-check mr-5"></i> Complete Profile
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
		<!-- END Mega Form -->
	</div>


	@endsection


	@section('js')
	<script>
		$(function(){
			$('select[name="role_id"]').on('change', function () {
				var addBarangayDiv = $('div#add_barangay_id');
				if ($(this).val() == 2)
				{
					addBarangayDiv.hide();
					addBarangayDiv.find('select').val('');

				} else {
					addBarangayDiv.show();

				}
			});
		})
		
	</script>

	@endsection