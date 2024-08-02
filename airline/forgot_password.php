<?php
	session_start();
?>
<html>
	<head>
		<title>
			Forgot Password
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px;
			}
			footer {
            background-color: #030337;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/logo.jpg"/> 
		<h1 id="title">
			SkyWave Airlines
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>
		<br>
		<br>
		<br>
		<form class="float_form" style="padding-left: 40px" action="forgot_password_handler.php" method="POST">
			<fieldset>
				<legend>Forgot Password</legend>
				<strong>Email:</strong><br>
				<input type="email" name="email" placeholder="Enter your email" required><br><br>
				<input type="submit" name="Submit" value="Submit">
			</fieldset>
		</form>
		<footer>
        &copy; 2024 SkyWave Airlines. All rights reserved.
    </footer>
	</body>
</html>