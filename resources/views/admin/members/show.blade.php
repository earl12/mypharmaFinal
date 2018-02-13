@extends('layouts.admin')

@section('title', 'Member Info')

@section('content')
<!-- Hero -->
<div class="bg-gd-sun">
	<div class="bg-black-op-25">
		<div class="content content-top content-full text-center">
			<div class="mb-20">
				<a class="img-link" href="be_pages_ecom_customer.html">
					<img class="img-avatar img-avatar-thumb" src="{{ asset('storage/avatars/') }} " alt="">
				</a>
			</div>
			<h1 class="h3 text-white font-w700 mb-10">
				{{ $member->name }} 

				@if($member->role_id == 2) 
				
				<i class="fa fa-user"></i> 

				@else 
				
				<i class="fa fa-truck"></i> 
				
				@endif

				
			</h1>
			
			<h2 class="h5 text-white-op">
				{{ $member->role->name }}  

				@if ($member->role->id == 2)	

				from {{ $member->barangay->name }}

				<br>
				Registered on	

				{{ $member->created_at->format('d-m-Y ') }}


				@elseif ($member->role->id == 3)	

				with ( How Many Deliveries ) for today.. 

				@endif					

			</h2>
		</div>
	</div>
</div>
<!-- END Hero -->

<!-- Breadcrumb -->
<div class="bg-body-light border-b">
	<div class="content py-5 text-center">
		<nav class="breadcrumb bg-body-light mb-0">
			<a class="breadcrumb-item" href="be_pages_ecom_dashboard.html">Admin</a>
			<a class="breadcrumb-item" href="javascript:void(0)">Members</a>
			<span class="breadcrumb-item active">{{ $member->name }}</span>
		</nav>
	</div>
</div>
<!-- END Breadcrumb -->

<!-- Page Content -->
<div class="content">
	<!-- Overview -->
	<h2 class="content-heading">Overview</h2>
	

	@include('admin.partials.users_overview')

	<!-- END Overview -->

	<!-- Addresses -->
	<h2 class="content-heading">Addresses</h2>

	@include('admin.partials.contact_information',['member' => $member])

	<!-- END Addresses -->


	
	<!-- END Cart -->

	<!-- Past Orders -->
	<h2 class="content-heading">Past Orders</h2>
	<div class="block block-rounded">
		<div class="block-content">
			<!-- Orders Table -->
			<table class="table table-borderless table-sm table-striped">
				<thead>
					<tr>
						<th style="width: 100px;">ID</th>
						<th style="width: 120px;">Status</th>
						<th class="d-none d-sm-table-cell" style="width: 120px;">Submitted</th>
						<th class="d-none d-sm-table-cell">Customer</th>
						<th class="text-right">Value</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<a class="font-w600" href="be_pages_ecom_order.html">ORD.577</a>
						</td>
						<td>
							<span class="badge badge-success">Completed</span>
						</td>
						<td class="d-none d-sm-table-cell">
						2017/10/27                        </td>
						<td class="d-none d-sm-table-cell">
							<a href="be_pages_ecom_customer.html">John Smith</a>
						</td>
						<td class="text-right">
							<span class="text-black">$303</span>
						</td>
					</tr>
					<tr>
						<td>
							<a class="font-w600" href="be_pages_ecom_order.html">ORD.576</a>
						</td>
						<td>
							<span class="badge badge-success">Completed</span>
						</td>
						<td class="d-none d-sm-table-cell">
						2017/10/26                        </td>
						<td class="d-none d-sm-table-cell">
							<a href="be_pages_ecom_customer.html">John Smith</a>
						</td>
						<td class="text-right">
							<span class="text-black">$454</span>
						</td>
					</tr>
					<tr>
						<td>
							<a class="font-w600" href="be_pages_ecom_order.html">ORD.562</a>
						</td>
						<td>
							<span class="badge badge-success">Completed</span>
						</td>
						<td class="d-none d-sm-table-cell">
						2017/10/25                        </td>
						<td class="d-none d-sm-table-cell">
							<a href="be_pages_ecom_customer.html">John Smith</a>
						</td>
						<td class="text-right">
							<span class="text-black">$341</span>
						</td>
					</tr>
					<tr>
						<td>
							<a class="font-w600" href="be_pages_ecom_order.html">ORD.785</a>
						</td>
						<td>
							<span class="badge badge-success">Completed</span>
						</td>
						<td class="d-none d-sm-table-cell">
						2017/10/24                        </td>
						<td class="d-none d-sm-table-cell">
							<a href="be_pages_ecom_customer.html">John Smith</a>
						</td>
						<td class="text-right">
							<span class="text-black">$172</span>
						</td>
					</tr>
					<tr>
						<td>
							<a class="font-w600" href="be_pages_ecom_order.html">ORD.454</a>
						</td>
						<td>
							<span class="badge badge-success">Completed</span>
						</td>
						<td class="d-none d-sm-table-cell">
						2017/10/23                        </td>
						<td class="d-none d-sm-table-cell">
							<a href="be_pages_ecom_customer.html">John Smith</a>
						</td>
						<td class="text-right">
							<span class="text-black">$125</span>
						</td>
					</tr>
				</tbody>
			</table>
			<!-- END Orders Table -->
		</div>
	</div>
	<!-- END Past Orders -->

	<!-- Private Notes -->
	<h2 class="content-heading">Private Notes</h2>
	<div class="block block-rounded">
		<div class="block-content">
			<div class="alert alert-info alert-dismissable" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<p class="mb-0"><i class="fa fa-info-circle mr-5"></i> This note is only for internal use and will not be displayed to the customer.</p>
			</div>
			<form action="be_pages_ecom_customer.html" method="post" onsubmit="return false;">
				<div class="form-group row mb-10">
					<div class="col-12">
						<textarea class="form-control" id="ecom-customer-note" name="ecom-customer-note" placeholder="Add a private note.." rows="4"></textarea>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-alt-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
	<!-- END Private Notes -->
</div>




@endsection


@section('js')

@endsection