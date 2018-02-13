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
					<li><a href="#">Client</a></li>
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
																		<input type="text" name="scn" class="form-control" value="{{Auth::user()->name}}">
																		<input type="hidden" name="budget" class="form-control" value="1000">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">First Name</label>
																		<input type="text" name="first_name" class="form-control" value="">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Middle Name</label>
																		<input type="text" name="middle_name" class="form-control" value="">
																	</div>
																</div>
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Last Name</label>
																		<input type="text" name="last_name" class="form-control" value="">
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Date Of Birth</label>
																		<input type="text" name="dob" class="form-control" value="">
																	</div>
																</div>
																<!--/span-->
															</div>
															<!-- /Row -->
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Gender</label>
																		<select name="gender" class="form-control">
																			<option value="Male">Male</option>
																			<option value="Female">Female</option>
																		</select>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Email</label>
																		<input type="text" name="personal_email" class="form-control" value="">
																	</div>
																</div>
																<!--/span-->
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Telephone #</label>
																		<input type="text" name="telephone" class="form-control" value="">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Mobile #</label>
																		<input type="text" name="mobile" class="form-control" value="">
																	</div>
																</div>
															</div>
															<!-- /Row -->
															
															<div class="seprator-block"></div>
															
															<h6 class="txt-dark capitalize-font"><i class="icon-notebook mr-10"></i>address</h6>
															<hr>
															<div class="row">
																<div class="col-md-12 ">
																	<div class="form-group">
																		<label class="control-label mb-10">Street</label>
																		<input type="text" name="street_name" class="form-control" value="">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Place of Birth</label>
																		<input type="text" name="placeOfBirth" class="form-control" value="">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">House Number</label>
																		<input type="text" name="house_number" class="form-control" value="">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">City</label>
																		<select name="city" class="form-control">
																			<option>--Select your City--</option>
																			<option>Cebu</option>
																			<option>Talisay</option>
																			<option>Lapu-lapu</option>
																		</select>
																	</div>
																</div>
																<!--/span-->
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-10">Barangay</label>
																		<select name="barangay" class="form-control">
																			<option>--Select your Barangay--</option>
																			<option>Basak Pardo</option>
																			<option>Tisa</option>
																			<option>Lahug</option>
																		</select>
																	</div>
																</div>
																<!--/span-->
															</div>
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
									<div  id="medical_info" class="tab-pane fade" role="tabpanel">
										<div class="row">
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">
													<form action = "{{ route('storeElderlyMedicalInfo') }}" method="POST" enctype="multipart/form-data">
														{!! Form::token() !!}  
														<div class="form-body">
															<h6 class="txt-dark capitalize-font"><i class="icon-user mr-10"></i>Elderly's Medical Info</h6>
															<hr>
															<div class="row">
																<div class="col-md-3">
																	<div class="form-group">
																		<input type="hidden" name="elderly_info_id" class="form-control" value="">
																		<input type="hidden" name="scn" class="form-control" value="">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label mb-4 text-left">Genetic Conditions</label>
																		<textarea class="form-control" rows="5" name="genetic_condition" value=""></textarea>
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

										<h6 class="txt-dark capitalize-font"><i class="icon-user mr-10"></i>Elderly's Medicine Info</h6>
										<hr>

										@if (session()->has('success_message'))
										<div class="alert alert-success">
											{{ session()->get('success_message') }}
										</div>
										@endif

										@if (session()->has('error_message'))
										<div class="alert alert-danger">
											{{ session()->get('error_message') }}
										</div>
										@endif

										@if (sizeof(Cart::content()) > 0)

										<table class="table">
											<thead>
												<tr>
													<th class="table-image"></th>
													<th>Product</th>
													<th>Quantity</th>
													<th>Price</th>
													<th class="column-spacer"></th>
													<th></th>
												</tr>
											</thead>

											<tbody>
												@foreach (Cart::content() as $item)
												<tr>
													<td class="table-image"><a href="{{ url('shop', [$item->model->slug]) }}"><img src="{{ asset('img/' . $item->model->image) }}" alt="product" class="img-responsive cart-image"></a></td>
													<td><a href="{{ url('shop', [$item->model->slug]) }}">{{ $item->name }}</a></td>
													<td>
														<select class="quantity" data-id="{{ $item->rowId }}">
															<option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
															<option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
															<option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
															<option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
															<option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
														</select>
													</td>
													<td>&#8369;{{ $item->subtotal }}</td>
													<td class=""></td>
													<td>
														<form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
															{!! csrf_field() !!}
															<input type="hidden" name="_method" value="DELETE">
															<input type="submit" class="btn btn-danger btn-sm" value="Remove">
														</form>
													</td>
												</tr>

												@endforeach
												<tr>
													<td class="table-image"></td>
													<td></td>
													<td class="small-caps table-bg" style="text-align: right">Subtotal</td>
													<td>&#8369;{{ Cart::instance('default')->subtotal() }}</td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td class="table-image"></td>
													<td></td>
													<td class="small-caps table-bg" style="text-align: right">Tax</td>
													<td>&#8369;{{ Cart::instance('default')->tax() }}</td>
													<td></td>
													<td></td>
												</tr>

												<tr class="border-bottom">
													<td class="table-image"></td>
													<td style="padding: 40px;"></td>
													<td class="small-caps table-bg" style="text-align: right">Your Total</td>
													<td class="table-bg">&#8369;{{ Cart::total() }}</td>
													<td class="column-spacer"></td>
													<td></td>
												</tr>

											</tbody>
										</table>

										<a href="{{ route('showmedicinelist') }}" class="btn btn-primary btn-lg">Search for Medicines</a> &nbsp;
										<a href="#" class="btn btn-success btn-lg">Save Current Medicine List</a>

										<div style="float:right">
											<form action="{{ route('getElderlyProfile') }}" method="POST">
												{!! csrf_field() !!}
												<input type="hidden" name="_method" value="DELETE">
												<input type="submit" class="btn btn-danger btn-lg" value="Remove Current List">
											</form>
										</div>

										@else

										<h3>You have no current medicines listed.</h3>
										<a href="{{ route('showmedicinelist') }}" class="btn btn-primary btn-lg">Search for Medicines</a>

										@endif

										<div class="spacer"></div>

									</div>
								</div>
								<div id="dropdown_2" class="tab-pane fade" role="tabpanel">
									<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var getElderlyProfile = '{{ route('getElderlyProfile') }}';
</script>