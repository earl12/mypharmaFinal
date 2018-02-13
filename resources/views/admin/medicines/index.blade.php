@extends('layouts.admin')

@section('title', 'Medicine Inventory')

@section('content')

<div class="content">
	<h2 class="content-heading">
		<button type="button" class="btn btn-success min-width-125 " data-toggle="modal" data-target="#modal-fromleft">Add New Medicine</button>
	</h2>

	<div class="block">

		<div class="block-header block-header-default">
			<h3 class="block-title">Medicines</h3>
		</div>

		<div class="block-content block-content-full">
			<!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
			<table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
				<thead>
					<tr>
						<th class="text-center">Medicine Dosage ID</th>
						<th class="text-center">Treatment For</th>
						<th class="d-none d-sm-table-cell text-center">Generic Name</th>
						<th class="d-none d-sm-table-cell text-center">Form of..</th>
						<th class="d-none d-sm-table-cell text-center">Price</th>
						<th class="d-none d-sm-table-cell text-center">Product Photo</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Actions</th>
					</tr>
				</thead>
			</table>
		</div>

	</div>

</div>



@endsection


@section('js')

<script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }} "></script>
<script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }} "></script>

<!-- Page JS Code -->
<script src="{{ asset('assets/js/pages/be_tables_datatables.js') }} "></script>


@endsection