<!-- Cart -->

@if ( {{ $member->role_id == 2}} ) 
<h2 class="content-heading">Recent Transactions </h2>
<div class="block block-rounded">
	<div class="block-content">
		<!-- Products Table -->
		<table class="table table-borderless table-striped">
			<thead>
				<tr>
					<th style="width: 100px;">ID</th>
					<th class="d-none d-sm-table-cell" style="width: 120px;">Status</th>
					<th class="d-none d-sm-table-cell" style="width: 120px;">Submitted</th>
					<th>Product</th>
					<th class="d-none d-md-table-cell">Category</th>
					<th class="text-right">Value</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<a class="font-w600" href="be_pages_ecom_product_edit.html">PID.424</a>
					</td>
					<td class="d-none d-sm-table-cell">
						<span class="badge badge-danger">Out of Stock</span>
					</td>
					<td class="d-none d-sm-table-cell">
					2017/09/27                        </td>
					<td>
						<a href="be_pages_ecom_product_edit.html">Product #24</a>
					</td>
					<td class="d-none d-md-table-cell">
						<a href="be_pages_ecom_products.html">House</a>
					</td>
					<td class="text-right">
						<span class="text-black">$92</span>
					</td>
				</tr>
				<tr>
					<td>
						<a class="font-w600" href="be_pages_ecom_product_edit.html">PID.423</a>
					</td>
					<td class="d-none d-sm-table-cell">
						<span class="badge badge-success">Available</span>
					</td>
					<td class="d-none d-sm-table-cell">
					2017/09/26                        </td>
					<td>
						<a href="be_pages_ecom_product_edit.html">Product #23</a>
					</td>
					<td class="d-none d-md-table-cell">
						<a href="be_pages_ecom_products.html">House</a>
					</td>
					<td class="text-right">
						<span class="text-black">$18</span>
					</td>
				</tr>
				<tr>
					<td>
						<a class="font-w600" href="be_pages_ecom_product_edit.html">PID.422</a>
					</td>
					<td class="d-none d-sm-table-cell">
						<span class="badge badge-danger">Out of Stock</span>
					</td>
					<td class="d-none d-sm-table-cell">
					2017/09/25                        </td>
					<td>
						<a href="be_pages_ecom_product_edit.html">Product #22</a>
					</td>
					<td class="d-none d-md-table-cell">
						<a href="be_pages_ecom_products.html">House</a>
					</td>
					<td class="text-right">
						<span class="text-black">$77</span>
					</td>
				</tr>
			</tbody>
		</table>
		<!-- END Products Table -->
	</div>
</div>