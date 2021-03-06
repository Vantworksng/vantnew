@extends('layout.main')
@section('body')
    
<!-- main content header -->
<div class="widget-header-banner solutions">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<h1>Vantworks Solutions</h1>
					<h2>Partnership that works.</h2>
			</div>
		</div>
	</div>
</div>
<div class="title-container grey-background">
	<div class="main-title">
		<h1>We work with you to deliver services that work.</h1>
	</div>
</div>
<!-- ./main content header -->

<!-- main content -->
<div class="container soln-container">
	<div class="row">
		<div class="col-sm-12 col-xs-12 soln-header">
			<h2>Business Analytics</h2> <span id="businessAnalytics"></span>
		</div>
		<div class="col-sm-6 col-sm-push-6">
			<img class="img-responsive pull-right" src="image/bi-dashboard.png" width="380" height="218">
		</div>
		<div class="col-sm-6 col-xs-12 col-sm-pull-6">

					<p>
					Vantworks has the expertise of generating business insights from your enterprise data. Given our years of experience designing and supporting terabytes of data for large corporations, you can count on us to deliver robust business intelligence solutions for your organisation.
					</p>

				<p><a href="{{route('solution_business')}}" class="btn btn-primary">Learn More</a>
				</p>
		</div>
		
	</div>
	<div class="separator"></div>
</div>
<div class="container soln-container-next">
	<div class="row">
		<div class="col-md-6 col-md-offset-6 col-xs-12 soln-header">
			<h2>Digital Marketing</h2>
		</div>
		<div class="col-sm-6 col-md-6">
			<img class="img-responsive" src="image/lady_phone_mini.png" width="380" height="218">
		</div>
		<div class="col-sm-6 col-xs-12 col-md-6">

					<p>Traditional marketing has evolved. We develop and implement effective digital marketing strategy to promote your products and services online. Using a data-driven approach, we build campaigns that increase awareness, generate leads, and improve sales for your business.
					</p>

				<p><a href="{{route('solution_digital')}}" class="btn btn-primary">Learn More</a>
				</p>
		</div>
	</div>
	<div class="separator"></div>
</div>
<div class="container soln-container-next">
	<div class="row">
		<div class="col-sm-12 col-xs-12 soln-header">
			<h2>Web & Mobile Application</h2><span id="webApplications"></span>
		</div>
		<div class="col-sm-6 col-sm-push-6 ">
			<img class="img-responsive pull-right" src="image/app-laptop-screen.png" width="380" height="218">
		</div>
		<div class="col-sm-6 col-xs-12 col-md-6 col-sm-pull-6">

					<p>
					From idea conceptualization to launching on the cloud, Vantworks can help build your dream web project fast. We use best-in-class web frameworks and platforms to design and host your web apps. We work with both startups and corporate organisations.
					</p>
				<span id="digitalMarketing"></span>
				<p><a href="{{route('solution_web')}}" class="btn btn-primary">Learn More</a>
				</p>
		</div>
	</div>

</div>
<div class="soln_end"></div>

<!-- take action -->
<div class="widget-action widget-override widget-cta-bg-hm">
	<div class="container">
		<div class="widget-container take-action">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Let's Work Together</p>
					<a href="{{route('about_contact')}}" class="btn btn-primary">Contact Us Today</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ./take action -->


@endsection
