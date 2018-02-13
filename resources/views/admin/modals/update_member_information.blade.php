<div class="modal fade" id="updateInformationModal" tabindex="-1" role="dialog" aria-labelledby="updateInformationModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-popin" role="document">
		<div class="modal-content">
			<div class="block block-themed block-transparent mb-0">
				<div class="block-header bg-primary-dark">
					<h3 class="block-title">Profile Information</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
							<i class="si si-close"></i>
						</button>
					</div>
				</div>
				<div class="block-content">
					{{ Form::open(['id' => 'createBarangayForm', 'method'=>'POST', 'files' => 'true']) }} 


					@if ( $user->role_id == 1)


					@include('admin.partials.admin_information')
					

					@else

					@include('admin.partials.profile_information')

					@endif

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
