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
	<!-- foundation -->
	<link rel="stylesheet" type="text/css" href="include/foundation/css/foundation.css">
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="include/css/menu.css">
	<link rel="stylesheet" type="text/css" href="include/css/font.css">
	<link rel="stylesheet" type="text/css" href="include/css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="include/css/footer.css">
	<link rel="stylesheet" type="text/css" href="include/css/menu.css">
	<link rel="stylesheet" type="text/css" href="include/css/payment.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<!-- autoscroll -->
	<script src="include/autoscroll/animatescroll.js"></script>
	<!-- foundation -->
	<script src="include/foundation/js/foundation.js"></script>

</head>
<body>
<?php include('menu.php');?>
<div class="content">
	<div id="payment">
		<div class="subscribe">
			<form action="">
				<div class="left">
					<div class="col-md-6">
					    <label for="Name"class="subtext">Name on card</label>
					    <input type="name" width="50px" class="form-control">
					</div>
					<div class="col-md-6">
					    <div class="creditcard"></div>
					</div>
					<div class="col-md-12">
					    <label for="card"class="subtext">Credit card number</label>
					    <input type="card" class="form-control">
					</div>

					<div class="col-md-12">
					    <label for="month_start"class="subtext">Expires</label>
					<div class="month">
					<select id="month_start" class="subtext"
						  name="month_start" /> 
						<option>01</option>       
						<option>02</option>       
						<option>03</option>       
						<option>04</option>       
						<option>05</option>       
						<option>06</option>       
						<option>07</option>       
						<option>08</option>       
						<option>09</option>       
						<option>10</option>       
						<option>11</option>       
						<option>12</option>       
					  </select>
					</div>
					<div class="year">
					<select id="year_start" class="subtext"
						 name="year_start" /> 
						<option>2009</option>       
						<option>2010</option>       
						<option>2011</option>       
						<option>2012</option>       
						<option>2013</option>       
						<option>2014</option>       
						<option>2015</option>       
						<option>2016</option>       
						<option>2017</option>       
						<option>2018</option>       
					  </select> 
					</div>
					</div>
					<div class="col-md-12">
						<label for="country" class="subtext">Country</label>
						<select id="country" name=""class="subtext">
							<option value="italy">Italy</option>
							<option value="uk">United Kingdom</option>
							<option value="us">United States</option>
						</select>
					</div>
				</div>
				<div class="right col-md-12">
					<p class="subtitle choose_plan ">Choose the plan</p>
					<ul class="stack button-group">
					  <li><a href="#" class="button subtext">BASIC</a></li>
					  <li><a href="#" class="button subtext">PREMIUM</a></li>
					  <li><a href="#" class="button subtext">ENTERPRISE</a></li>
					</ul>

					<div class="pay col-md-12">
						<p class="subtext billed">*Billed monthly</p>
					</div>
					<div class="pay col-md-12">
						<div class="btn btn-primary payment_button">pay</div>
					</div>
				</div>
			</form>
		</div>
	</div>


	<div id="payment_mobile">
		<div class="title">Payment</div>
		<br>
		<div class="subscribe_mobile">
			<form action="">
				<div class="col-md-12">
				    <label for="Name"class="subtext">Name on card</label>
				    <input type="name" width="50px" class="form-control">
				</div>
				<div class="col-md-12">
				    <label for="card"class="subtext">Credit card number</label>
				    <input type="card" class="form-control">
				</div>
				<div class="col-md-12">
				    <label for="month_start"class="subtext">Expires</label>
				<div class="month">
				<select id="month_start" class="subtext"
					  name="month_start" /> 
					<option>01</option>       
					<option>02</option>       
					<option>03</option>       
					<option>04</option>       
					<option>05</option>       
					<option>06</option>       
					<option>07</option>       
					<option>08</option>       
					<option>09</option>       
					<option>10</option>       
					<option>11</option>       
					<option>12</option>       
				  </select>
				</div>
				<div class="year">
				<select id="year_start" class="subtext"
					 name="year_start" /> 
					<option>2009</option>       
					<option>2010</option>       
					<option>2011</option>       
					<option>2012</option>       
					<option>2013</option>       
					<option>2014</option>       
					<option>2015</option>       
					<option>2016</option>       
					<option>2017</option>       
					<option>2018</option>       
				  </select> 
				</div>
				</div>
				<div class="col-md-12">
					<label for="country" class="subtext">Country</label>
					<select id="country" name=""class="subtext">
						<option value="italy">Italy</option>
						<option value="uk">United Kingdom</option>
						<option value="us">United States</option>
					</select>
				</div>
				<p class="subtitle choose_plan ">Choose the plan</p>
				<ul class="stack button-group">
				  <li><a href="#" class="button subtext">BASIC</a></li>
				  <li><a href="#" class="button subtext">PREMIUM</a></li>
				  <li><a href="#" class="button subtext">ENTERPRISE</a></li>
				</ul>
				<div class="pay col-md-12">
					<p class="subtext billed">*Billed monthly</p>
				</div>
				<div class="pay col-md-12">
					<div class="btn btn-primary payment_button">pay</div>
				</div>
			</form>
		</div>
	</div>



</div>	
<?php //include('footer.php');?>
<script type="text/javascript"> 
$( document ).ready(function() {
	$('.logo').css('color', 'black');
	$('#menu').css('background-color', 'white');
	$('#menu').find('.button').css('display', 'none');
});
</script>

</body>
</html>


