@extends('layouts.admin')

@section('title', 'Registered Barangays')

@section('content')

<div class="content">
	<div class="block">

		<div class="block-header block-header-default">
			<h3 class="block-title">Barangays</h3>
		</div>

		<div class="block-content block-content-full">
			<!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
			<table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
				<thead>
					<tr>
						<th class="text-center">Barangay ID</th>

						<th class="text-center">Name</th>
						<th class="d-none d-sm-table-cell text-center">Monthly Budget</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Location</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Actions</th>

					</tr>
				</thead>
				<tbody>
					@foreach($barangays as $barangay)
					<tr>
						<td class="text-center">{{ $barangay->id }} </td>
						<td class="text-center">{{ $barangay->name }} </td>
						<td class="text-center">{{ $barangay->monthly_budget }} </td>


						<td class="text-center"><a href="" onclick="showLocation">Show Location</a></td>
						<td class="text-center">
							<button href="" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Profile">
								<a href="{{ route('barangays.show', $barangay->id ) }}"> 
									<i class="fa fa-user" style="color : black ; "></i>
								</a>
							</button>

							<button href="" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit Barangay">
								<a href="{{ route('barangays.edit', $barangay->id ) }}"> 
									<i class="fa fa-edit" style="color : #fff ; "></i>
								</a>
							</button>
						</td>


					</tr>
					@endforeach
				</tbody>
			</table>

		</div>
	</div>
</div>


<!-- From Left Modal -->
<div class="modal fade" id="modal-fromleft" tabindex="-1" role="dialog" aria-labelledby="modal-fromleft" aria-hidden="true">
	<div class="modal-dialog modal-dialog-fromleft" role="document">
		<div class="modal-content">
			<div class="block block-themed block-transparent mb-0">
				<div class="block-header bg-primary-dark">
					<h3 class="block-title">Terms &amp; Conditions</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
							<i class="si si-close"></i>
						</button>
					</div>
				</div>
				<div class="block-content">
					<p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
					<p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-alt-success" data-dismiss="modal">
					<i class="fa fa-check"></i> Perfect
				</button>
			</div>
		</div>
	</div>
</div>
<!-- END From Left Modal -->




@endsection


@section('js')

<script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }} "></script>
<script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }} "></script>

<!-- Page JS Code -->
<script src="{{ asset('assets/js/pages/be_tables_datatables.js') }} "></script>


@endsection