@extends('user.common.app')
<!-- slider-area-start -->
@section('content')
<div class="about-area mb-70">
			<div class="container">
				<div class="row categories">


			<!-- tab-area-start -->
			<div class="tab-content">
				<div class="tab-pane fade show active" id="th">
					<div class="row">
                        <div class="container">
                            @foreach($categories as $category)
                                <div class="">
                                    <h6><a href="{{ route('category_show', ['categoryId' => $category->id]) }}">{{ $category->genre }}</a></h6>
                                </div>
                            @endforeach
                        </div>
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
                            <!-- long ads-->
						</div>
					</div>
				</div>
			</div>
			<!-- ads end -->
@endsection
