@extends('layout.main')
@section('body')

<!-- main content header -->
		<div class="widget-container grey-background">
			<div class="main-title">
				<h1>About Vantworks</h1>
			</div>
		</div>
		<!-- ./main content header -->

<div class="container">
	<div class="about-us">
		<div class="row">
			<div class="col-md-8">
								
				 <p>Vantworks is a software company that utilizes the latest technologies to build web applications and provide business analytics solutions for entrepreneurs, startups and corporate organisations. We help our customers to achieve their successful IT strategies by building creative bespoke solutions that align with business goals.</p>
				 <p>Although we are a small business, we are passionate, agile and keep seeking innovative ways to enable our clients to achieve their bottom line better, faster and cheaper.</p>
				 <p>Our goal is to enable small and medium enterprises compete favourably in the digital business environment. </p>
				 <p> Our creative team is passionate and knowledgeable in providing <a href="{{route('solution')}}">solutions</a> that broadly include <a href="{{route('solution')}}#businessAnalytics">business analytics</a>, <a href="{{route('solution')}}#digitalMarketing">digital marketing</a> and <a href="{{route('solution')}}#webApplications">web applications</a>, to deliver real business value to our growing clients.</p>
				 <p>Vantworks can improve your business performance by helping you  enhance existing customers as well as acquire and attract potential new customers.</p>
				 <p>Let's work together to make great things happen for your business. Why not <a href="{{route('about_contact')}}">drop us a line here</a>? </p>
								
					
			</div><!-- /.col-md-8 - main content -->
			<div class="col-md-4">
				<div class="address-wrap">
				   <h4>Contact Address</h4>
				   <div class="address-details">
						<p>220A 20th Street W</p>
						<p>Saskatoon, SK</p>
						<p>S7M 0W9</p>
						<p>Phone: <a href="tel:+13064004777">+1 306-400-4777</a></p>
					    <p>Email: <a href="mailto:info@vantworks.ca">info@vantworks.ca</a> </p>
					   
					</div> <!-- end agent-details -->
				</div><!-- /.user-profile -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.about-us -->
</div><!-- /.container -->
@endsection
