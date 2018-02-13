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
					<li class="active"><a href="#"><span>Senior Citizen Profile</span></a></li>

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
							<h6 class="panel-title txt-dark">Senior Citizen Profile</h6>
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
															<h6 class="txt-dark capitalize-font"><i class="icon-user mr-10"></i>Senior Citizen's Info</h6>
															<hr>
															<div class="row">
																<div class="col-md-3">
																	<div class="form-group">
																		<label class="control-label mb-10">SCN</label>
																		<input type="text" name="scn" class="form-control" value="{{$seniorinfos->scn}}">
																		<input type="hidden" name="budget" class="form-control" value="1000">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">First Name</label>
																		<input type="text" name="first_name" class="form-control" value="{{$seniorinfos->first_name}}">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Middle Name</label>
																		<input type="text" name="middle_name" class="form-control" value="{{$seniorinfos->middle_name}}">
																	</div>
																</div>
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Last Name</label>
																		<input type="text" name="last_name" class="form-control" value="{{$seniorinfos->last_name}}">
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Date Of Birth</label>
																		<input type="text" name="dob" class="form-control" value="{{$seniorinfos->dob}}">
																	</div>
																</div>
																<!--/span-->
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Address</label>
																		<input type="text" name="dob" class="form-control" value="{{$seniorinfos->address}}">
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
																		<input type="text" name="telephone" class="form-control" value="{{$seniorinfos->telephone}}">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Mobile #</label>
																		<input type="text" name="mobile" class="form-control" value="{{$seniorinfos->mobile}}">
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
										<h6 class="txt-dark capitalize-font"><i class="icon-user mr-10"></i>Senior Citizen's Medical Info</h6>
										<hr>
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form action = "{{ route('storeSeniorInfo') }}" method="POST" enctype="multipart/form-data">
														{!! Form::token() !!}  
														<div class="form-body">

															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-4 text-left">Genetic Conditions</label>
																		<textarea class="form-control" rows="5" name="genetic_condition">{{$seniorinfos->genetic_condition}}</textarea>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-4 text-left">Current Symptoms</label>
																		<textarea class="form-control" rows="5" name="current_symptom">{{$seniorinfos->current_symptom}}</textarea>
																	</div>
																</div>
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Are you taking any medication?</label>
																		<select name="taking_medication" class="form-control" value="{{$seniorinfos->taking_medication}}">
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
																		<select name="medication_allergies" class="form-control" value="{{$seniorinfos->medication_allergies}}">
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
																		<select name="tobacco_user" class="form-control" value="{{$seniorinfos->tobacco_user}}">
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
																		<select name="illegaldrug_user" class="form-control" value="{{$seniorinfos->illegaldrug_user}}">
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
										<h6 class="txt-dark capitalize-font"><i class="icon-user mr-10"></i>Senior Citizen's Medicine List</h6>
										<hr>
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<table class="table">
														<thead>
															<tr>
																<th>Medicine Name</th>
																<th>Dosage</th>
																<th>Qty</th>
																<th>Daily Frequency</th>
																<th class="column-spacer"></th>
																<th></th>
															</tr>
														</thead>
														@foreach($seniorinfos->dosages as $dosage)
														<tbody>
															<tr>
																<td>{{$dosage->form}}</td>
																<td>{{$dosage->dosage_name}}</td>
																<td>{{$dosage->pivot->qty}}</td>
																<td>{{$dosage->pivot->dailyfrequency}}</td>
															</tr>
														</tbody>
														@endforeach
													</table>
													<div class="form-actions mt-10">
														<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
															<div class="modal-dialog modal-lg">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																		<h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
																	</div>
																	<div class="modal-body">
																		<h5 class="mb-15">Overflowing text to show scroll behavior</h5>
																		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
																		<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
																	</div>
																</div>
																<!-- /.modal-content -->
															</div>
															<!-- /.modal-dialog -->
														</div>
														<button type="submit" class="btn btn-success  mr-10"> Request</button>
														<button type="submit" class="btn btn-success  mr-10" data-toggle="modal" data-target=".bs-example-modal-lg" > Update</button>

													</div>
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
