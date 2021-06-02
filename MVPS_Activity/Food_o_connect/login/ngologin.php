<?php include ('dlog.php'); ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>NGO Login</title>
<link rel="stylesheet" type="text/css" href="ngologin.css" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="POST">
			<h1>NGO Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name= "password" />
			</div>
			<div>
				<input type="submit" name="log" value="Log in" />
				
			</div>
			<div>
			<a href="ngo_reg.html">Register</a>
			</div>
            <div>
                <a href="#">Lost your password?</a>
            </div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>


