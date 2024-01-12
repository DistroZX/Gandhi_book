@extends('user.common.app')

@section('content')
    <!-- slider-area-start -->
    <div class="slider-area">
        <div class="slider-active owl-carousel">

            <div class="single-slider pt-125 pb-130 bg-img"
                 style="background-image:url(user_r/images/index/62c561864bd106.88717559.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="slider-content slider-animated-1 text-center">
                                <h1>Access to thousands of free ebooks <br/> <br/> Download or Read online </h1>
                                <a href="books">Get Started</a></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="single-slider pt-125 pb-130 bg-img"
                 style="background-image:url(user_r/images/index/62c562f5bfcd62.92139011.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="slider-content slider-animated-1 text-center">
                                <h1>Access to thousands of free ebooks <br/> <br/> Download or Read online </h1>
                                <a href="books">Get Started</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- slider-area-end -->

    <!-- ads -->
    <div class="header-mid-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12"><br/><br/>

                    <script async
                            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5449429768096195"
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
        </div>
    </div>
    <!-- ads end -->

    <!-- featured-area-start -->
    <div class="new-book-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-30">
                        <h2>Top interesting</h2>
                        <p>Browse the collection of our best top interesting Books.<br/> you will definitely find what
                            you are looking for.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="load-new-arrival">
                <div class="tab-active owl-carousel">
                    <!-- single-product-start -->
                    @foreach($books as $book)
                        <div class="tab-total">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    @foreach($book->images as $image)
                                        <a href="book/the-handbook-of-international-trade-and-finance">
                                            <img src="{{ asset('books/' . $image->image) }}"
                                                 alt="The Handbook of International Trade and Finance" class="primary"/>
                                        </a>
                                    @endforeach
                                    <div class="quick-view">
                                        <a class="action-view" href="book/business-intelligence-and-analytics"
                                           title="Download">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> <br></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h4><a href="book/business-intelligence-and-analytics">{{ $book->name }}</a></h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="banner-area-5 mtb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="user_r/images/index/banner.jpg" alt="banner"/>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="text-center">About Gandhi Books</h2>
                    <p class="text-center">Welcome to Gandhi's Wisdom! Explore Gandhi's timeless teachings on
                        non-violence, social justice,
                        and spiritual growth in our free digital library. Find educational, motivational, and
                        career-oriented resources inspired by Gandhi's philosophy. We're dedicated to sharing Gandhi's
                        wisdom and supporting authors who echo his values. For questions or thoughts, contact our editor
                        at [email protected]. Join us in spreading Gandhi's legacy of positive change worldwide!"</p>
                    <p>if you have any questions or feedback, don't hesitate to contact our editor <a
                            href="/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="caa3a4aca58aa0bfa4a1b3a8a5a5a1b9e4a9a5a7">[email&#160;protected]</a>.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="new-book-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-30">
                        <h2>Fantasy Genres</h2>
                        <p>Best of Fantasy Books.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="load-finance-book">
                <div class="tab-active loadFinance owl-carousel">
                    @foreach($booksInCategory as $book)
                        @if($book->categoryId == 2 )
                            <div class="tab-total">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        @foreach($book->images as $image)
                                            <a href="book/the-handbook-of-international-trade-and-finance">
                                                <img src="{{ asset('books/' . $image->image) }}"
                                                     alt="The Handbook of International Trade and Finance"
                                                     class="primary"/>
                                            </a>
                                        @endforeach
                                        <div class="quick-view">
                                            <a class="action-view" href="book/business-intelligence-and-analytics"
                                               title="Download">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </div>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span> <br></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details text-center">
                                        <h4><a href="book/business-intelligence-and-analytics">{{ $book->name }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <!-- bestseller-area-start -->
        <div class="bestseller-area pb-100">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-md-12 col-12" id="most-recent-book">
                        <div class="bestseller-content">
                            <h2>Business Intelligence and Analytics</h2>
                            <p class="categories">categories:<a href="#">Business</a></p>
                            <p>Introduction to Business Intelligence The strategy and the planning that is incorporated
                                in
                                any business is known as business intelligence. It may also include products,
                                technologies,
                                and analysis and ....</p>
                            <div class="social-author">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="banner-img-2">
                            <a href="book/business-intelligence-and-analytics"><img
                                    src="user_r/images/index/651e0e326900f1.12459702.jpg"
                                    alt="Business Intelligence and Analytics"/></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-12" id="four-side-book">

                        <div class="bestseller-active owl-carousel">


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/goliath"><img
                                                src="user_r/images/index/62bb36d8da8cf9.77555192.jpeg"
                                                alt="Goliath"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/goliath">Goliath</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/induction"><img
                                                src="user_r/images/index/62bb4361dbcca3.85469648.jpg"
                                                alt="Induction"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/induction">Induction</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/the-reluctant-coroner"><img
                                                src="user_r/images/index/62bb5bfe51fa40.75435426.jpg"
                                                alt="The Reluctant Coroner"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/the-reluctant-coroner">The Reluctant Coroner</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/the-fireraisers"><img
                                                src="user_r/images/index/62bb5c6b0f0221.60648534.jpeg"
                                                alt="The Fireraisers"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/the-fireraisers">The Fireraisers</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/the-swordswoman"><img
                                                src="user_r/images/index/62bb5d4661a4f4.02866932.jpeg"
                                                alt="The Swordswoman"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/the-swordswoman">The Swordswoman</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/fire-water"><img
                                                src="user_r/images/index/62bb5dc67a71f2.31406030.jpeg"
                                                alt="Fire & Water"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/fire-water">Fire & Water</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/tell-me-why"><img
                                                src="user_r/images/index/62bb5e79410aa5.89013204.jpeg"
                                                alt="Tell Me Why"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/tell-me-why">Tell Me Why</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/displaced"><img
                                                src="user_r/images/index/62bb5f77a81bc3.67758076.jpeg"
                                                alt="Displaced"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/displaced">Displaced</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/bronze-magic"><img
                                                src="user_r/images/index/62bb6005e65666.61803270.jpeg"
                                                alt="Bronze Magic"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/bronze-magic">Bronze Magic</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/murder-over-easy"><img
                                                src="user_r/images/index/62bb6075c38f45.41845811.jpeg"
                                                alt="Murder Over Easy"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/murder-over-easy">Murder Over Easy</a></h3>
                                    </div>
                                </div>


                            </div>


                        </div>


                        <div class="bestseller-active owl-carousel">


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/business-intelligence-and-analytics"><img
                                                src="user_r/images/index/651e0e326900f1.12459702.jpg"
                                                alt="Business Intelligence and Analytics"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/business-intelligence-and-analytics">Business Intelligence and
                                                Anal</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/business-analysis-methodology-book"><img
                                                src="user_r/images/index/651e0a9e914225.06515792.png"
                                                alt="Business Analysis Methodology Book"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/business-analysis-methodology-book">Business Analysis
                                                Methodology </a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/the-rules-of-work"><img
                                                src="user_r/images/index/651e043a55f053.95711628.jpg"
                                                alt="The Rules of Work"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/the-rules-of-work">The Rules of Work</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/how-successful-people-think"><img
                                                src="user_r/images/index/651e02e13c64d2.60340086.jpg"
                                                alt="How Successful People Think"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/how-successful-people-think">How Successful People Think</a>
                                        </h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/how-to-win-every-argument-"><img
                                                src="user_r/images/index/651e0046e98624.81121829.jpg"
                                                alt="How to Win Every Argument:"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/how-to-win-every-argument-">How to Win Every Argument:</a>
                                        </h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/me-before-you"><img
                                                src="user_r/images/index/650773b34ae0c9.09086076.jpg"
                                                alt="Me before you"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/me-before-you">Me before you</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/fractured-freedom"><img
                                                src="user_r/images/index/6507728aa5ec70.96010425.jpg"
                                                alt="Fractured freedom"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/fractured-freedom">Fractured freedom</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/never-let-me-go"><img
                                                src="user_r/images/index/65077056c47326.57519022.jpg"
                                                alt="Never Let Me Go"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/never-let-me-go">Never Let Me Go</a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/an-introduction-to-linguistic-theory"><img
                                                src="user_r/images/index/65076d57875cb7.51330941.png"
                                                alt="An Introduction to Linguistic Theory"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/an-introduction-to-linguistic-theory">An Introduction to
                                                Linguistic </a></h3>
                                    </div>
                                </div>


                            </div>


                            <div class="bestseller-total">

                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="book/c-notes-for-professionals"><img
                                                src="user_r/images/index/64e72cac0c0318.41168377.png"
                                                alt="C++ notes for professionals"/></a>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3><a href="book/c-notes-for-professionals">C++ notes for professionals</a>
                                        </h3>
                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- bestseller-area-end -->

        <!-- new-book-area-start -->
        <div class="banner-static-area bg">

            <!-- featured-area-start -->
            <div class="new-book-area pt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb-30">
                                <h2>Fiction Genres</h2>
                                <p>Best of Fiction Books.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="load-insurance-book">


                        <div class="tab-active loadInsurance owl-carousel">

                            <!-- single-product-start -->
                            @foreach($booksInCategory as $book)
                                @if($book->categoryId == 3 )
                                    <div class="tab-total">
                                        <div class="product-wrapper">
                                            <div class="product-img">
                                                @foreach($book->images as $image)
                                                    <a href="book/the-handbook-of-international-trade-and-finance">
                                                        <img src="{{ asset('books/' . $image->image) }}"
                                                             alt="The Handbook of International Trade and Finance"
                                                             class="primary"/>
                                                    </a>
                                                @endforeach
                                                <div class="quick-view">
                                                    <a class="action-view"
                                                       href="book/business-intelligence-and-analytics"
                                                       title="Download">
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </div>
                                                <div class="product-flag">
                                                    <ul>
                                                        <li><span class="sale">new</span> <br></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-details text-center">
                                                <h4>
                                                    <a href="book/business-intelligence-and-analytics">{{ $book->name }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="most-product-area bg pt-90 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title text-center mb-30 section-title-res">
                                    <h2>Books Genres</h2>
                                </div>
                            </div>
                        </div>

                        @php $count = 0; @endphp
                        @foreach($categoriesWithBookCount->chunk(4) as $chunk)
                            <div class="row">
                                @foreach($chunk as $cats)
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                        <div class="section-title-2 mb-30">
                                            <h3>{{$cats->genre}}</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                @foreach($cats->books->take(3) as $book)
                                                    <div class="product-total-2">
                                                        <div class="single-most-product bd mb-18">
                                                            <div class="most-product-img">
                                                                @foreach($book->images as $image)
                                                                    <a href="book/the-handbook-of-international-trade-and-finance">
                                                                        <img
                                                                            src="{{ asset('books/' . $image->image) }}"
                                                                            alt="The Handbook of International Trade and Finance"
                                                                            class="primary"/>
                                                                    </a>
                                                                @endforeach
                                                            </div>
                                                            <div class="most-product-content">
                                                                <h4>
                                                                    <a href="book/siddhartha">{{$book->name}}</a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @if(++$count < count($categoriesWithBookCount->chunk(4)))
                                    <div class="w-100"></div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="recent-post-area pt-95 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title text-center mb-30 section-title-res">
                                    <h2>Latest from our blog</h2>
                                </div>
                            </div>
                            <div class="post-active owl-carousel text-center">
                                <div class="col-lg-12">
                                    <div class="single-post">
                                        <div class="post-img">

                                            <a href="blog/unveiling-the-past-gripping-world-war-ii-history-books"><img
                                                    src="user_r/images/index/6582df567fed96.59575195.jpg"
                                                    alt="Unveiling the Past: Gripping World War II History Books"></a>

                                        </div>
                                        <div class="post-content" style="text-align: justify;">
                                            <h3>
                                                <a href="blog/unveiling-the-past-gripping-world-war-ii-history-books">Unveiling
                                                    the Past: Gripping World War II History Books</a>
                                            </h3>
                                            <span class="meta-author">By: Admin / 2023-12-20</span>
                                            <p>Hey history enthusiasts, book lovers, and fellow
                                                time-travelers! Today, we're
                                                embarking on a literary journey that will take us deep
                                                into the heart of one of
                                                the most pivotal periods in human history—World Wa
                                                ....</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="single-post">
                                        <div class="post-img">

                                            <a href="blog/top-mystery-novels-of-all-time"><img
                                                    src="user_r/images/index/6582de81e91a84.29181605.jpg"
                                                    alt="Top Mystery Novels of All Time"></a>

                                        </div>
                                        <div class="post-content" style="text-align: justify;">
                                            <h3><a href="blog/top-mystery-novels-of-all-time">Top
                                                    Mystery Novels of All Time</a>
                                            </h3>
                                            <span class="meta-author">By: Admin / 2023-12-20</span>
                                            <p>Hey there, fellow sleuths and bookworms! Today, we're
                                                diving deep into the realm
                                                of mystery novels, where every page holds a secret
                                                waiting to be uncovered.
                                                Whether you're a seasoned detective fiction enthusias
                                                ....</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="single-post">
                                        <div class="post-img">

                                            <a href="blog/journey-to-the-stars-a-cosmic-reading-list-for-space-enthusiasts"><img
                                                    src="user_r/images/index/6582dd3b230d84.37605293.jpg"
                                                    alt="Journey to the Stars: A Cosmic Reading List for Space Enthusiasts"></a>

                                        </div>
                                        <div class="post-content" style="text-align: justify;">
                                            <h3>
                                                <a href="blog/journey-to-the-stars-a-cosmic-reading-list-for-space-enthusiasts">Journey
                                                    to the Stars: A Cosmic Reading List for Space
                                                    Enthusiasts</a></h3>
                                            <span class="meta-author">By: Admin / 2023-12-20</span>
                                            <p>Hey cosmic adventurers and stargazers! If you've ever
                                                found yourself staring up
                                                at the night sky, wondering about the mysteries of the
                                                universe, you're not
                                                alone. The great unknown of space has fascinated human
                                                ....</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="single-post">
                                        <div class="post-img">

                                            <a href="blog/culinary-delights-unleashing-your-inner-home-chef-with-quick-and-easy-recipes"><img
                                                    src="user_r/images/index/6582dc3fa972e6.39133402.jpg"
                                                    alt="Culinary Delights: Unleashing Your Inner Home Chef with Quick and Easy Recipes"></a>

                                        </div>
                                        <div class="post-content" style="text-align: justify;">
                                            <h3>
                                                <a href="blog/culinary-delights-unleashing-your-inner-home-chef-with-quick-and-easy-recipes">Culinary
                                                    Delights: Unleashing Your Inner Home Chef with Quick
                                                    and Easy Recipes</a>
                                            </h3>
                                            <span class="meta-author">By: Admin / 2023-12-20</span>
                                            <p>Hey there, aspiring home chefs and kitchen enthusiasts!
                                                If you're anything like
                                                me, the idea of crafting delicious, homemade meals is
                                                both thrilling and, let's
                                                be honest, a tad intimidating. But fear not! Today
                                                ....</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="single-post">
                                        <div class="post-img">

                                            <a href="blog/epic-adventures-await-must-read-fantasy-series-for-fantasy-enthusiasts"><img
                                                    src="user_r/images/index/6582d9e450a300.80487918.png"
                                                    alt="Epic Adventures Await: Must-Read Fantasy Series for Fantasy Enthusiasts"></a>

                                        </div>
                                        <div class="post-content" style="text-align: justify;">
                                            <h3>
                                                <a href="blog/epic-adventures-await-must-read-fantasy-series-for-fantasy-enthusiasts">Epic
                                                    Adventures Await: Must-Read Fantasy Series for
                                                    Fantasy Enthusiasts</a></h3>
                                            <span class="meta-author">By: Admin / 2023-12-20</span>
                                            <p>Greetings, fellow dreamers, magic seekers, and lovers of
                                                fantastical realms!
                                                Today, we're embarking on a literary quest through the
                                                enchanting world of
                                                fantasy series that transport us to realms beyond
                                                imaginat ....</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="single-post">
                                        <div class="post-img">

                                            <a href="blog/your-unique-business-and-money-narrative-50-book-ideas-to-inspire"><img
                                                    src="user_r/images/index/656f2dff13f0a9.34982700.jpg"
                                                    alt="Your Unique Business and Money Narrative: 50 Book Ideas to Inspire"></a>

                                        </div>
                                        <div class="post-content" style="text-align: justify;">
                                            <h3>
                                                <a href="blog/your-unique-business-and-money-narrative-50-book-ideas-to-inspire">Your
                                                    Unique Business and Money Narrative: 50 Book Ideas
                                                    to Inspire</a></h3>
                                            <span class="meta-author">By: Admin / 2023-12-05</span>
                                            <p>Embarking on the journey of writing a book about business
                                                and money is not just a
                                                literary endeavor—it's a chance to share your
                                                experiences, insights, and wisdom
                                                with the world. Whether you're a seasoned entr ....</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- recent-post-area-end -->


                <!-- footer-area-start -->
                <!-- banner-area-start -->
                <div class="banner-area-5 mtb-95">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">

                                <script async
                                        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5449429768096195"
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
                    </div>
                </div>
                <!-- banner-area-end -->

@endsection
