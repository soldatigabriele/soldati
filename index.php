<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- titolo -->
	<title>UKFAST</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="include/css/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	<!-- jQuery -->
	<script src="include/jQuery/jquery-1.12.4.js"></script>
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="include/css/font.css">
	<link rel="stylesheet" type="text/css" href="include/css/menu.css">
	<link rel="stylesheet" type="text/css" href="include/css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="include/css/footer.css">
	<link rel="stylesheet" type="text/css" href="include/css/menu.css">
	<link rel="stylesheet" type="text/css" href="include/css/testimonial.css">
	<link rel="stylesheet" type="text/css" href="include/css/compare.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<!-- autoscroll -->
	<script src="include/autoscroll/animatescroll.js"></script>

</head>
<body>
<div class="content" >
	<?php include('menu.php');?>

	<div class="home-header">
		<div class="centre">
			<span class="title bold">The Best Way To Run Your</span>
			<span class="keyword title">Business</span>
		</div>
		<div class="centre header_subtitle subtitle light">
			If you are a small business, a start-up or an enterprise business, you can find the perfect solution 
			for your business.<br>
			More than 30.000 people around the world already enjoy our products.
		</div>
	</div>
	<div class="outter">
		<img src="include/images/division.svg" >
		<div class="products">
			<div class="t1">
				<img class="img-responsive img img-circleborder img-sign centre" src="include/images/2.jpg" alt="Circle image">
				<div class="description">
					<span class="centre subtitle bold">SCALABLE</span>
					<span class="centre subtext ">Build hybrid IT</span>
				</div>
			</div>
			<div class="t1" style="">
				<img class="img-responsive img img-circleborder img-sign centre" src="include/images/4.jpg" alt="Circle image">
				<div class="description">
					<span class="centre subtitle bold">SECURE</span>
					<span class="centre subtext ">High security standards</span>
				</div>
			</div>
			<div class="t1" style="">
				<img class="img-responsive img img-circleborder img-sign centre" src="include/images/3.jpg" alt="Circle image">
				<div class="description">
					<span class="centre subtitle bold">RELIABLE</span>
					<span class="centre subtext ">Unbound your creativity</span>
				</div>
			</div>
		</div>
		<div class="customers_container">
			<div class="customers_logos centre"> 
				<div class="logo1"><img src="include/images/logos/VMware_logo_grey.png" alt=""></div>
				<div class="logo2"><img src="include/images/logos/BionX.png" alt=""></div>
				<div class="logo3"><img src="include/images/logos/Brompton.png" alt=""></div>
				<div class="logo4"><img src="include/images/logos/Catrike+logo+grey.png" alt=""></div>
				<div class="logo5"><img src="include/images/logos/Electra+Grey+Logo.png" alt=""></div>
				<div class="logo6"><img src="include/images/logos/Specialized+Logo+Grey.png" alt=""></div>
				<div class="logo7"><img src="include/images/logos/Noreco_grey_rgb.jpg" alt=""></div>
				<div class="logo8"><img src="include/images/logos/41_digital_logo_grey_HI.png" alt=""></div>
			</div>
		</div>
	</div>

	<div id="compare_mobile">
		<div class="container">
			<div class="centre title bold">Choose the perfect plan for you</div>
			<div class="pricing_chart plan_1">
				<div class="plan_title title">
					<div class="title">Basic</div>
					<p class="price1 text">£1,99</p>
				</div>
				<a href="payment.php?type=basic">
					<div class="button_out"><div class="btn btn-default btn-lg button"><span class="subtext button">CHOOSE BASIC</span></div></div>
				</a>
				<div class="updates">
					<div class="space subtext">1 GB</div> <div class="cloud subtext"> of free cloud space </div>
				</div>
				<div class="list_out">
				<ul>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Web application Cloudflare firewall</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Image optimizations with Polish</span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Mobile optimizations with Mirage</span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">20 Page Rules included </span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Access to raw logs </span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Named solution and engineers </span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Access to China Datacenters</span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">100 Page Rules included </span></li>
				</ul>
				</div>
				
			</div>

			<div class="pricing_chart plan_2">
				<div class="plan_title title">
					<div class="title">Premium</div>
					<p class="price2 text">£4,99</p>
				</div>
				<a href="payment.php?type=premium">
					<div class="button_out"><div class="btn btn-default btn-lg button"><span class="subtext button">GET PREMIUM</span></div></div>
				</a>
				<div class="updates">
					<div class="space subtext">50 GB</div> <div class="cloud subtext"> of free cloud space </div>
				</div>
				<div class="list_out">
				<ul>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Web application Cloudflare firewall</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Image optimizations with Polish</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Mobile optimizations with Mirage</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">20 Page Rules included </span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Access to raw logs </span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Named solution and engineers </span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Access to China Datacenters</span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">100 Page Rules included </span></li>
				</ul>
				</div>
				

			</div>

			<div class="pricing_chart plan_3">
				<div class="plan_title title">
					<div class="title">Enterprise</div>
					<p class="price3 text">£9,99</p>
				</div>
				<a href="payment.php?type=enterprise">
					<div class="button_out"><div class="btn btn-success btn-lg button"><span class="subtext button">GO ENTERPRISE</span></div></div>
				</a>
				<div class="updates">
					<div class="space subtext">1 TB</div> <div class="cloud subtext"> of free cloud space </div>
				</div>
				<div class="list_out">
				<ul>
						<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">24/7/365 enterprise-grade support</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">100% uptime guarantee </span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Advanced DDoS protection </span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Multiple custom SSL</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Access to raw logs </span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Named solution and engineers </span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Access to China Datacenters</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">100 Page Rules included </span></li>
				</ul>
				</div>
				
			</div>


		</div>
	</div>
	<div id="compare">
		<div class="container">
			<div class="centre title bold">Choose the perfect plan for you</div>
			<div class="pricing_chart plan_1">
				<div class="plan_title title">
					<div class="title">Basic</div>
					<p class="price1 subtext">£1,99</p>
				</div>
				<a href="payment.php?type=basic">
					<div class="button_out"><div class="btn btn-default btn-lg button"><span class="subtext button">CHOOSE BASIC</span></div></div> 
				</a>
				<div class="updates">
					<div class="space subtext">1 GB</div> <div class="cloud subtext"> of free cloud space </div>
				</div>
				<div class="list_out">
				<ul>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Web application Cloudflare firewall</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Image optimizations with Polish</span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Mobile optimizations with Mirage</span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">20 Page Rules included </span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Access to raw logs </span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Named solution and engineers </span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Access to China Datacenters</span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">100 Page Rules included </span></li>
				</ul>
				</div>
				
			</div>

			<div class="pricing_chart plan_2">
				<div class="plan_title title">
					<div class="title">Premium</div>
					<p class="price2 subtext">£4,99</p>
				</div>
				<a href="payment.php?type=premium">
					<div class="button_out"><div class="btn btn-default btn-lg button"><span class="subtext button">GET PREMIUM</span></div></div>
				</a>
				<div class="updates">
					<div class="space subtext">50 GB</div> <div class="cloud subtext"> of free cloud space </div>
				</div>
				<div class="list_out">
				<ul>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Web application Cloudflare firewall</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Image optimizations with Polish</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Mobile optimizations with Mirage</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">20 Page Rules included </span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Access to raw logs </span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Named solution and engineers </span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">Access to China Datacenters</span></li>
					<li><span class="glyphicon glyphicon-remove-sign gray"></span><span class="feature subtext subtextgray">100 Page Rules included </span></li>
				</ul>
				</div>
				

			</div>

			<div class="pricing_chart plan_3">
				<div class="plan_title title">
					<div class="title">Enterprise</div>
					<p class="price3 subtext">£9,99</p>
				</div>
				<a href="payment.php?type=enterprise">
					<div class="button_out"><div class="btn btn-success btn-lg button"><span class="subtext button">GO ENTERPRISE</span></div></div>
				</a>
				<div class="updates">
					<div class="space subtext">1 TB</div> <div class="cloud subtext"> of free cloud space </div>
				</div>
				<div class="list_out">
				<ul>
						<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">24/7/365 enterprise-grade support</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">100% uptime guarantee </span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Advanced DDoS protection </span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Multiple custom SSL</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Access to raw logs </span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Named solution and engineers </span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">Access to China Datacenters</span></li>
					<li><span class="glyphicon glyphicon-ok-sign"></span><span class="feature subtext">100 Page Rules included </span></li>
				</ul>
				</div>
				
			</div>


		</div>
	</div>
	<div class="teste">
		<div id="testimonials_mobile">
				<div class="centre title bold">What our costumers say about us</div>
				<div class="testimonials_images">
					<img src="include/images/testimonials/1.jpg">
					<p class="subtitle bold">Bran Georges</p>
					<p class="text bold"> I have always found their service to be very good and very nice people 
						to deal with, and we continue to use their services.</p>
					<img src="include/images/testimonials/2.jpg">
					<p class="subtitle bold">Morris Zimman</p>
					<p class="text bold"> In communication with Anna we always found her to be approachable, 
						friendly and professional. </p>
					<img src="include/images/testimonials/6.jpg">
					<p class="subtitle bold">Pricey Dunkan</p>
					<p class="text bold">I am really happy with the work produced and I’d highly recommend them 
						to anybody!</p>
					<img src="include/images/testimonials/5.jpg">
					<p class="subtitle bold">Lutor Tasker</p>
					<p class="text bold">The Foundation would highly recommend to other organisations looking for 
						a CMS solution to the problem</p>
			</div>
		</div>


		<div id="testimonials">
			<div class="container">
				<div class="centre title bold">What our costumers say about us</div>
				<div class="testimonials_images">
				    <ul class="photo-grid">
					<li>
						<figure>
						    <img src="include/images/testimonials/1.jpg" height="380" width="600">
						    <figcaption>
							<p class="text bold"> I have always found their service to be very good and 
							very nice people to deal with, and we continue to use their services.
							 <br><br> BRAN GEORGE</p>
						    </figcaption>
						</figure>
					</li>
					<li>
						<figure>
						    <img src="include/images/testimonials/2.jpg" height="380" width="600">
						    <figcaption>
							<p class="text bold"> In communication with Anna we always found her to be 
								approachable, friendly and professional.<br><br> MORRIS ZIMMAN</p>
						    </figcaption>
						</figure>
					</li>
					<li>
						<figure>
						    <img src="include/images/testimonials/6.jpg" height="380" width="600">
						    <figcaption>
							<p class="text bold">I am really happy with the work produced and I’d 
								highly recommend them to anybody!<br><br>PRICEY DUNKAN</p>
						    </figcaption>

						</figure>
					</li>
					<li>
						<figure>
						    <img src="include/images/testimonials/5.jpg" height="380" width="600">
	<figcaption>
							<p class="text bold"> I have always found their service to be very good and very nice people to deal with, and we continue to use their services.<br><br> LUTOR TASKER</p>
	</figcaption>

						</figure>
					</li>
				    </ul>
				</div>
			</div>
		</div>
	</div>	
	<div class="clearfix"></div>
	<?php include('footer.php');?>
