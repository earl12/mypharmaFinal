@extends('layouts.admin')

@section('title', 'Site Members')

@section('content')

<div class="content">
	<h2 class="content-heading">Users List</h2>
	<!-- Dynamic Table Full -->
	<div class="block">
		<div class="block-header block-header-default">
			<h3 class="block-title">Members List</h3>
		</div>
		<div class="block-content block-content-full">
			<!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
			<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
				<thead>
					<tr>
						<th class="text-center">Name</th>
						<th class="d-none d-sm-table-cell">Email</th>
						<th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
						<th class="text-center" style="width: 15%;">Profile</th>
					</tr>
				</thead>

				<tbody>
					@foreach($members as $member)
					<tr>
						<td class="text-center">{{ $member->name }} </td>
						<td class="font-w600">{{ $member->email }}</td>
						<td class="font-w600">{{ $member->role->name }}</td>
						<td class="text-center">
							<button href="" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Profile">
								<a href="{{ route('members.show', $member->id ) }}"> 
									<i class="fa fa-user" style="color : black ; "></i>
								</a>
							</button>
							<button type="button" class="btn btn-sm btn-danger" data-id="{{ $member->id }} " data-toggle="tooltip" title="Delete User">
								<i class="fa fa-remove"  "></i>
							</button>

							<button href="" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit User">
								<a href="{{ route('members.edit', $member->id ) }}"> 
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



@endsection


@section('js')

@endsection