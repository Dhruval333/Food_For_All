<?php include ('coser.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>NGO Registeration</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sports Club Membership Registration form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" 
/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="ngo_reg.css" rel="stylesheet" type="text/css" media="all"/><!--style_sheet-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
<!--online_fonts-->
<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet"><!--online_fonts-->
</head>
<body background="pg_3.jpg" background="no-reapeat" background="center">
<h1>NGO Registeration</h1>
<div class="w3ls-main">
<h2>Registration Form</h2>
<p>Complete the form below to sign up.</p>
<div class="w3ls-form">
<form action="#" method="POST">
<?php include('errors.php'); ?>
<ul class="fields">
<div class="Refer_w3l">
<h3>Your details</h3>
    
	<li>	
		<label class="w3ls-opt">NGO Name<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="text" name="NGO_name"  placeholder="NGO name" required=" "/>
		</div>
	</li>
    <li>	
		<label class="w3ls-opt">Admin Name<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="text" name="Admin name"  placeholder="Admin name" required=" "/>
		</div>
	</li>
    <li>	
		<label class="w3ls-opt">User name<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="text" name="User_name"  placeholder="User name" required=" "/>
		</div>
	</li>
	<li>	
		<label class="w3ls-opt">Password<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="password" name="Password"  placeholder="password" required=" "/>
		</div>
	</li>
    <li>	
		<label class="w3ls-opt">Contact<span class="w3ls-star"> * </span></label>
		<div class="w3ls-name">	
			<input type="number" name="Contact"  placeholder="contact" required=" "/>
		</div>
	</li>
    <li>
		<label class="w3ls-opt">Address: <span class="w3ls-star"> * </span> </label>
		<div class="adderss">
			<span class="text">
				<input type="text" name="C_address" placeholder="street address" required=" ">
			</span>
			<span class="text">
				<input type="text" name="C_line" placeholder="street line2" required=" ">
			</span>
			<span class="text">
				<input type="text" name="city" placeholder="city" required="">
				
			</span>
			<span class="text">
				<input type="text" name="street" placeholder="state/province" required="">
				
			</span>
			<span class="text">
				<input type="text" name="zipcode" placeholder="postal/zipcode" required="">
			</span>
			<span class="text">
				<input type="text" name="country" placeholder="country" required="">
			</span>
		</div>
	</li>
	<li>
		<div class="mail">
			<label class="w3ls-opt">e-mail <span class="w3ls-star"> * </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="email" name="email" placeholder="enter your e-mail" required=""/>
			</span>
		</div>
	</li>
	<li>
		<label class="w3ls-opt">Website Link<span class="w3ls-star"> * </span></label>	
			<span class="w3ls-text w3ls-name">
				<input type="text" name="Website link" placeholder="Website link" required=""/>
			</span>
	</li>
	<li>
		<div class="mail">
			<label class="w3ls-opt">Date of Formation <span class="w3ls-star"> * </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="Date" name="Date Of Formation" placeholder="enter the date of formation" required=""/>
			</span>
		</div>
	</li>
							
<div class="clear"></div>
	<div class="w3ls-btn">
		<input type="submit" name="submit" value="Submit">
	</div>
</form>
</div>
</div>
<footer></footer>
</body>
</html>-