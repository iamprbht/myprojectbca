<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
	<style>
			body{
background-image: url(images/b4.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  height: 100%;
		}
	</style>
</head>
<?php
	include 'header.php';
	?>
<body>
	<div class="login-box">
		<h1>Login</h1>
		<form method="post">
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" placeholder="Enter your email" required>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" placeholder="Enter your password" required>
			<button type="submit" class="btn">Login</button>
			<div class="signup-link"><br>
				<p style="text-align: center;">Don't have an account?<b><a href="signup.php" style="text-decoration: none; color:crimson;">Signup</a></b></p>
				
			</div>
		</form>
	</div>
</body>
</html>
