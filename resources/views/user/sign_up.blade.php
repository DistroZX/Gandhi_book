@extends('user.common.app')
@section('content')

<div class="user-login-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="col-lg-12">
					@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
				<div class="login-title text-center mb-30">
					<h2>Register</h2>
					<p>Get access to unlimited download of free ebook</p>
				</div>
			</div>
			<div class="offset-lg-3 col-lg-6 col-md-12 col-12">
				<div class="login-form">
					<form method="POST" action="{{ route('registration') }}">
						@csrf
					<div class="single-login">
						<label>Full name<span>*</span></label>
						<input type="text" name="username" id="username"/>
					</div>
					<div class="single-login">
						<label>Email<span>*</span></label>
						<input type="email" name="email" id="email"/>
					</div>
					     <div class="single-login">
				        <label for="password">Password</label>
				        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
				        
				        @error('password')
				            <span class="invalid-feedback" role="alert">
				                <strong>{{ $message }}</strong>
				            </span>
				        @enderror

				        <button class="btn btn-info mt-1" type="button" id="generate-password">Generate Strong Password</button>
				    </div>

				    <div class="single-login">
				        <label for="password-confirm">Confirm Password</label>
				        <input id="password-confirm" type="password" class="form-control" name="cpassword" required autocomplete="new-password">
				    </div>
					<div class="privateinfo">
						<input type="hidden" name="agent" id="agent">
					</div>
					<div class="privateinfo">
						<input type="hidden" name="generated_password" id="generated-password">
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