@extends('layout.main')
@section('body')



		<!-- main content header -->
		<div class="widget-container grey-background">
			<div class="main-title">
				<h1>Why Vantworks</h1>
			</div>
		</div>
		<!-- ./main content header -->


<div class="container" style="padding-top:40px">
		<div class="why-use">
			<p class="text-center" style="font-size:18px;"><strong>Vantworks</strong> is a Saskatoon based company that provides digital design and business analytics solutions for startups and corporate organisations. Our mission is to help customers achieve their business objectives through a proper alignment of digital strategy.</p>
			 <p class="text-center">Here is what makes us tick.</p>
			 <div class="row">
				<div class="col-sm-6">
					<h2>Agile</h2>
					<p>We are agile and nimble which enables us to deliver customer requirements fast through multiple iterations and feedback, without being dragged down by unnecessary 'big' bureaucracy.</p>
				</div>
				<div class="col-sm-6">
					<span class="icon">
						<i class="fa fa-rocket fa-fw"></i>
					</span>
				</div>
			 </div><!-- /.row - faster journeys -->
			 <div class="row">
				<div class="col-sm-6 col-sm-push-6">
					<h2>Professional </h2>
					<p>We adopt a professional approach in our delivery process, using best in class technologies and collaboration tools.You are always in the loop as we work on your project.</p>
				</div>
				<div class="col-sm-6 col-sm-pull-6">
					<span class="icon">
						<i class="fa fa-suitcase fa-fw"></i>
					</span>
				</div>
			 </div><!-- /.row - trusted community -->
			 <div class="row">
				<div class="col-sm-6">
					<h2>Affordable</h2>
					<p>Our services are built to world class standards and they are affordable for startups, entrepreneurs and corporate organisations. Whatever your budget is, we can design bespoke solutions that fit your wallet.</p>
				</div>
				<div class="col-sm-6">
					<span class="icon">
						<i class="fa fa-balance-scale fa-fw"></i>
					</span>
				</div>
			 </div><!-- /.row - extra money -->
			 <div class="row">
				<div class="col-sm-6 col-sm-push-6">
					<h2>Customer Friendly </h2>
					<p>We take the time to understand your specific requirements so we can deliver solutions that work. Your satisfaction is our priority. We also provide on-going support for your projects.</p>
				</div>
				<div class="col-sm-6 col-sm-pull-6">
					<span class="icon">
						<i class="fa fa-heart fa-fw"></i>
					</span>
				</div>
			 </div><!-- /.row - environmentally friendly -->


		</div><!-- ./why-use -->
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