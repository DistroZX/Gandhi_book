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
                                @foreach($booksInCategory->take(8) as $book)
                                    <div class="single-most-product bd mb-18">
                                            <div class="most-product-img">
                                                @foreach($book->images as $image)
                                                    <a href="{{ route('bookDetails', ['id' => $book->id]) }}">
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

				</div>
			</div>



			<div class="col-lg-9 col-md-12 col-12 order-lg-2 order-1">

				<div class="section-title-5 mb-35">
					<h2>Books</h2>
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
                        {{$books->links()}}

                    </div>
                </div>



			</div>
		</div>
	</div>
	@endsection
