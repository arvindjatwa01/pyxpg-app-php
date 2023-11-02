<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>We're here for you | Pyx Photography</title>
	<meta charset="UTF-8">
	<meta name="description" content="We love hearing from you, let us know how we can help | Pyx Photography">
	<meta name="keywords" content="Pyx, photographer, contact, support, on demand, affordable, photography, India">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section  -->
	<?php include('header.php');?>
	<!-- Header section end  -->

	<!-- Google Map -->
	<div class="map">
		<!--<iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=pyx photography&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>-->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.783088680937!2d77.73807691413533!3d12.985721018083423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae117ea6fc1e05%3A0xb4c7e1efca361bc0!2sPyx%20Photography!5e0!3m2!1sen!2sin!4v1644566390568!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	<!-- Google Map end -->

	<!-- Contact section  -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-text">
						<h3>Get in touch</h3>
						<p>We're here for you, 24x7. Just fill in the form and one of our team members will get in touch with you</p>
						<ul>
							<li>F78/79, Splendid Times Square, ITPL Main Road <br>Whitefield, Bangalore - 560066</li>
							<li>+91 99865 01995</li>
							<li>support@pyx.co.in</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="contact-form" action="sendemail.php" method="POST">
						<div class="row">
							<div class="col-lg-6">
								<input type="text" placeholder="Your Name" name="firstname" placeholder="First Name" required onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
							</div>
							<div class="col-lg-6">
								<input type="text" placeholder="Your Email" name="email" placeholder="Email address" id="email" required>
								<span id="error"></span>
							</div>
							<div class="col-lg-6">
								<input type="text" pattern="[6789][0-9]{9}" name="mobile" maxlength="10" placeholder="Your Phone Number" onkeypress="return isNumberKey(event)" onkeyup="chkno(this.value)">
								<span id="error5"></span>
							</div>
							<div class="col-lg-12">
								<input type="text" placeholder="Subject" name="project"
                                                placeholder="Subject" required>
								<textarea class="text-msg" placeholder="Message" name="message" required></textarea>
								<button class="site-btn" type="submit" name="send" onclick="done()">send message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end  -->

	<!-- Instagram section -->
	<!--
	<div class="instagram-section">
		<h6>Instagram Feed</h6>
		<div id="instafeed" class="instagram-slider owl-carousel"></div>
	</div>
	-->
	<!-- Instagram section end -->
	
	<!-- Footer section   -->
	
	<!-- Footer section end  -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/instafeed.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/main.js"></script>
	<!----page script--->
	<?php include('footer.php');?>
    <script>
    function done()
    {
       alert('Thank you for contacting us. One of our support agents will be in touch with you shortly.');
    }
    function isNumberKey(evt)
    {
	
	   var charCode = (evt.which) ? evt.which : event.keyCode
	   if (charCode > 31 && (charCode < 48 || charCode > 57))
	   return false;

    	return true;
    }
    </script>
    <script>
	var validate_email = function(email)
	{
      var pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+([a-zA-Z])+/;
      var is_email_valid = false;
      if(email.match(pattern) != null)
      {
        is_email_valid = true;
      }
      return is_email_valid;
    }
	$(document).on("keyup", "#email", function()
	{
     var input_val = $(this).val();
     var is_success = validate_email(input_val); 

     if(!is_success)
     {
       $("#email").focus();
    
       error.textContent = "Please enter a valid email address";
            error.style.color = "red"
     }
    else
     {
  	 
  	   error.textContent="";
     }
    });

	              var error5=document.getElementById("error5");
                   function chkno(phoneno)
                   {
                        var pattern = /^[6-9][0-9]{9}$/;
                           if (pattern.test(phoneno)) 
                           {
                              error5.innerHTML="";
                           }
                           else
                           {
                              error5.innerHTML="Please enter a valid 10 digit mobile number starting with 6, 7, 8 or 9";
                              error5.style.color="red"; 
                           }
                   }
     </script>
	</body>
</html>
