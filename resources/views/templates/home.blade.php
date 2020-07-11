@extends('layout.main')
@section('body')
    
<!-- slider / carousel -->
		<div class="carousel slide" id="main-carousel" data-ride="carousel">

			<!-- slider content -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="item-image">
						<img src="{{url('image/home_slide.jpg')}}" class="img-responsive" alt="slider 1" height="600">
					</div>
					<div class="mask"></div>
					<div class="container">
						<div class="carousel-caption">


							<h1>Grow Your Business</h1>
							<!-- <h2>With effective digital design & marketing solutions</h2>-->
							<h2>With effective data analytics & digital solutions</h2>


							<a href="{{route('solution')}}" class="btn btn-lg btn-primary" style="margin-top:20px;">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ./slider -->

        @include('partials.home.partners')

        @include('partials.home.business')

        @include('partials.home.deliver')

        @include('partials.home.reach')

        @include('partials.home.partnership')

        @include('partials.home.testimonial')

        @include('partials.home.why')

        @include('partials.home.ready')

@endsection
