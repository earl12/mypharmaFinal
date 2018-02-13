@extends('layouts.admin')

@section('title', 'Admin Profile')

@section('content')



<div class="bg-image bg-image-bottom" style="background-image: url {{ asset('assets/img/photos/photo13@2x.jpg') }} ; ">
	<div class="bg-primary-dark-op py-30">
		<div class="content content-full text-center">
			<!-- Avatar -->


			<div class="mb-15">
				<a class="img-link" href="{{ route('changeAdminPhoto',$user->id) }} ">
					<img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ asset('assets/img/avatars/default.jpg') }} " alt="">
				</a>
			</div>
			

			<!-- END Avatar -->



			<!-- Personal -->
			<h1 class="h3 text-white font-w700 mb-10">
				
				@if(is_null($users_information))

				{{ $username }}

				@else

				{{ $users_information->first_name }}  {{ $users_information->middle_name }} {{ $users_information->last_name }} 
				<br>
				@ {{ $username}}
				

				@endif


			</h1>

			
			<h2 class="h5 text-white-op">
				{{ $user->role->name }} <a class="text-primary-light" href="javascript:void(0)">at Mypharma </a>
			</h2>
			<!-- END Personal -->

			<!-- Actions -->

			@if(is_null($users_information))
			<?php 
			
			$option1 = 'Add Profile';
			
			?>

			@else

			<?php
			$option1 = 'Update Profile';

			?>

			@endif

			<button type="button" data-toggle="modal" data-target="#updateInformationModal" class="btn btn-rounded btn-hero btn-sm btn-alt-success mb-5">
				<i class="fa fa-plus mr-5"></i> {{ $option1 }}
			</button>
			<button type="button" class="btn btn-rounded btn-danger btn-hero btn-sm  mb-5">
				<i class="fa fa-trash-o mr-5"></i> Delete My Account
			</button>
			<!-- END Actions -->
		</div>
	</div>
</div>

@include('admin.modals.update_member_information')



<h2 class="content-heading">Your Information</h2>

First Name : {{ $users_information->first_name }}
Middle Name : {{ $users_information->middle_name }}
Last Name : {{ $users_information->last_name }}


@endsection