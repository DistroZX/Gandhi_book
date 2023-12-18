@extends('user.common.app')
@section('content')

<div class="user-login-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				@if(session('error'))
				    <div class="alert alert-danger">
				        {{ session('error') }}
				    </div>
				@endif
				<div class="login-title text-center mb-30">
					<h2>Register</h2>
					<p>Get access to unlimited download of free ebook</p>
				</div>
			</div>
			<div class="offset-lg-3 col-lg-6 col-md-12 col-12">
				<div class="login-form">
					<div class="single-login">
						<label>Full name<span>*</span></label>
						<input type="text" name="username" id="username"/>
					</div>
					<div class="single-login">
						<label>Email<span>*</span></label>
						<input type="email" name="email" id="email"/>
					</div>
					<div class="single-login">
						<label>Password <span>*</span></label>
						<input type="password"  name="password" id="password"/>
					</div>
					<div class="single-login">
						<label>Confirm Password <span>*</span></label>
						<input type="password" name="cpassword" id="cpassword"/>
					</div>
					
					<div class="privateinfo">
						<input type="hidden" name="agent" id="agent">
					</div>
					
					<div class="privateinfo">
						<input type="hidden" name="referral" id="referral">
					</div>
					
					<div class="single-login single-login-2">
						<button class="btn btn-warning mainbtn" onclick="registerNow()" id="signupbtn">Register</button>
					</div>
					have an account <a href="{{route('sign_in')}}">Login</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection