@extends('layout.main')
@section('body')



		<!-- main content header -->
		<div class="widget-container grey-background">
			<div class="main-title">
				<h1>Contact Vantworks</h1>
			</div>
		</div>
		<!-- ./main content header -->

<div class="container">
	<div class="about-us">
		<div class="row">
			<div class="col-md-8">
					<h4>Please fill your details to get in touch with us and we shall respond within one working day.</h4>
                    <form
                        class="form-horizontal"
                        method="POST"
                        action="{{route('leads')}}">
                            @csrf
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input type="hidden" name="contact_id" value="0" id="contact_id">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label col-md-2 col-md-offset-2  required">Your Title
                                    <span class="leftnav_required">* </span>
                                </label>
                                <div class="col-md-8">
                                    <select name="title" id="title" name="title" class="form-control" >
                                        <option disabled selected>Select Title </option>
                                        @foreach ($titles as $title)
                                            @if (old('title') == $title)
                                                <option value="{{$title}}" selected>{{$title}}</option>
                                            @else
                                                <option value="{{$title}}">{{$title}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('title'))
                                        <div class="error">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group small">
                                <label for="first_name" class="control-label col-md-2 col-md-offset-2 form-top-space required">Full Name
                                    <span class="leftnav_required">* </span>
                                </label>
                                <div class="col-md-4 form-top-space">
                                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="first name">
                                    @if($errors->has('first_name'))
                                        <div class="error">{{ $errors->first('first_name') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4 form-top-space">
                                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="surname">
                                    @if($errors->has('last_name'))
                                        <div class="error">{{ $errors->first('last_name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label col-md-2 col-md-offset-2 required">Your Email
                                    <span class="leftnav_required">* </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Your email">
                                    @if($errors->has('email'))
                                        <div class="error">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="control-label col-md-2 col-md-offset-2 optional">Phone</label>
                                <div class="col-md-8">
                                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone (optional)">
                                    @if($errors->has('phone'))
                                        <div class="error">{{ $errors->first('phone') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message_type" class="control-label col-md-2 col-md-offset-2 required">Enquiry Type
                                    <span class="leftnav_required">* </span>
                                </label>
                                <div class="col-md-8">
                                    <select name="enquiry" id="message_type" class="form-control">
                                        <option selected disabled>select enquiry type</option>
                                        @foreach ($enquiries as $enquiry)
                                            @if (old('enquiry') == $enquiry)
                                                <option value="{{$enquiry}}" selected>{{$enquiry}}</option>
                                            @else
                                                <option value="{{$enquiry}}">{{$enquiry}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('enquiry'))
                                        <div class="error">{{ $errors->first('enquiry') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="control-label col-md-2 col-md-offset-2 required">Your Message
                                    <span class="leftnav_required">* </span>
                                </label>
                                <div class="col-md-8">
                                    <textarea name="message" id="message" cols="23" rows="6" class="form-control" placeholder="Please enter your message">{{ old('message') }}</textarea>
                                    @if($errors->has('message'))
                                        <div class="error">{{ $errors->first('message') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button class="btn btn-lg btn-primary btn-block">Contact Us</button>
                                </div>
                            </div>
                        </form>
					<div class="row">
						<div class="col-md-3">
						&nbsp;
						</div>

						<div class="col-md-9">
							<p class="small">Please note that by submitting this form, you confirm that you accept our website <a href='{{route('privacy')}}'>Privacy Policy.</a></p>
						</div>

					</div><!-- /.form-group - terms -->
				

			</div><!-- /.col-md-8 - main content -->
			<div class="col-md-4">
				<div class="address-wrap">
				   <h4>Contact Address</h4>
				   <div class="address-details">
						   <p>Vantworks Limited</p>
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

@if (session('contact'))
    @section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $(document).ready(function() {
                swal({
                    title: "Thanks for contacting us.",
                    text: "We'll get back to you soon",
                    icon: "success",
                });
                // swal("Good job!", "You clicked the button!", "success");
            });
        </script>

    @endsection
@endif
