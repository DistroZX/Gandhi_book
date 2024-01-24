	@extends('user.common.app')

	@section('content')

<!-- header-area-end -->

<!-- content-area-start -->
<div class="about-area mb-70">
	<div class="container">
		<div class="row categories">


	<!-- tab-area-start -->
	<div class="tab-content">
		<div class="tab-pane fade show active" id="th">
			<div class="row">

                    @foreach($authors as $author)
                <div class="col-md-10 col-6">
                    <h6><a href="#">{{$author->name}}</a></h6>
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

			</div>
		</div>
	</div>
	<!-- pagination-area-end -->

<!-- content-area-end -->
        </div>
</div>

	<!-- ads -->

	<!-- ads end -->

<!-- footer-area-start -->
<!-- banner-area-start -->

<!-- banner-area-end -->
@endsection
