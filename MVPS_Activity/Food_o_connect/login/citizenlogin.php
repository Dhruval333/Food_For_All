<?php include ('clogin.php'); ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Citizen Login</title>
<link rel="stylesheet" type="text/css" href="citizenlogin.css" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="POST">
			<h1>Citizen Login</h1>
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
			<a href="citizen_reg.html">Register</a>
			</div>
            <div>
                <a href="#">Lost your password?</a>
            </div>
		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>
</html>


