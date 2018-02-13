@extends('layouts.admin')

@section('title', 'Edit Profile')

@section('content')
<div class="col-md-12">
	<!-- Static Labels -->
	<div class="block">
		<div class="block-header block-header-default">
			<h3 class="block-title logo-1">Update Fields Below</h3>
			<div class="block-options">
				<button type="button" class="btn-block-option">
					<i class="si si-wrench"></i>
				</button>
			</div>
		</div>

		<div class="block-content">

			<form action="{{ route('updateUserProfile', $user->id ) }}" method="POST">

				<div class="form-group row">
					<div class="col-md-4">
						<div class="form-material">
							<input type="text" class="form-control" id="first_name" value="{{ $user->info->first_name }} " name="first_name" placeholder="">
							<label for="material-text">First Name</label>
						</div>
					</div>
				</div>


				<div class="form-group row">
					<div class="col-md-4">
						<div class="form-material">
							<input type="text" class="form-control" id="middle_name" value="{{ $user->info->middle_name }} " name="middle_name" placeholder="">
							<label for="material-text">Middle Name</label>
						</div>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-4">
						<div class="form-material">
							<input type="text" class="form-control" id="last_name" value="{{ $user->info->last_name }} " name="last_name" placeholder="">
							<label for="material-text">Last Name</label>
						</div>
					</div>
				</div>


				<div class="form-group row">
					<div class="col-md-9">
						<div class="form-material">
							<input type="text" class="form-control" id="first_name" value="{{ $user->info->work_address }} " name="first_name" placeholder="">
							<label for="material-text">Work Address</label>
						</div>
					</div>
				</div>


				<div class="form-group row">
					<div class="col-md-9">
						<div class="form-material">
							<input type="text" class="form-control" id="home_address" value="{{ $user->info->postal_code }} " name="home_address" placeholder="">
							<label for="material-text">Home Address</label>
						</div>
					</div>
				</div>


				<div class="form-group row">
					<div class="col-md-9">
						<div class="form-material">
							<input type="text" class="form-control" id="mobile_phone" value=" {{ $user->info->mobile_phone }} " name="mobile_phone" placeholder="">
							<label for="material-text">Mobile Phone</label>
						</div>
					</div>
				</div>



				<div class="form-group row">
					<div class="col-md-9">
						<div class="form-material">
							<input type="text" class="form-control" id="telephone" value="{{ $user->info->telephone }}" name="telephone" placeholder="">
							<label for="material-text">Telephone</label>
						</div>
					</div>
				</div>



				<div class="form-group row">
					<div class="col-md-9">
						<div class="form-material">
							<input type="text" class="form-control" id="company" value="{{ $user->info->company }}" name="company" placeholder="">
							<label for="material-text">Company Name</label>
						</div>
					</div>
				</div>



				<div class="form-group row">
					<div class="col-md-9">
						<div class="form-material">
							<input type="email" class="form-control" id="alternate_email" value="{{ $user->info->alternate_email }}" name="alternate_email" placeholder="">
							<label for="material-text">Alternate Email</label>
						</div>
					</div>
				</div>




				<div class="form-group row">
					<div class="col-md-9">
						<div class="form-material">
							<input type="text" class="form-control" id="emergency_contact" value="{{ $user->info->emergency_contact }}" name="emergency_contact" placeholder="">
							<label for="material-text">Emergency Contact</label>
						</div>
					</div>
				</div>


				<div class="form-group row">
					<div class="col-md-9">
						<div class="form-material">
							<input type="text" class="form-control" id="emergency_contact_number" value="{{ $user->info->emergency_contact_number }}" name="emergency_contact_number" placeholder="">
							<label for="material-text">Emergency Contact Number</label>
						</div>
					</div>
				</div>



				<div class="form-group row">
					<div class="col-md-3">


						<img src="" alt="">

						<div class="form-material">
							<input type="file" class="form-control" id="emergency_contact_number" value="{{ $user->info->emergency_contact_number }}" name="photo" placeholder="">
							<label for="material-text">Update your Current Profile Photo</label>
						</div>
					</div>	
				</div>


				<div class="form-group row">
					<div class="col-md-9">
						<button type="submit" class="btn btn-primary btn-square">Submit</button>
					</div>
				</div>
			</form>


		</div>
	</div>
	<!-- END Static Labels -->
</div>


</div>
@endsection