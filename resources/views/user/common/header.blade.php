
	<!-- header-area-start -->
	<header>
		<!-- header-mid-area-start -->
		<div class="header-mid-area ptb-20">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-3 col-12">
						<div class="logo-area text-center logo-xs-mrg">
							<a href="/"><img src="/user_r/images/bookimages/logo.png" alt="logo" width="196"></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="header-search">
{{--							<form action="book/search.php" class="row">--}}
{{--								<div class="col-10 offset-1" id="searchfrom">--}}
{{--									<input type="text" placeholder="Search entire store here..." name="search" value="">--}}
{{--									<button type="submit" class="btn btn-warning mainbtn"><i class="fa fa-search"></i></button>--}}
{{--								</div>--}}
{{--							</form>--}}
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
                                    <?php
                                    $current_url = $_SERVER['REQUEST_URI'];
                                    ?>
                                    <li <?php if ($current_url == "/") echo 'class="active"'; ?>><a href="/">Home</a></li>
                                    <li <?php if ($current_url == "/BookList") echo 'class="active"'; ?>><a href="{{route('list')}}">Books</a></li>
                                    <li <?php if ($current_url == "/category") echo 'class="active"'; ?>><a href="{{route('category')}}">Categories</a></li>
                                    <li <?php if ($current_url == "/authors") echo 'class="active"'; ?>><a href="{{route('author')}}">Authors</a></li><!-- requesting a book need to be adjusted -->

									<li <?php if ($current_url == "/blog") echo 'class="active"'; ?>><a href="{{route('blog')}}">Blog</a></li>
									@if(Auth::check())
										<li <?php if ($current_url == '/profile') echo 'class="active"'; ?>><a href="{{ route('user_profile') }}">My Profile</a></li>
										<li <?php if ($current_url == '/logout') echo 'class="active"'; ?>><a href="{{ route('user.logout') }}">Logout</a></li>
									@else
										<li <?php if ($current_url == '/sign_up') echo 'class="active"'; ?>><a href="{{route('sign_up')}}">Register</a></li>
										<li <?php if ($current_url == '/sign_in') echo 'class="active"'; ?>><a href="{{route('sign_in')}}">Login</a></li>
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
                                    <li <?php if ($current_url == "/") echo 'class="active"'; ?>><a href="/">Home</a></li>
                                    <li <?php if ($current_url == "/BookList") echo 'class="active"'; ?>><a href="{{route('list')}}">Books</a></li>
                                    <li <?php if ($current_url == "/category") echo 'class="active"'; ?>><a href="{{route('category')}}">Categories</a></li>
                                    <li <?php if ($current_url == "/authors") echo 'class="active"'; ?>><a href="{{route('author')}}">Authors</a></li><!-- requesting a book need to be adjusted -->

                                    <li <?php if ($current_url == "/blog") echo 'class="active"'; ?>><a href="{{route('blog')}}">Blog</a></li>
                                    @if(Auth::check())
                                        <li <?php if ($current_url == '/profile') echo 'class="active"'; ?>><a href="{{ route('user_profile') }}">My Profile</a></li>
                                        <li <?php if ($current_url == '/logout') echo 'class="active"'; ?>><a href="{{ route('user.logout') }}">Logout</a></li>
                                    @else
                                        <li <?php if ($current_url == '/sign_up') echo 'class="active"'; ?>><a href="{{route('sign_up')}}">Register</a></li>
                                        <li <?php if ($current_url == '/sign_in') echo 'class="active"'; ?>><a href="{{route('sign_in')}}">Login</a></li>
                                    @endif
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- mobile-menu-area-end -->
	</header>
