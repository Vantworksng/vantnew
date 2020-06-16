@extends('layout.main')
@section('body')
    

<div class="widget-header-banner analytics">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Business Analytics</h1>
			</div>
		</div>
	</div>
</div>

<!-- main top content -->
<div class="container">
	<div class="widget6">
		<h1>We design and implement robust business intellegence solutions for corporate organisations.</h1>
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img src="{{asset('/image/bi-dashboard.png')}}" alt="ad" width="474" height="273">
			</div>
			<div class="col-md-7 col-sm-6">
				<h3>Business Insights</h3>
				<p class="text-italic">Using our expertise in data mining, we can generate actionable insights, 
					from your enterprise data to enable your organisation make better decisons that drive growth and achieve business objectives.
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
					<i class="fa fa-database fa-fw"></i>
				</div>
				<h2>Data Warehousing</h2>
				<p>Integrate and model diverse business data into a central repository for operational and reporting purposes.</p>
			</div>
			<div class="col-sm-4">
				<div class="icon">
					<i class="fa fa-dashboard fa-fw"></i>
				</div>
				<h2>Business Intelligence</h2>
				<p>Gain quick insights across your enterprise and measure KPI trends with interactive reports and dashboards.</p>
			</div>
			<div class="col-sm-4">
				<div class="icon">
					<i class="fa fa-sliders fa-fw"></i>
				</div>
				<h2>Database Management</h2>
				<p>We deploy and tune robust database systems that powers your application data running on Oracle, SQL Server and MySQL.</p>
			</div>
		</div>
	</div>
</div>
<!-- ./highlights -->

<!-- features -->
<div class="widget-container widget8">
	<div class="container">
		<h1>Business Analytics Solutions</h1>
		<div class="row feature-table">
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-database fa-fw"></i>
				<p>Database design</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-bar-chart fa-fw"></i>
				<p>Business Intelligence</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-clone fa-fw"></i>
				<p>Backup and recovery</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-gears fa-fw"></i>
				<p>Performance tuning</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-line-chart fa-fw"></i>
				<p>Predictive modeling</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-users fa-fw"></i>
				<p>Data security</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-code-fork fa-fw"></i>
				<p>Data integration</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-rocket fa-fw"></i>
				<p>Actionable insights</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<i class="fa fa-pie-chart fa-fw"></i>
				<p>Reports and Dashboards</p>
			</div>
		</div>
	</div>
</div>
<!-- ./features -->

<!-- take action -->
<div class="widget-action widget-override widget-cta-bg-hm">
	<div class="container">
		<div class="widget-container take-action">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Need to Get Better Insights from Your Data?</p>
					<a href="{{route('about_contact')}}" class="btn btn-primary">Contact Us Today</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ./take action -->


@endsection
