<div class="modal fade" id="addMedicineModal" tabindex="-1" role="dialog" aria-labelledby="addMedicineModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-popin" role="document">
		<div class="modal-content">
			<div class="block block-themed block-transparent mb-0">
				<div class="block-header bg-primary-dark">
					
					<h3 class="block-title">Create New Medicine Dosage</h3>
					
					<div class="block-options">
						<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
							<i class="si si-close"></i>
						</button>
					</div>
				</div>
				<div class="block-content">
					{{ Form::open(['id' => 'addMedicineForm', 'method'=>'POST', 'files' => 'true']) }} 

					<div class="form-group row">
						<div class="col-md-9">
							<div class="form-material">
								<select class="form-control generic_name" id="material-select" name="medicine_id">
									@foreach ( $medicines as $item ) 
									<option value="{{ $item->id }}">{{ $item->generic_name }}</option>
									@endforeach
								</select>

								<label for="material-select">Generic Name</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-9">
							<div class="form-material">
								<input type="text" class="form-control dosage_volume" id="dosage_volume" name="dosage_volume" placeholder="5mg">
								<label for="material-text">Dosage Volume</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-9">
							<div class="form-material">
								<input type="text" class="form-control dosage_form" id="dosage_form" name="dosage_form" placeholder="Tablet. Capsule.">
								<label for="material-text">in Form of..</label>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-9">
							<div class="form-material">
								<input type="text" class="form-control price" id="price" name="price" placeholder="(PHP)">
								<label for="material-text">Price</label>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-9">
							<div class="form-material">
								<input type="file" class="form-control price" id="photo" name="photo" placeholder="">
								<span class="text-danger">*If you don't have an image a default picture is uploaded.</span>
								<label for="material-text">Attach a Photo </label>
							</div>
						</div>
					</div>


				</form>
			</div>
		</div>

		
		<div class="modal-footer">
			<button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
			<button type="button" id="storeMedicineBtn" class="btn btn-alt-success">
				<i class="fa fa-check"></i> Store this Medicine Dosage
			</button>
		</div>

	</div>
</div>
</div>
