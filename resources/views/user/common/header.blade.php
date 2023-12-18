	
	<!-- header-area-start -->
	<header>
		<!-- header-mid-area-start -->
		<div class="header-mid-area ptb-40">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-3 col-md-3 col-12">
						<div class="logo-area text-center logo-xs-mrg">
							<a href="index.php"><img src="user_r/images/bookimages/logo.png" alt="logo" width="196"></a>
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
					
					<div class="col-lg-3 col-md-3 col-12" id="logmenu">
						
					</div>
				</div>
			</div>
		</div>
		<!-- header-mid-area-end -->
		<!-- ads -->
		
		<div class="header-mid-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<script async="" src="{{ asset ('js/adsbygoogle.js') }}" crossorigin="anonymous"></script>
						<!-- thelongadsbanner -->
						<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5449429768096195" data-ad-slot="1851353004" data-ad-format="auto" data-full-width-responsive="true"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
						<br><br>
						
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
									<li><a href="{{route('sign_in')}}">Request Book</a></li> 
									<li><a href="{{route('blog')}}">Blog</a></li>
									<li><a href="{{route('sign_in')}}">Login</a></li>
									<li class="active"><a href="{{route('sign_up')}}">Register</a></li>
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
	