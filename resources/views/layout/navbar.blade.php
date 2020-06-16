
<!-- header -->
<header>
	<div class="container">
		<!-- main navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Cookie law, hidden, it's shown with jQuery code if user never saw it before -->
				<!--<div class="alert alert-cookies alert-dismissible hidden">
					<button type="button" class="close eu-cookie-law" data-dismiss="alert"><i class="fa fa-times"></i></button>
					<p>We use cookies to give you the best experience. By continuing, you agree to our use of cookies. See <a href="/cookies">cookie policy.</a></p>
				</div>-->
				<!-- logo and mobile menu button -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar"><i class="fa fa-bars"></i></button>
					<a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('image/vantworks-logo.png')}}" alt="Vantworks logo"></a>
				</div>
				<!-- menu container -->
				<div class="collapse navbar-collapse" id="top-navbar">
					<!-- center aligned -->
					<ul class="nav navbar-nav text-left">
						<!--<li class=""><a href="">SOLUTIONS</a></li>-->

						<li class="dropdown auto-show " >
							<!-- data-toggle="dropdown" has been removed dropdown is now controlled by javascript -->
							<a href="{{route('solution')}}" >SOLUTIONS <i class="caret hidden-xs hidden-sm"></i></a>
			          	<ul class="dropdown-menu hidden-xs hidden-sm" >
			          		<li class="" ><a href="{{route('solution_business')}}" >Business Analytics</a></li>
			          		<li class="" ><a href="{{route('solution_digital')}}" >Digital Marketing</a></li>
				            <li class="" ><a href="{{route('solution_web')}}" >Web & Mobile Applications</a></li>			
			          	</ul>
			         </li>

                        <script type="text/javascript">
                                /* Sarting function to show dropdown list on mouse over */
                                    $(function(){
                            $('.dropdown, .auto-show').hover(
                                    function() {
                                        $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                                        //$(this).toggleClass('open');
                                        // $('b', this).toggleClass("caret caret-up");
                                    },
                                    function() {
                                        $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                                        //$(this).toggleClass('open');
                                        //$('b', this).toggleClass("caret-up");
                                    });
                            });
                                /* Ending function that displays dropdown menu on mouse over */

						</script>

						<li class="visible-xs visible-sm solutions-child " ><a href="{{route('solution_business')}}" >Business Analytics</a></li>	
						<li class="visible-xs visible-sm solutions-child " ><a href="{{route('solution_digital')}}" >Digital Marketing</a></li>		
						<li class="visible-xs visible-sm solutions-child " ><a href="{{route('solution_web')}}" >Web & Mobile Applications</a></li>


						<li class=""><a href="{{route('about_why')}}">WHY VANTWORKS</a></li>
						<li class=""><a href="{{route('about')}}">ABOUT</a></li>
						<li class=""><a href="{{route('about_contact')}}">CONTACT US</a></li>
					</ul>
					<!-- right side buttons -->
					<ul class="nav navbar-nav navbar-right visible-sm visible-md visible-lg">
						<li><a href="tel:+442030868255" class="btn btn-head-signup"><i class="fa fa-phone fa-fw"></i> <b>+1 306-400-4777</b></a></li>
					</ul>
					<!-- mobile only right side buttons -->
					<ul class="nav navbar-nav navbar-right visible-xs">
						<li><a href="tel:+442030868255" class="btn btn-head-signup"><i class="fa fa-phone fa-fw"></i> <b>+1 306-400-4777</b></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- ./main navbar -->
	</div>
</header>
<!-- ./header -->