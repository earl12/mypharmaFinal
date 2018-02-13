@extends('layouts.auth')

@section('content')


<div class="page fullscreen valign-wrapper animated fadeinright">

	<div class="valign center-align w-100">
		<h1 class="m-0"><strong>Welcome</strong></h1>
		<h5>Log In to your Account</h5>

		<form action="{{ url('login') }}" method="POST">

			<div class="p-20">
				<div class="input-field center">
					<input class="validate" name="username" id="login" type="text"> 
					<label for="login">Username</label>
				</div>

				<div class="input-field center">
					<input class="validate" name="password" id="login-psw" type="password"> 
					<label for="login-psw">Password</label>
				</div>
			</div>

			<a class="waves-effect waves-light btn-large light-blue block m-20 animated bouncein delay-4" type="submit"><i class="ion-log-in left"></i>Login</a> 
			<a class="waves-effect waves-light btn-large light-blue darken-4 block m-20 animated bouncein delay-5" ><i class="ion-social-facebook left"></i> Login with Facebook</a>

		</form>
		<span class="block">Don't have an account? <a class="primary-text" href="signup.html">Sign Up</a></span>
		<span class="block">Forgot your password? <a class="primary-text" href="forgot.html">Get it Back!</a></span>
	</div>

</div> 
@endsection

