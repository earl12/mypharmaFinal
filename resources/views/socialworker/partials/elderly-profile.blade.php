<div class="page-wrapper">
	<div class="container-fluid">
		<!-- Title -->
		<div class="row heading-bg bg-blue">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h5 class="txt-light">myPharma</h5>
			</div>
			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="#">Social Worker</a></li>
					<li><a href="#">Dashboard</a></li>
					<li class="active"><a href="#"><span>Elderly Profile</span></a></li>

				</ol>
			</div>
			<!-- /Breadcrumb -->
		</div>
		<!-- /Title -->

		<!-- Row -->
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Elderly Profile</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<p class="text-muted"><code></code> </p>
							<div  class="tab-struct mt-40">
								<ul role="tablist" class="nav nav-tabs" id="myTabs_1">
									<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="home_tab_1" href="#personal_info">Personal Information</a></li>
									<li role="presentation" class=""><a  data-toggle="tab" id="profile_tab_1" role="tab" href="#medical_info" aria-expanded="false">Medical Information</a></li>
									<li role="presentation" class=""><a  data-toggle="tab" id="profile_tab_2" role="tab" href="#medicine_list" aria-expanded="false">Medicine List</a></li>
								</ul>
								<div class="tab-content" id="myTabContent_1">
									<div  id="personal_info" class="tab-pane fade active in" role="tabpanel">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form action = "{{ route('updateElderlyProfile') }}" method="POST" enctype="multipart/form-data">
														{!! Form::token() !!}  
														<div class="form-body">
															<h6 class="txt-dark capitalize-font"><i class="icon-user mr-10"></i>Elderly's Info</h6>
															<hr>
															<div class="row">
																<div class="col-md-3">
																	<div class="form-group">
																		<label class="control-label mb-10">SCN</label>
																		<input type="text" name="scn" class="form-control" value="{{$elderly_infos->scn}}">
																		<input type="hidden" name="budget" class="form-control" value="1000">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">First Name</label>
																		<input type="text" name="first_name" class="form-control" value="{{$elderly_infos->first_name}}">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Middle Name</label>
																		<input type="text" name="middle_name" class="form-control" value="{{$elderly_infos->middle_name}}">
																	</div>
																</div>
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Last Name</label>
																		<input type="text" name="last_name" class="form-control" value="{{$elderly_infos->last_name}}">
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Date Of Birth</label>
																		<input type="text" name="dob" class="form-control" value="{{$elderly_infos->dob}}">
																	</div>
																</div>
																<!--/span-->
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Address</label>
																		<input type="text" name="dob" class="form-control" value="{{$elderly_infos->address}}">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Gender</label>
																		<select name="gender" class="form-control">
																			<option value="Male">Male</option>
																			<option value="Female">Female</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Telephone #</label>
																		<input type="text" name="telephone" class="form-control" value="{{$elderly_infos->telephone}}">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Mobile #</label>
																		<input type="text" name="mobile" class="form-control" value="{{$elderly_infos->mobile}}">
																	</div>
																</div>
															</div>
														</div>
														<div class="form-actions mt-10">
															<button type="submit" class="btn btn-success  mr-10"> Save</button>
															<button type="button" class="btn btn-default">Cancel</button>
														</div>
														@include('errors.list')
													</form>
												</div>
											</div>
										</div>
									</div>
									<div  id="medical_info" class="tab-pane fade" role="tabpanel">
										<h6 class="txt-dark capitalize-font"><i class="icon-user mr-10"></i>Elderly's Medical Info</h6>
										<hr>
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form action = "{{ route('storeElderlyMedicalInfo') }}" method="POST" enctype="multipart/form-data">
														{!! Form::token() !!}  
														<div class="form-body">

															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-4 text-left">Genetic Conditions</label>
																		<textarea class="form-control" rows="5" name="genetic_condition" value="{{$elderly_infos->elderlymedicalinfos->genetic_condition}}"></textarea>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-4 text-left">Current Symptoms</label>
																		<textarea class="form-control" rows="5" name="current_symptom"></textarea>
																	</div>
																</div>
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Are you taking any medication?</label>
																		<select name="taking_medication" class="form-control">
																			<option value="1">Yes</option>
																			<option value="0">No</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Do you have any medication allergies?</label>
																		<select name="medication_allergies" class="form-control">
																			<option value="1">Yes</option>
																			<option value="0">No</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Do you smoke?</label>
																		<select name="tobacca_user" class="form-control">
																			<option value="1">Yes</option>
																			<option value="0">No</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Do you have a history of taking illegal drugs?</label>
																		<select name="illegaldrug_user" class="form-control">
																			<option value="1">Yes</option>
																			<option value="0">No</option>
																		</select>
																	</div>
																</div>
															</div>
															<!-- /Row -->


															<!-- /Row -->
														</div>
														<div class="form-actions mt-10">
															<button type="submit" class="btn btn-success  mr-10"> Save</button>
															<button type="button" class="btn btn-default">Cancel</button>
														</div>
														@include('errors.list')
													</form>
												</div>
											</div>

											


										</div>

									</div>
									<div  id="medicine_list" class="tab-pane fade " role="tabpanel">
										<h6 class="txt-dark capitalize-font"><i class="icon-user mr-10"></i>Elderly's Medicine List</h6>
										<hr>
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<table class="table">
														<thead>
															<tr>
																<th class="table-image"></th>
																<th>Medicine Name</th>
																<th>Dosage</th>
																<th>Qty</th>
																<th>Amount</th>
																<th class="column-spacer"></th>
																<th></th>
															</tr>
														</thead>
													
														<tbody>
														
														</tbody>
														
													</table>
													<div class="spacer"></div>		
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
