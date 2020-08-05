@extends('layout.main_camp')
@section('body')



		<!-- main content header -->
		<div class="widget-container brand-blue-bkg" style="background-color:#2A9BE1;">
			<div>
				<h1>Let's Build Your Application</h1>
				<h2>Get 30% Discount</h2>
			</div>
		</div>
		<!-- ./main content header -->
		<div class="title-container widget-stmnt">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title">
							<h2>Tell Us What You Need</h2>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>


<div class="container">
	<div class="about-us" style="margin-top:0px">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="lead-container" style="background-color:#FFFFFF;">
					<p class="text-center">Or Call Us On: <a style="font-size:24px" href="tel:+13064004777"><b>+1 306-400-4777</b></a></p>
					<form id="leadForm" name="leadForm" enctype="multipart/form-data" class="form-horizontal" method="POST" action="{{route('campaigns')}}">
								@csrf
<div class="form-group"><div class="col-md-12">
<input type="hidden" name="lead_id" value="0" id="lead_id"></div></div>
<div class="form-group"><div class="col-md-12">
<input type="text" name="name" id="name" value="{{ old('name') }}"class="form-control" placeholder="Fullname">
	@if($errors->has('name'))
        <div class="error">{{ $errors->first('name') }}</div>
    @endif
</div></div>
<div class="form-group"><div class="col-md-12">
<input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Your email">
	@if($errors->has('email'))
        <div class="error">{{ $errors->first('email') }}</div>
    @endif
</div></div>
<div class="form-group"><div class="col-md-12">
<input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone (optional)"></div></div>
<div class="form-group"><div class="col-md-12">
<input type="text" name="company" id="company" value="{{ old('company') }}" class="form-control" placeholder="Your company name"></div></div>
<div class="form-group"><div class="col-md-12">
<select name="budget" id="budget" class="form-control">
    <option value="" label="Your Budget">Your Budget</option>
    @foreach ($budgets as $budget)
    @if (old('budget') == $budget)
        <option value="{{$budget}}" selected>{{$budget}}</option>
        @else
        <option value="{{$budget}}">{{$budget}}</option>
        @endif
    @endforeach
</select>
	@if($errors->has('budget'))
        <div class="error">{{ $errors->first('budget') }}</div>
    @endif
</div></div>
<div class="form-group"><div class="col-md-12">
<textarea name="message" id="message" cols="23" rows="6" class="form-control" placeholder="Please provide your App requirements">{{old('message') }}</textarea></div></div>
	@if($errors->has('message'))
	    <div class="error">{{ $errors->first('message') }}</div>
	@endif
<div class="form-group"><div class="col-md-6 col-md-offset-3">
<input type="submit" name="submit" id="submitbutton" value="GET YOUR OFFER" class="btn btn-cta btn-lg btn-block"></div></div></form>
						<div class="form-group">

						<div class="col-sm-12">
							<p class="small">Please note that by submitting this form, you confirm that you accept our website <a href='/about/privacy'>Privacy Policy.</a></p>
						</div>

					</div><!-- /.form-group - terms -->
				</div>
			</div><!-- /.col-md-8 - main content -->
		</div><!-- /.row -->
	</div><!-- /.about-us -->
</div><!-- /.container -->

@endsection

@if (session('contacted'))
    @section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $(document).ready(function() {
                swal({
                    title: "Thank for contacting us.",
                    text: "We'll get back to you soon",
                    icon: "success",
                });
                // swal("Good job!", "You clicked the button!", "success");
            });
        </script>

	<!-- Event snippet for Contact_submit conversion page -->
	<script>
  		gtag('event', 'conversion', {'send_to': 'AW-613635280/NJP-CMqykdoBENCpzaQC'});
	</script>

    @endsection
@endif


