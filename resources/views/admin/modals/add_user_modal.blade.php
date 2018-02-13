<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-popin" role="document">
		<div class="modal-content">
			<div class="block block-themed block-transparent mb-0">
				<div class="block-header bg-primary-dark">
					<h3 class="block-title">Register New User</h3>

					<div class="block-options">
						<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
							<i class="si si-close"></i>
						</button>
					</div>
				</div>

				<div class="block-content">

					{{ Form::open(['id' => 'createUserForm', 'method'=>'POST']) }} 

					@include('partials.member_form')

					{{ Form::close() }}

				</div>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
				<button type="button" id="registerUser" class="btn btn-alt-success">
					<i class="fa fa-check"></i> Register
				</button>
			</div>
		</div>
	</div>
</div>