
	<!-- header-area-start -->
	<header>
		<!-- header-mid-area-start -->
		<div class="header-mid-area ptb-20">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-3 col-12">
						<div class="logo-area text-center logo-xs-mrg">
							<a href="/"><img src="user_r/images/bookimages/logo.png" alt="logo" width="196"></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="header-search">
							<form action="book/search.php" class="row">
								<div class="col-10 offset-1" id="searchfrom">
									<input type="text" placeholder="Search entire store here..." name="search" value="">
									<button type="submit" class="btn btn-warning mainbtn"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div>
					</div>

					<div class="col-md-3 user_name" style="padding: 0px 0px;">
						@if(Auth::check())
							Welcome {{Auth::user()->username}}
						@endif
					</div>
				</div>
			</div>
		</div>
		<!-- header-mid-area-end -->
		<!-- ads -->

		<div class="header-mid-area">
			<div class="container">
				<div class="row" style="text-align: center; display: flex; justify-content: center;">
					<div class="col-lg-6 col-md-6 col-sm-6">

						@if (session('success'))
						    <div class="alert alert-success">
						        {{ session('success') }}
						    </div>
						@endif
						@if(session('error'))
						    <div class="alert alert-danger">
						        {{ session('error') }}
						    </div>
						@endif
						<br>
					</div>
				</div>
			</div>
		</div>

		<!-- ads end -->


		<!-- main-menu-area-start -->
		<div class="main-menu-area d-md-none d-none d-lg-block sticky-header-1" id="header-sticky">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="menu-area">
							<nav>
								<ul>
									<li><a href="/">Home</a></li>
									<li><a href="{{route('list')}}">Books</a></li>
									<li><a href="{{route('category')}}">Categories</a></li>
									<li><a href="{{route('author')}}">Authors</a></li>
									<!-- requesting a book need to be adjusted -->

									<li><a href="{{route('blog')}}">Blog</a></li>
									@if(Auth::check())
										<li><a href="{{ route('user_profile') }}">My Profile</a></li>
										<li><a href="{{ route('user.logout') }}">Logout</a></li>
									@else
										<li class="active"><a href="{{route('sign_up')}}">Register</a></li>
										<li><a href="{{route('sign_in')}}">Login</a></li>
									@endif
								</ul>
							</nav>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- main-menu-area-end -->
		<!-- mobile-menu-area-start -->
		<div class="mobile-menu-area d-lg-none d-block fix">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="mobile-menu">
							<nav id="mobile-menu-active">
								<ul id="nav">
									<li><a href="index.php">Home</a></li>
									<li><a href="books">Books</a></li>
									<li><a href="categories">Categories</a></li>
									<li><a href="author">Authors</a></li>
									<li><a href="account.php#request-book">Request Book</a></li>
									<li><a href="blog/">Blog</a></li>
									<li><a href="login">Login</a></li>
									<li class="active"><a href="register">Register</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- mobile-menu-area-end -->
	</header>
