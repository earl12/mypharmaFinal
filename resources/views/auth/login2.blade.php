@extends('layouts.app')

@section('title', 'Login')

@section('styles')

<link rel="stylesheet" href="{{ asset('dist/css/login.min.css') }} "> 
<link rel="stylesheet" href="build/css/base.css"> 

@stop


@section('content')

<div class="page-center">
  <div class="page-center-in">
    <div class="container-fluid">
      <form class="sign-box" action="{{ url('/login') }}" method="POST">

        {{ csrf_field() }}

        <div class="sign-avatar">

          <img src="img/avatar-sign.png" alt="">

        </div>
        <header class="sign-title">Sign In</header>
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
          <input type="email" class="form-control" name="email" placeholder="Email"  value="{{ old('email') }}" required autofocus >

          @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif


        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <input type="password" name="password" class="form-control" placeholder="Password"/>


          @if ($errors->has('password'))
          
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif

        </div>


        <div class="checkbox float-left">
          <input type="checkbox"/>
          <input type="checkbox" id="signed-in" name="remember" {{ old('remember') ? 'checked' : ''}}> <label for="signed-in"> Remember Me</label>
        </div>

        <div class="float-right reset">
          <a href="reset-password.html">Reset Password</a>
        </div>

      </div>

      <button type="submit" class="btn btn-rounded">Sign in</button>
      <p class="sign-note">New to our app? <a href="{{ url('register') }}">How it Works ? </a></p>
                    <!--<button type="button" class="close">
                    <span aria-hidden="true">&times;</span>
                  </button>-->

                </form>
              </div>
            </div>
          </div><!--.page-center-->


          @endsection
