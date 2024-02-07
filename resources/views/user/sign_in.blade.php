@extends('user.common.app')
@section('content')

<div class="breadcrumbs-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumbs-menu">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="{{route('sign_in')}}" class="active">login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs-area-end -->


<!-- user-login-area-start -->
<div class="user-login-area mb-70">
	<div class="container">
		<div class="row">
			@if (session('success'))
			    <div class="alert alert-success">
			        {{ session('success') }}
			    </div>
			@endif
			<div class="col-lg-12">
			@if(session('error'))
			    <div class="alert alert-danger">
			        {{ session('error') }}
			    </div>
			@endif
			<div class="login-title text-center mb-30">
				<h2>Login</h2>
				<p>Get access to unlimited download of free ebook</p>
			</div>
			</div>
			<div class="offset-lg-3 col-lg-6 col-md-12 col-12">
				<div class="login-form">
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="single-login">
							<label>Email<span>*</span></label>
							<input type="email" name="email" id="email"required/>
						</div>

						<div class="single-login">
							<label>Password <span>*</span></label>
							<input type="password" name="password" id="password" required />
						</div>

						<div class="single-login single-login-2">
							<button type="submit" class=" btn btn-block">Login</button>
							<input class="pull-left" id="rememberme" type="checkbox" name="rememberme" value="forever">
							<span class="pull-left">Remember me</span>
						</div>
					</form>
					<a href="#">Lost your password?</a>
					<p>Don't have an account <a href="{{ route('sign_up') }}" style="color:#F17B28;">Register</a></p>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
