@extends('layout.main')
@section('body')

		<!-- main content header -->
		<div class="widget-container grey-background">
			<div class="main-title">
				<h1>Our Process</h1>
			</div>
		</div>
		<!-- ./main content header -->

		<div class="container" style="padding:40px 40px 0px; font-size:22px;">
			<div class="row">
				<h2 style="font-size:22px; text-align:center;"> <strong>Vantworks</strong> follow a simple agile process to deliver your project on time and within budget, <br/>whatever your requirements may be. </h2>
			</div>
		</div>

			<div class="container service_list" style="padding-top:40px">
				<div class="service_item">
					 <div class="row">
						<div class="col-sm-4">
							<img class="service-image img-responsive" src="{{asset('image/requirement.png')}}">
						</div>
						<div class="col-sm-8">
							<h2>Requirement Analysis</h2>
							<p>A susccessful digital strategy starts with first understanding the challenge you have at hand. We work with your team to understand your needs and carefully elicitate your business requirements.</p>
						</div>
					 </div><!-- /.row - trusted community -->
				</div><!-- ./service_item -->
			</div><!-- /.container -->

			<div class="container service_list">
				<div class="service_item">
					 <div class="row">
						<div class="col-sm-4">
							<img class="service-image img-responsive" src="{{asset('image/strategy.png')}}">
						</div>
						<div class="col-sm-8">
							<h2>Strategy</h2>
							<p>The next stage is to build a digital result-driven strategy that directly impacts your bottom line. Here plans of action are defined and measurable goals/outomes are determined. Actions are prioritized according to urgency.</p>
						</div>
					 </div><!-- /.row - trusted community -->
				</div><!-- ./service_item -->
			</div><!-- /.container -->
			<div class="container service_list">
				<div class="service_item">
					 <div class="row">
						<div class="col-sm-4">
							<img class="service-image img-responsive" src="{{asset('image/implementation.png')}}">
						</div>
						<div class="col-sm-8">
							<h2>Implementation</h2>
							<p> Here actions are turned into actual work involving story boards, mockups, designs and prototypes. We create professional looking digital solutions that lead to achievement of the goals defined earlier.</p>
						</div>
					 </div><!-- /.row - trusted community -->
				</div><!-- ./service_item -->
			</div><!-- /.container -->

			<div class="container service_list">
				<div class="service_item">
					 <div class="row">
						<div class="col-sm-4">
							<img class="service-image img-responsive" src="{{asset('image/software-test.png')}}">
						</div>
						<div class="col-sm-8">
							<h2>Test</h2>
							<p>Development environment are created for client's feedback. Proper testing is done to ensure all elements of the design and functional features are up to scratch. Web apps are tested across different devices for best user experience.</p>
						</div>
					 </div><!-- /.row - trusted community -->
				</div><!-- ./service_item -->
			</div><!-- /.container -->
			<div class="container service_list">
				<div class="service_item">
					 <div class="row">
						<div class="col-sm-4">
							<img class="service-image img-responsive" src="{{asset('image/launch.png')}}">
						</div>
						<div class="col-sm-8">
							<h2>Launch</h2>
							<p>Once the project is launched, we measure user interaction and analyse data for insights to further improve the attainment of defined goals. </p>
						</div>
					 </div><!-- /.row - trusted community -->
				</div><!-- ./service_item -->
			</div><!-- /.container -->

		<!-- take action -->
		<div class="widget-action widget-override widget-cta-bg-hm">
			<div class="container">
				<div class="widget-container take-action">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>Let's Work On Your Next Project</p>
							<a href="{{route('about_contact')}}" class="btn btn-primary">Contact Us Today</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ./take action -->

@endsection