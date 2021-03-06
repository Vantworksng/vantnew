@extends('layout.main')
@section('body')
    


<div class="widget-header-banner applications">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<h1>Web & Mobile App Development</h1>
			</div>
		</div>
	</div>
</div>

<!-- main top content -->
<div class="container">
	<div class="widget6">
		<h1>We build professional and responsive applications with the latest frameworks.</h1>
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img src="{{asset('/image/app-laptop-screen.png')}}" alt="ad" width="474" height="273">
			</div>
			<div class="col-md-7 col-sm-6">
				<h3>Launch Your Idea</h3>
				<p class="text-italic">Vantworks team can help turn your tech ideas into tangible website and applications your target audience will love. 
					We work with you to understand and conceptualize your ideas and then build prototypes. Once you are happy, your app is launched in the cloud. 
				</p>
			</div>
		</div>
	</div>
</div>
<!-- ./main top content -->

<!-- highlights -->
<div class="widget-container widget_band">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="icon">
					<i class="fa fa-rocket fa-fw"></i>
				</div>
				<h2>Agile</h2>
				<p>We work with you to bring your ideas to life fast through multiple iterations, based on feedback and testing.</p>
			</div>
			<div class="col-sm-4">
				<div class="icon">
					<i class="fa fa-gears fa-fw"></i>
				</div>
				<h2>Latest Technology</h2>
				<p>Using the latest web development tools and frameworks, we build standard and responsive apps that adapts to any device.</p>
			</div>
			<div class="col-sm-4">
				<div class="icon">
					<i class="fa fa-balance-scale fa-fw"></i>
				</div>
				<h2>Affordable</h2>
				<p>Although our work is done to a professional standard, individual client needs are tailored to fit their budget, scope and target market.</p>
			</div>
		</div>
	</div>
</div>
<!-- ./highlights -->

<!-- features -->
<div class="widget-container widget8">
	<div class="container">
		<h1>Website Development Solutions</h1>
		<div class="row feature-table">
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-lightbulb-o fa-fw"></i>
				<p>Idea Elicitation</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-paint-brush fa-fw"></i>
				<p>Design</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-code fa-fw"></i>
				<p>Coding</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-gears fa-fw"></i>
				<p>Development</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-tablet fa-fw"></i>
				<p>Prototyping</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-users fa-fw"></i>
				<p>Unit Testing</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-cloud-upload fa-fw"></i>
				<p>Inbound Marketing</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-search fa-fw"></i>
				<p>Search engine optimisation</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-arrow-circle-up fa-fw"></i>
				<p>Growth strategy</p>
			</div>
		</div>
	</div>
</div>
<!-- ./features -->

<!-- take action -->
<div class="widget-action widget-override widget-cta-bg">
	<div class="container">
		<div class="widget-container take-action">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Let's Work On Your Project</p>
					<a href="{{route('about_contact')}}" class="btn btn-primary">Contact Us Today</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ./take action -->


@endsection
