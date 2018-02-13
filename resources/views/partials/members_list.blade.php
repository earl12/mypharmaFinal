@foreach($members as $member)
<tr>
	<td class="text-center">{{ $member->id }} </td>
	<td class="text-center">{{ $member->name }} </td>
	<td class="font-w600">{{ $member->email }} </td>
	<td class="d-none d-sm-table-cell">{{ $member->role->name }} </td>

	<td class="d-none d-sm-table-cell">
		
		@if ( $member->status == 'active')

		<span class="badge badge-primary">Active</span>

		@else

		<span class="badge badge-primary">Inactive</span>


		@endif


		
	</td>

	
	<td class="text-center">

		<button href="" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Profile">
			<a href="{{ route('members.show', $member->id ) }}"> 
				<i class="fa fa-user" style="color : black ; "></i>
			</a>
		</button>

		<button type="button" class="btn btn-sm btn-danger" id="deleteUser" data-id="{{ $member->id }} " data-name="{{ $member->name }} "data-toggle="tooltip" title="Delete User">
			<i class="fa fa-remove"></i>
		</button>

		<button href="" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit User">
			<a href="{{ route('members.edit', $member->id ) }}"> 
				<i class="fa fa-edit" style="color : #fff ; "></i>
			</a>
		</button>


	</td>


</tr>
@endforeach