@extends('user.common.app')



@section('content')
    <div class="product-main-area mb-70 mt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-12 order-lg-1 order-1">

                    <!-- product-main-area-start -->

                    <div class="product-main-area">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li data-thumb="../administrator/bookimages/651e0e326900f1.12459702.jpg">
                                                @foreach($book->images as $image)
                                                <a href="{{ route('bookDetails', ['id' => $book->id]) }}">
                                                        <img src="{{ asset('books/' . $image->image) }}"
                                                         alt="The Handbook of International Trade and Finance" class="primary"/>
                                                </a>
                                            @endforeach
                                        </li>

                                        <li data-thumb="../administrator/bookimages/651e0e32690486.24630334.jpg">
                                            <img src="../administrator/bookimages/651e0e32690486.24630334.jpg"/>
                                        </li>
                                        <li data-thumb="../administrator/bookimages/651e0e32690493.93147974.jpg">
                                            <img src="../administrator/bookimages/651e0e32690493.93147974.jpg"/>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif


                            <div class="col-lg-7 col-md-6 col-12">
                                <div class="product-info-main">
                                    <div class="page-title">
                                        <h1>{{$book->name}}</h1>
                                    </div>
                                    <div class="product-info-stock-sku">
                                        <a href="author?author=junkybooks">By: {{$book->author->name}}</a>
                                    </div>
                                    <div class="product-reviews-summary">
                                        <div class="rating-summary">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="reviews-actions">
                                            <a href="category?category=business">Category: {{$book->category->genre}}</a>
                                        </div>
                                        <div class="reviews-actions">

                                        </div>
                                    </div>
                                    <div class="product-info-price">
                                        <div class="price-final">

										<span id="price"> Price: {{$book->price}}</span>
                                        </div>

                                    </div>


                                    <div class="product-add-form">
                                        <form action="{{ route('bookCheckout', ['id' => $book->id,'userId' => Auth::id()]) }}" method="get" class="form-group">
                                            @csrf
                                            <label for="quantity">Quantity:</label>
                                            @if($errors->has('quantity'))
                                                <span class="text-danger">{{$errors->first('quantity')}}</span>
                                            @endif
                                            <input type="number" name="quantity" value="{{ old('quantity') }}" class="form-control mb-1" id="quantity" required>

                                            <input type="hidden" name="total_price" id="total_price" value="1">

                                            <button type="submit" class="btn btn-primary">Buy Now</button>
                                        </form>

                                        <!-- Placeholder for the calculated price -->
                                        <div id="price"></div>

                                        <script>
                                            document.getElementById('quantity').addEventListener('input', function () {
                                                var quantity = this.value;
                                                if (quantity > 10) {
                                                    window.alert("Maximum allowed quantity reached!");
                                                    this.value = 10;
                                                }
                                                if (quantity <= 0) {
                                                    window.alert("Quantity must be positive");
                                                    this.value = 1;
                                                }


                                            });
                                        </script>
                                    </div>

                                    <div class="product-social-links">
                                        <div class="product-addto-links-text">
                                            <p>Coming soon</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- ads -->
                    <div class="header-mid-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <!-- ads goes here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ads end -->


                    <div class="product-info-area mt-80">
                        <!-- Nav tabs -->
                        <ul class="nav">
                            <li><a class="active" href="#Details" data-toggle="tab">Details</a></li>
                            <li><a href="#Reviews" data-toggle="tab">Reviews</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="Details">
                                <div class="valu">

                                    <p>Introduction to Business Intelligence
                                        The strategy and the planning that is incorporated in any business is known as business intelligence. It may also include products, technologies, and analysis and presentation of business information. This chapter will provide an integrated understanding of business intelligence.
                                    <h4><b>Business Intelligence
                                        </b></h4><p>Business intelligence (BI) can be described as “a set of techniques and tools for the acquisition
                                        and transformation of raw data into meaningful and useful information for business analysis
                                        purposes”. The term “data surfacing” is also more often associated with BI functionality. BI
                                        technologies are capable of handling large amounts of structured and sometimes unstructured
                                        data to help identify, develop, and otherwise create new strategic business opportunities.  <p>The
                                        goal of BI is to allow for the easy interpretation of these large volumes of data. Identifying new
                                        opportunities and implementing an effective strategy based on insights can provide businesses with a competitive market advantage and long-term stability.
                                        BI technologies provide historical, current, and predictive views of business operations.
                                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5449429768096195"crossorigin="anonymous">
                                        </script>
                                        <!-- thelongadsbanner -->
                                        <ins class="adsbygoogle"
                                             style="display:block"
                                             data-ad-client="ca-pub-5449429768096195"
                                             data-ad-slot="1851353004"
                                             data-ad-format="auto"
                                             data-full-width-responsive="true"></ins>
                                        <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script> <p>Common
                                        functions of business intelligence technologies are reporting, online analytical processing, analytics, data mining, process mining, complex event processing, business performance management,
                                        benchmarking, text mining, predictive analytics, and prescriptive analytics.
                                        BI can be used to support a wide range of business decisions ranging from operational to strategic.  <p>Basic operating decisions include product positioning or pricing. Strategic business decisions
                                        include priorities, goals, and directions at the broadest level. In all cases, BI is most effective when
                                        it combines data derived from the market in which a company operates (external data) with data
                                        from company sources internal to the business such as financial and operations data (internal
                                        data). When combined, external and internal data can provide a more complete picture which, in
                                        effect, creates an “intelligence” that cannot be derived by any singular set of data. Amongst myriad
                                        uses, BI tools empower organizations to gain insight into new markets, assess the demand and suitability of products and services for different market segments, and gauge the impact of marketing
                                        efforts.<br> <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5449429768096195"
                                                             crossorigin="anonymous"></script>
                                        <!-- thelongadsbanner -->
                                        <ins class="adsbygoogle"
                                             style="display:block"
                                             data-ad-client="ca-pub-5449429768096195"
                                             data-ad-slot="1851353004"
                                             data-ad-format="auto"
                                             data-full-width-responsive="true"></ins>
                                        <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Reviews">
                                <div class="valu valu-2">
                                    <div class="section-title mb-60 mt-60">
                                        <h2>Customer Reviews</h2>
                                    </div>

                                    <div class="review-form">
                                        <div class="single-form">
                                            <label>Nickname <sup>*</sup></label>
                                            <form action="#">
                                                <input type="text" />
                                            </form>
                                        </div>
                                        <div class="single-form single-form-2">
                                            <label>Summary <sup>*</sup></label>
                                            <form action="#">
                                                <input type="text" />
                                            </form>
                                        </div>
                                        <div class="single-form">
                                            <label>Review <sup>*</sup></label>
                                            <form action="#">
                                                <textarea name="massage" cols="10" rows="4"></textarea>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="review-form-button">
                                        <a href="#">Submit Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- product-info-area-end -->
                    <!-- ads -->
                    <div class="header-mid-area">
                        <div class="container">

                        </div>
                    </div>
                </div>







                <div class="col-lg-3 col-md-12 col-12 order-lg-2 order-2">
                    <div class="shop-left">
                        <div class="single-blog mb-50">
                            <div class="left-title mb-20">
                                <h4>Trending Books </h4>
                            </div>
                            <div class="random-area mb-30">
                                <div class="product-active-2 owl-carousel">
                                    <div class="product-total-2">

                                            <div class="single-most-product bd mb-18">
                                                <div class="most-product-img">
                                                    @foreach($book->images->take(6) as $image)
                                                        <a href="{{ route('bookDetails', ['id' => $book->id]) }}">
                                                            <img src="{{ asset('books/' . $image->image) }}" alt="{{ $book->title }}" />
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
                                    </div>


                                        <div class="single-most-product bd mb-18">
                                            <div class="most-product-img">
                                                <a href="the-branding-formula"><img src="../administrator/bookimages/62fc044b462a88.50466540.PNG" alt="book" /></a>
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
                                                <h4><a href="../book/the-branding-formula">The Branding Formula</a></h4>
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
                                                <a href="twitter-the-beginners-guide"><img src="../administrator/bookimages/62fc24648d1453.06513668.PNG" alt="book" /></a>
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
                                                <h4><a href="../book/twitter-the-beginners-guide">Twitter The Beginners Guide</a></h4>
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
                                                <a href="start-where-you-are"><img src="../administrator/bookimages/64e23253c09290.78632919.jpg" alt="book" /></a>
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
                                                <h4><a href="../book/start-where-you-are">Start Where You Are</a></h4>
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
                            </div>

                        </div>

                        <div class="single-blog mb-50">
                            <div class="blog-left-title">
                                <h3>Popular Posts</h3>
                            </div>
                            <div class="blog-side-menu">
                                <ul>

                                    <li>
                                        <div class="row">
                                            <div class="col-4">

                                                <a href="whimsical-world-of-tom-fletcher-s-books"><img src="https://www.junkybooks.com/administrator/postimages/659ddffd624804.81207298.jpeg"></a>


                                            </div>

                                            <div class="col-8">
                                                <a class="new-link" href="../blog/whimsical-world-of-tom-fletcher-s-books"><h6>Whimsical World of Tom Fletcher's Books</h6></a>
                                            </div>
                                        </div>

                                    </li>



                                    <li>
                                        <div class="row">
                                            <div class="col-4">

                                                <a href="the-magical-world-of-minalima-unraveling-the-enchantment-of-harry-potter-books"><img src="https://www.junkybooks.com/administrator/postimages/659ddfa5596659.91601943.jpeg"></a>


                                            </div>

                                            <div class="col-8">
                                                <a class="new-link" href="../blog/the-magical-world-of-minalima-unraveling-the-enchantment-of-harry-potter-books"><h6>The Magical World of Minalima: Unraveling the Enchantment of Harry Potter Books</h6></a>
                                            </div>
                                        </div>

                                    </li>



                                    <li>
                                        <div class="row">
                                            <div class="col-4">

                                                <a href="a-nostalgic-dive-into-the-horrid-henry-books"><img src="https://www.junkybooks.com/administrator/postimages/659b46565bf834.73345610.jpeg"></a>


                                            </div>

                                            <div class="col-8">
                                                <a class="new-link" href="../blog/a-nostalgic-dive-into-the-horrid-henry-books"><h6>A Nostalgic Dive into the Horrid Henry Books</h6></a>
                                            </div>
                                        </div>

                                    </li>



                                    <li>
                                        <div class="row">
                                            <div class="col-4">

                                                <a href="cooking-up-a-storm-unveiling-the-magic-of-the-air-fryer-recipe-book"><img src="https://www.junkybooks.com/administrator/postimages/659b45cc830e98.92718242.jpeg"></a>


                                            </div>

                                            <div class="col-8">
                                                <a class="new-link" href="../blog/cooking-up-a-storm-unveiling-the-magic-of-the-air-fryer-recipe-book"><h6>Cooking Up a Storm: Unveiling the Magic of the Air Fryer Recipe Book</h6></a>
                                            </div>
                                        </div>

                                    </li>



                                    <li>
                                        <div class="row">
                                            <div class="col-4">

                                                <a href="a-journey-through-lottie-brooks-enchanting-books"><img src="https://www.junkybooks.com/administrator/postimages/659b44170ee758.17645545.jpeg"></a>


                                            </div>

                                            <div class="col-8">
                                                <a class="new-link" href="../blog/a-journey-through-lottie-brooks-enchanting-books"><h6>A Journey Through Lottie Brooks Enchanting Books</h6></a>
                                            </div>
                                        </div>

                                    </li>



                                </ul>
                            </div>

                            <div class="blog-side-menu">
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5449429768096195"
                                        crossorigin="anonymous"></script>
                                <!-- aside ads -->
                                <ins class="adsbygoogle"
                                     style="display:block"
                                     data-ad-client="ca-pub-5449429768096195"
                                     data-ad-slot="2138010654"
                                     data-ad-format="auto"
                                     data-full-width-responsive="true"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>

                        </div>
                </div>

            </div>
        </div>
    </div>


@endsection
