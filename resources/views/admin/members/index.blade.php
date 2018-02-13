@extends('layouts.admin')

@section('title', 'Site Members')

@section('content')

<div class="content">
	<div class="block">
		<div class="block-header block-header-default">
			{{-- <h3 class="block-title logo-1">Members List</h3> --}}
			<button class="btn btn-success" >Add Member</button>
		</div>


		<div class="block-content block-content-full">
			<!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
			<table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
				<thead>

					<tr>

						<th class="text-center">Member Unique ID</th>

						<th class="text-center">Name</th>
						<th class="d-none d-sm-table-cell">Email</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Actions</th>

					</tr>

				</thead>
				
				<tbody>
					
					@include('partials.members_list')

				</tbody>

			</table>

		</div>
	</div>
</div>



{{-- @include('admin.modals.add_user_modal') --}}

@endsection


@section('js')


<script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }} "></script>
<script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }} "></script>
<script src="{{ asset('assets/js/pages/be_tables_datatables.js') }} "></script>


<script>

	$(document).on('click', '#deleteUser', function () {
		var id = $(this).data('id');
		var name = $(this).data('name');

		console.log(id);

		swal({
			title: "Are you sure?",
			text: "Once deleted, all this user's transactions will be removed!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {

				deleteUser(urlDeleteUser,id) ; 

			} else {
				swal("That User was not deleted");
			}
		});


	});

</script>




@endsection