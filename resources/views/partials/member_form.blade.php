<div class="form-group row" id="form-group-name">
	<div class="col-md-9">
		<div class="form-material ">
			<input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" id="name" name="name">
			<label for="register6-firstname">Username (can also be used for logging in) </label>

			@if ($errors->has('email'))
			
			<span class="help-block">
				<strong>{{ $errors->first('name') }}</strong>
			</span>
			
			@endif

		</div>

	</div>
	
</div>

<div class="form-group row" id="form-group-email">
	<div class="col-md-9">
		<div class="form-material">

			<input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" id="emailInput" name="email">

			<label for="register6-firstname">Email <span class="availability"></span>  </label>
		</div>
	</div>
</div>


<div class="form-group row">
	<div class="col-md-9">
		<div class="form-material">
			<input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="material-password" name="password" placeholder="Please enter your password">
			<label for="material-password">Password</label>
		</div>
	</div>
</div>



<div class="form-group row role_id" id="form-group-role">
	<div class="col-md-9">
		<div class="form-material">
			{{-- {!! Form::select('role_id', $roles->title, ['class' => 'form-control','id' => 'material-select']) !!} --}}
			<select name="role_id" id="role_id" class="form-control {{ $errors->has('role_id') ? 'is-invalid' : '' }}" > 
				@foreach ($roles as $role) 
				<option value="{{ $role->id }}">{{ $role->name }}</option>
				@endforeach
			</select>

			<label for="material-select">Member Type</label>
		</div>
	</div>
</div>

<div class="form-group row member_status" id="form-group-status">
	<div class="col-md-9">
		<div class="form-material">
			{{-- {!! Form::select('role_id', $roles->title, ['class' => 'form-control','id' => 'material-select']) !!} --}}
			<select name="status" id="status-text" class="form-control" > 
				<option value="active">Activate</option>
				<option value="inactive">Pending</option>
			</select>
			<label for="material-select">Member Status</label>
		</div>
	</div>
</div>


<div class="form-group row add_barangay_id" id="form-group-barangay">
	<div class="col-md-9">
		<div class="form-material">
			{{-- {!! Form::select('role_id', $roles->title, ['class' => 'form-control','id' => 'material-select']) !!} --}}
			<select name="barangay_id" id="barangay_id" class="form-control" > 
				<option value="">Choose one below..</option>
				@foreach ($barangays as $barangay ) 
				<option class="selection "value="{{ $barangay->id }}">{{ $barangay->name }}</option>
				@endforeach
			</select>
			<label for="material-select">Assign Barangay</label>
		</div>
	</div>
</div>

