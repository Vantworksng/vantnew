/* check if website is loaded in an iframe and redirect - iFrame stealing prevention */
if(top.location!=location){
	top.location.href=document.location.href;
}
$(document).ready(function(){

	/* EU Cookie Law */
	if($('.alert-cookies').length){
		var cName = 'cookie_agreement';
		function readCookie(name){
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for(var i=0;i<ca.length;i++){
				var c = ca[i];
				while (c.charAt(0)==' ') c = c.substring(1,c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
			}
			return null;
		}
		if(readCookie(cName)===null){
			$('.alert-cookies').slideUp(function(){
				$('.alert-cookies').removeClass('hidden').slideDown();
				$('footer').addClass('eu-cookie-visible');
			});
			$('body').on('click','.eu-cookie-law',function(e){
				e.preventDefault();
				var theDate = new Date();
				var fiveYearsLater = new Date( theDate.getTime() + (31536000000 * 5));
				var expiryDate = fiveYearsLater.toGMTString();
				document.cookie = cName+'=1;expires='+expiryDate+';path=/';
				$('.alert-cookies').slideUp(function(){
					$('.alert-cookies').remove();
					$('footer').removeClass('eu-cookie-visible');
				});
			});
		}
	}

/*jquery form validation configuration. Here we declare the values that make the form valid and its error messages. The following is for the sign up form page validation*/

	$("#leadForm").validate({
		rules: {
				first_name: "required",
				last_name: "required",


				email: {
					required: true,
					email: true
				},
				company: "required",
				/*website: "required",*/
				position: "required",
				budget: "required",
				message: "required",

			},
	    messages: {
				first_name: "First name required",
				last_name: "Last name required",
				company: "Your company name is required",

				email: "Please enter a valid email address",
				/*website: "Please enter your company website URL",*/
				position: "Please state your position at your company",
				budget: "Please state your budget",
				message: "Please provide your message"
			}

		});

/*jquery form validation configuration. The following is for the contact page form page validation*/
		$("#contactUsForm").validate({
		rules: {
				title: "required",
				full_name: "required",
				first_name: "required",
				last_name: "required",


				email: {
					required: true,
					email: true
				},
				message_type: "required",
				message: "required",


			},
	    messages: {
				title: "Title required",
				full_name: "Full name required",
				first_name: "first name required",
				last_name: "last name required",

				email: "Please enter a valid email address",
				message_type:  "Please tell us what type of enquiry you are making",
				message: "Please don't forget to send us a message",
			}

		});
		
/*campaign sign up form validation */
	$("#subscribeForm").validate({
		rules: {
				name: "required",
				email: {
					required: true,
					email: true
				},

			},
	    messages: {
				name: "Your name is required",
				email: "Please enter a valid email address",
			}

		});			


if ($('.alert-cookies').css('border-radius') === '0px'){
	$('body').css('padding-top') === '150px';
}
});
