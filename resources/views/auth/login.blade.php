@extends('layouts.auth')

@section('content')

@if ( $detect->isMobile())

@include('partials.mobile.sidebar')

@include('partials.mobile.toolbar')


@endif


<div class="page fullscreen valign-wrapper animated fadeinright">

	<div class="valign center-align w-100">
		<h1 class="m-0"><strong>

			@if ( $detect->isMobile()) 
			<strong>Couriers</strong>
			
			@else
			<strong>Administrators/Social Workers</strong>
			

			@endif


		</h1>

		
		<h5>Log In to your Account</h5>



		<form action="{{ url('login') }}" id="loginForm" method="POST">

			{{ csrf_field() }}

			<div class="p-20">

				<div class="input-field center">
					<input class="validate" name="pin" id="login" type="text"> 
					<label for="login">Username</label>
				</div>

				<div class="input-field center">
					<input class="validate" name="password" id="login-psw" type="password"> 
					<label for="login-psw">Password</label>
				</div>
			</div>


			@include('errors.list')

			<a class="waves-effect waves-light btn-large light-blue block m-20 animated " onclick="document.getElementById('loginForm').submit()"><i class="ion-log-in left"></i>Login
			</a> 

		</form>
		<span class="block">Don't have an account? <a class="primary-text" href="{{ url('register')}}">Sign Up</a></span>
		<span class="block">Forgot your password? <a class="primary-text" href="{{ route('password.reset') }}">Get it Back!</a></span>
	</div>

</div> 



@endsection


@section('js')
<script>
	$(document.ready(function(){
		$('.close-btn').on('click',function(){
			console.log('Close');
		});
	});	
</script>
@endsection
