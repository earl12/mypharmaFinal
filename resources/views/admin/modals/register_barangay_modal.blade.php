<div class="modal fade" id="addBarangayModal" tabindex="-1" role="dialog" aria-labelledby="addBarangayModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-popin" role="document">
		<div class="modal-content">
			<div class="block block-themed block-transparent mb-0">
				<div class="block-header bg-primary-dark">
					<h3 class="block-title">Register New Barangay</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
							<i class="si si-close"></i>
						</button>
					</div>
				</div>
				<div class="block-content">
					{{ Form::open(['id' => 'createBarangayForm', 'method'=>'POST', 'files' => 'true']) }} 

					<div class="form-group row">
						<div class="col-md-9">
							<div class="form-material">
								{!! Form::text('barangay_name', null, ['id'=>'barangay_name','class'=>'form-control name','placeholder'=>'']) !!}
								<label for="material-select">Brgy. Name</label>
							</div>
						</div>
					</div>


					<div class="form-group row">
						<div class="col-md-9">
							<div class="form-material">
								{!! Form::text('monthly_budget'	, null, ['id'=>'budget','class'=>'form-control budget','placeholder'=>'']) !!}
								<label for="material-text">Monthly Budget(PHP)</label>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-9">
							<div class="form-material">
								<input type="text" id="full_address" name="barangay_location" class="form-control" onclick="lookupGeoData();">							<label for="material-text">Location in the Map (Click on The Field) </label>
							</div>
						</div>
					</div>



					<div class="form-group row">

						<div class="col-md-9">

							<div class="form-material">
								<input type="file" class="form-control barangay_hall_photo" id="barangay_hall_photo" name="barangay_hall_photo" placeholder="(PHP)">
								<span class="danger">*If you don't have an image a default picture is uploaded.</span>
								<label for="material-text">Attach a Barangay Hall Photo </label>
							</div>

						</div>

					</div>


				</form>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
			<button type="button" id="registerBarangayBtn" class="btn btn-alt-success">
				<i class="fa fa-check"></i> Register
			</button>
		</div>
	</div>
</div>
</div>