</div>
<script type="text/javascript"> 
$( document ).ready(function() {

	$( window ).resize(function() {
		if ($(window).width() > 768) {
			$(window).scroll(function() {
				if ( $(window).scrollTop() >= 100 ) {
					$('#menu').css({ transition : 'background-color 0.5s ease-in-out', "background-color": "white" });
					$('.logo').css('color', 'black');
				} else {
					$('#menu').css('background', 'none');
					$('.logo').css('color', 'white');
				}
			});

		}else{
			$('#menu').css('background', 'white');
			$('.logo').css('color', 'black');
	
		}
	});
	
		if ($(window).width() > 768) {
			$(window).scroll(function() {
				if ( $(window).scrollTop() >= 100 ) {
					$('#menu').css({ transition : 'background-color 0.5s ease-in-out', "background-color": "white" });
					$('.logo').css('color', 'black');
				} else {
					$('#menu').css('background', 'none');
					$('.logo').css('color', 'white');
				}
			});

		}
		if ($(window).width() < 767) {
		
			$('#menu').css('background', 'white');
			$('.logo').css('color', 'black');
	
		}
	
	// $(window).scroll(function() {
	//     if ( $(window).scrollTop() >= 100 ) {
	// 	    $('#menu').css({ transition : 'background-color 0.5s ease-in-out', "background-color": "white" });
	// 	$('.logo').css('color', 'black');
	//     } else {
	// 	$('#menu').css('background', 'none');
	// 	$('.logo').css('color', 'white');
        //
	//     }
	// });


	// if ($(window).width() < 767) {
	// 	$('.logo').css('color', 'black');
	// }
	
});
</script>
</body>
</html>

