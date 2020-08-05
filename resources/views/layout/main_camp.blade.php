<!DOCTYPE html>






<html lang="en">


<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" >
<meta name="description" content="Vantworks is a Saskatchewan based data analytics, web applications development and digital marketing company. Our solutions drive growth for startups and small businesses." >
<meta name="keywords" content="Business intelligence, business analytics, data science, data analysis, machoine learning, website design, web applications, cloud Hosting, digital marketing, Canada website development, Saskatchewan web develoment, Saskatoon web develoment," >
<title> Web & Mobile App Development in Canada | Vantworks</title>
<!-- Open graph tags -->
<meta property="fb:app_id" content=""/>
<meta property="og:url" content="index.html"/>
<meta property="og:title" content="Vantworks | Business Analytics, Website Design, Web Applications"/>
<meta property="og:site_name" content="Vantworks Limited"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Vantworks provides Business analytics, website design and digital marketing solutions that drive growth for startups and small businesses."/>
<meta property="og:image" content="image/vantworks-logo.png">

<!-- END Open graph tags -->


<!-- jQuery cdn files -->





<!-- END links for jQuery ALS scroll -->









		
<link href="{{asset('/favicon.ico')}}" rel="icon" >
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css" >
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" >
<link href="{{asset('css/bootstrap-overrides.css')}}" media="screen" rel="stylesheet" type="text/css" >
<link href="{{asset('css/styles.css')}}" media="screen" rel="stylesheet" type="text/css" >


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.placeholder.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
@yield('js')
<link href='https://fonts.googleapis.com/css?family=Raleway:100,300,400,700|Lato:bold,300,400,700|Montserrat:100,300,400,700|Comfortaa|Oxygen:bold' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,800' rel='stylesheet' type='text/css'>





<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168803143-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-168803143-1');
  gtag('config', 'AW-613635280');
</script>



<meta name="google-site-verification" content="HmaYvZtkIGPOR8H1SDCbS5rHWhAC8gNyk7EGl7eQe4s" />



</head>
<body>

@include('layout.navbar')

@yield('body')


<!-- footer -->
<footer style="background-color:#F1F1F1;">
	<!-- top footer -->
	<div class="footer-top">
		<div class="container">
			<div class="row text-left">
				<div class="col-sm-4 col-md-3">
					<img src="{{asset('image/logo-footer.png')}}" alt="slider 1">
					<div style="padding-left:15px;margin-top:5px;">
						<p>220A 20th Street W</p>
						<p>Saskatoon, SK</p>
						<p>S7M 0W9</p>
						<a style="padding-left:0px;" href="tel:+13064004777" class="btn btn-head-signup"><i class="fa fa-phone fa-fw"></i> <b>+1 306-400-4777</b></a>
					</div>
				</div>
				<div class="col-sm-4 col-md-3 footer-p-setting">
					<h1>Company</h1>
					<ul class="not-styled">
						<li><a href="{{route('about')}}">About Us</a></li>
						<li><a href="{{route('about_why')}}">Why Vantworks?</a></li>
						<li><a href="{{route('process')}}">Our Process</a></li>
						<li><a href="{{route('about_contact')}}">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-sm-4 col-md-3 footer-p-setting">
					<h1>Solutions</h1>
					<ul class="not-styled">						
						<li><a href="{{route('solution_business')}}">Business Analytics</a></li>
						<li><a href="{{route('solution_digital')}}">Digital Marketing</a></li>
						<li><a href="{{route('solution_web')}}">Web & Mobile Applications</a></li>
						<!-- <li><a href="/business-website-design">Business Website Design</a></li> -->
					</ul>
				</div>

			</div>
		</div>
	</div>
	<!-- ./top footer -->


	<!-- bottom footer -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<!--<ul class="not-styled footer-links">
						<li><a href="/about/privacy">Privacy Policy</a></li>
						<li><a href="/cookies">Cookie Policy</a></li>
					</ul>-->
					<p class="small">&copy; 2020 Vantworks Limited. All rights reserved. Vantworks Limited is a federally registered company in Canada.
						<a href="{{route('privacy')}}" target="_blank" >Privacy Policy</a>
						| <a href="{{route('cookie')}}" target="_blank" >Cookie Policy.</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- ./bottom footer -->
</footer>
<!-- ./footer -->




</body>


</html>
