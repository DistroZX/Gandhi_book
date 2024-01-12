@extends('user.common.app')
@section('content')
<div class="breadcrumbs-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs-area-end -->
<!-- shop-main-area-start -->
<div class="shop-main-area mb-70">
	<div class="container">
		<div class="row">

			<div class="col-lg-3 col-md-12 col-12 order-lg-1 order-2 mt-sm-50 mt-xs-40">
				<div class="shop-left">

					<div class="left-title mb-20">
						<h4>Trending Books </h4>
					</div>
					<div class="random-area mb-30">
						<div class="product-active-2 owl-carousel">
							<div class="product-total-2">
                                @foreach($books->take(15) as $book)
                                    <div class="single-most-product bd mb-18">
                                            <div class="most-product-img">
                                                @foreach($book->images as $image)
                                                    <a href="book/business-intelligence-and-analytics">
                                                        <img src="{{ asset('books/' . $image->image) }}"
                                                             alt="The Handbook of International Trade and Finance" />
                                                    </a>
                                                @endforeach
                                            </div>
                                        <div class="most-product-content">
                                            <div class="product-rating">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h4><a href="book/sales-expand-your-sales">Sales Expand Your Sales</a></h4>
                                            <div class="product-price">
                                                <ul>
                                                    <li>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
							</div>
						</div>
						<div class="blog-side-menu">
						</div>
					</div>
					<div class="left-title mb-20">
						<h4>Book Category</h4>
					</div>
					<div class="random-area mb-30">
						<div class="product-active-2 owl-carousel">
							<div class="product-total-2">
                                @php
                                    $uniqueBooks = $books->unique('id');
                                @endphp
                                @foreach ($books as $book)
                                    <h6>
                                        <a href="{{ route('showCategoryBooks', ['id' => $book->category->id]) }}">
                                            {{ $book->category->genre }}
                                        </a>
                                    </h6>
                                @endforeach

                            </div>

						</div>

					</div>


					<div class="left-title mb-20">
						<h4>Other Books </h4>
					</div>

					<div class="random-area mb-30">
						<div class="product-active-2 owl-carousel">

							<div class="product-total-2">

								<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="book/business-intelligence-and-analytics"><img src="user_r/images/bookimages/651e0e326900f1.12459702.jpg" alt="Business Intelligence and Analytics" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="book/business-intelligence-and-analytics">Business Intelligence and Analytics</a></h4>
										<div class="product-price">
											<ul>
												<li>
												</li>
											</ul>
										</div>
									</div>
								</div>


								<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="book/business-analysis-methodology-book"><img src="user_r/images/bookimages/651e0a9e914225.06515792.png" alt="Business Analysis Methodology Book" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="book/business-analysis-methodology-book">Business Analysis Methodology Book</a></h4>
										<div class="product-price">
											<ul>
												<li>
												</li>
											</ul>
										</div>
									</div>
								</div>


								<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="book/the-rules-of-work"><img src="user_r/images/bookimages/651e043a55f053.95711628.jpg" alt="The Rules of Work" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="book/the-rules-of-work">The Rules of Work</a></h4>
										<div class="product-price">
											<ul>
												<li>
												</li>
											</ul>
										</div>
									</div>
								</div>


								<div class="single-most-product bd mb-18">
									<div class="most-product-img">
										<a href="book/how-successful-people-think"><img src="user_r/images/bookimages/651e02e13c64d2.60340086.jpg" alt="How Successful People Think" /></a>
									</div>
									<div class="most-product-content">
										<div class="product-rating">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
											</ul>
										</div>
										<h4><a href="book/how-successful-people-think">How Successful People Think</a></h4>
										<div class="product-price">
											<ul>
												<li>
												</li>
											</ul>
										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="blog-side-menu">

						</div>
					</div>

				</div>
			</div>



			<div class="col-lg-9 col-md-12 col-12 order-lg-2 order-1">

				<div class="section-title-5 mb-30">
					<h2>Books</h2>
				</div>

				<div class="toolbar mb-30">
					<div class="shop-tab">
						<div class="tab-3">
							<ul class="nav">
								<li><a class="active" href="#th" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>
							</ul>
						</div>
						<div class="list-page">
							<p>Book List</p>
						</div>
					</div>
				</div>



				<!-- tab-area-start -->
				<div class="tab-content">
					<div class="tab-pane fade show active" id="th">
						<div class="row">
                            @foreach($books as $book)
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
								<!-- single-product-start -->
								<div class="product-wrapper mb-40 hidden-sm">
									<div class="product-img">
                                        @foreach($book->images as $image)
                                            <a href="{{ route('bookDetails', ['id' => $book->id]) }}">
                                                <img src="{{ asset('books/' . $image->image) }}"
                                                     alt="The Handbook of International Trade and Finance" class="primary"/>
                                            </a>
                                        @endforeach
										<div class="quick-view">
											<a class="action-view" href="{{ route('bookDetails', ['id' => $book->id]) }}">
												<i class="fa fa-download"></i>
											</a>
										</div>
									</div>

									<div class="product-details text-center">
										<h4><a href="{{ route('bookDetails', ['id' => $book->id]) }}">Business Intelligence and Analytics</a></h4>
									</div>
								</div>
								<!-- single-product-end -->
							</div>
                            @endforeach


                        </div>
                    </div>
                </div>
				<!-- tab-area-start end -->



				<!-- pagination-area-start -->
				<div class="pagination-area mt-50">
					<div class="single-blog-post">
						<div class="blog-pagination text-center">
							<ul>
								<li class='active'><a href='books?page=1'>1 </a></li><li><a href='books?page=2'>2 </a></li><li><a href='books?page=3'>3 </a></li><li><a href='books?page=4'>4 </a></li><li><a href='books?page=5'>5 </a></li><li><a href='books?page=2'>  <i class='fa fa-angle-right'></i> </a></li>						</ul>
							</div>
						</div>
					</div>
					<!-- pagination-area-end -->

				</div>

			</div>
		</div>
	</div>
	@endsection
